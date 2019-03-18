<?php

namespace WebID\LaravelReportExceptions\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class QueueableExceptionReport extends ExceptionReport implements ShouldQueue
{
    use Queueable;
}