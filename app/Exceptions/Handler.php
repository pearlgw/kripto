<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        try {
            if ($this->isHttpException($exception)) {
                return $this->renderHttpException($exception);
            } elseif ($exception instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
                return $this->renderErrorView('404', 'Not Found');
            } else {
                return $this->renderErrorView('500', 'Server Error');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    protected function renderErrorView($statusCode, $message)
    {
        return response()->view('error.errorpage', [
            'title' => $statusCode,
            'statusCode' => $statusCode,
            'message' => $message,
            'user' => auth()->user()->name,
            'image' => auth()->user()->image,
        ]);
    }
}
