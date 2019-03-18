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

        if (!empty($recipient)) {
            if (true == $useQueues) {
                Mail::to($recipient)->send(new QueueableExceptionReport($exception, request()));
            } else {
                Mail::to($recipient)->send(new ExceptionReport($exception, request()));
            }
        }
    }
}