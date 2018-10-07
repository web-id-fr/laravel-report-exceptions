# Laravel Report Exceptions
A simple Laravel 5+ package to report non-catched exceptions by mail.

## Installation

### 1. Run  `composer require web-id-fr/laravel-report-exceptions:~1.0`
### 2. Publish assets / config / lang files 
```
php artisan vendor:publish --provider="WebID\LaravelReportExceptions\LaravelReportExceptionsServiceProvider"
```
### 3. Update file `bootstrap/app.php`  

### 4. Update file `.env`

```
REPORT_MAIL_TO=my@email.com
```