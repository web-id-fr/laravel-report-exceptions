<?php

namespace WebID\LaravelReportExceptions\Mail;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Throwable;

class ExceptionReport extends Mailable
{
    use SerializesModels;

    /** @var string The error message */
    protected $message;

    /** @var Collection The error stack trace */
    protected $stack_trace;

    /** @var mixed The error class name, full qualified */
    protected $class;

    /** @var string The file in which the error occured */
    protected $filename;

    /** @var int The file line number on which the error occured */
    protected $line;

    /** @var Carbon The error date time */
    protected $time;

    /** @var string The URL on which the error occured */
    protected $url;

    /**
     * ExceptionReport constructor.
     *
     * @param Throwable $throwable
     * @param Request   $request
     */
    public function __construct(Throwable $throwable, Request $request)
    {
        $this->stack_trace = Collection::make($throwable->getTrace())->map(function ($item) {
            return [
                'file' => $item['file'] ?? '',
                'line' => $item['line'] ?? '',
                'class' => $item['class'] ?? '',
                'type' => $item['type'] ?? '',
                'function' => $item['function'] ?? '{closure}',
            ];
        });
        $this->message = $throwable->getMessage();
        $this->class = str_replace('\\', ' \\ ', get_class($throwable));
        $this->filename = $throwable->getFile();
        $this->line = $throwable->getLine();
        $this->time = Carbon::now();
        $this->url = $request->fullUrl();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $config = config('report-exceptions');

        return $this
            ->subject($config['email-subject'])
            ->view('lre::email', [
                'subject' => $config['email-subject'],
                'error_message' => $this->message,
                'stack_trace' => $this->stack_trace,
                'error_class' => $this->class,
                'filename' => $this->filename,
                'line' => $this->line,
                'error_url' => $this->url,
                'server_vars' => $config['show-dotenv'] ? $_SERVER : array_diff_key($_SERVER, $_ENV),
                'error_time' => $this->time->format($config['time-format']),
                'theme' => $config['theme'],
            ]);
    }
}
