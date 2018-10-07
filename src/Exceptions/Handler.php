<?php

namespace WebID\LaravelReportExceptions\Exceptions;

use App\Exceptions\Handler as LaravelExceptionHandler;
use Exception;
use Illuminate\Support\Facades\Mail;
use WebID\LaravelReportExceptions\Mail\ExceptionReport;

class Handler extends LaravelExceptionHandler
{
    /**
     * When an error occurs and is not catched, send an email
     *  (if a recipient had been precised)
     *
     * @see LaravelExceptionHandler::report()
     * @param Exception $exception
     */
    public function report(Exception $exception)
    {
        $recipient = config('report-exceptions.email-to');

        if (!empty($recipient)) {
            Mail::to($recipient)
                ->send(new ExceptionReport($exception, request()));
        }

        parent::report($exception);
    }
}