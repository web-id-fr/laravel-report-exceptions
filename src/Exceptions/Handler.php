<?php

namespace WebID\LaravelReportExceptions\Exceptions;

use App\Exceptions\Handler as LaravelExceptionHandler;
use Exception;
use WebID\LaravelReportExceptions\Traits\CanReportExceptions;

class Handler extends LaravelExceptionHandler
{
    use CanReportExceptions;

    /**
     * When an error occurs and is not catched, send an email
     *  (if a recipient had been precised)
     *
     * @see LaravelExceptionHandler::report()
     *
     * @param Exception $exception
     */
    public function report(Exception $exception)
    {
        $this->reportByEmail($exception);

        parent::report($exception);
    }
}