# Laravel Report Exceptions
A simple Laravel 5+ package to report non-catched exceptions by mail.

## Installation

### 1. Require the package
```
composer require web-id-fr/laravel-report-exceptions:~1.0
```

### 2. Publish assets / config / lang files 
```
php artisan vendor:publish --provider="WebID\LaravelReportExceptions\LaravelReportExceptionsServiceProvider"
```
This command will publish the following files :
 * A configuration file (`/config/report-exceptions.php`)
 * Translations files (`/resources/lang/*/report.php`)
 * The email template (`/resources/views/vendor/report-exceptions/email.blade.php`)
### 3. Update file `bootstrap/app.php`  
In this file, change the following part :
```
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);
```
Into this part :
```
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    \WebID\LaravelReportExceptions\Exceptions\Handler::class
);
```

### 4. Update file `.env`
By default, the recipient email is empty. To activate the feature, you just have to add the following line in your `.env` file :
```
REPORT_MAIL_TO=my@email.com
```

You can also customize other things using the `.env` file, see the `/config/report-exceptions.php` file for more details.
