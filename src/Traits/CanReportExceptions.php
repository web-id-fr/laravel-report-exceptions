<?php

namespace WebID\LaravelReportExceptions\Traits;

use Illuminate\Support\Facades\Mail;
use WebID\LaravelReportExceptions\Mail\ExceptionReport;
use WebID\LaravelReportExceptions\Mail\QueueableExceptionReport;

trait CanReportExceptions
{
    /**
     * When an error occurs and is not catched, send an email
     *  (if a recipient had been precised)
     *
     * @param \Throwable $exception
     */
    public function reportByEmail(\Throwable $exception)
    {
        $recipient = config('report-exceptions.email-to');
        $useQueues = config('report-exceptions.use-queues');

        $skipException = $this->dontReportException($exception);

        if (!empty($recipient) && !$skipException) {
            if (true == $useQueues) {
                Mail::to($recipient)->send(new QueueableExceptionReport($exception, request()));
            } else {
                Mail::to($recipient)->send(new ExceptionReport($exception, request()));
            }
        }
    }

    /**
     * Determines if the given Exception must be reported or not
     *
     * @param \Throwable $exception
     *
     * @return bool
     */
    public function dontReportException(\Throwable $exception)
    {
        $class = get_class($exception);
        $exceptionsToSkip = config('report-exceptions.ignored-exceptions', []);

        return in_array($class, $exceptionsToSkip);
    }
}