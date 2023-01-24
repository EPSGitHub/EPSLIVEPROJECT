<?php

namespace App\Http;


use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // \App\Http\Middleware\TrustHosts::class,
        \App\Http\Middleware\TrustProxies::class,
        \Fruitcake\Cors\HandleCors::class,
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \CodeZero\LocalizedRoutes\Middleware\SetLocale::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'userAccess' => \App\Http\Middleware\userAccess::class,
        'userCreate' => \App\Http\Middleware\userCreate::class,
        'userDepartment' => \App\Http\Middleware\userDepartment::class,
        'CareerManagement' => \App\Http\Middleware\careerSectionManagement::class,
        'userAccessViewControl' => \App\Http\Middleware\userAccessViewControl::class,
        'userDesignation' => \App\Http\Middleware\userDesignation::class,
        'careerPost' => \App\Http\Middleware\careerPost::class,
        'jobApplication' => \App\Http\Middleware\jobApplication::class,
        'jobPosition' => \App\Http\Middleware\jobPosition::class,
        'jobPrefix' => \App\Http\Middleware\jobPrefix::class,
        'eventView' => \App\Http\Middleware\eventView::class,
        'eventManage' => \App\Http\Middleware\eventManage::class,
        'eventCreate' => \App\Http\Middleware\eventCreate::class,
        'eventCategory' => \App\Http\Middleware\eventCategory::class,
        'blogCategory' => \App\Http\Middleware\blogCategory::class,
        'blogView' => \App\Http\Middleware\blogView::class,
        'blogTag' => \App\Http\Middleware\blogTag::class,
        'blogCreate' => \App\Http\Middleware\blogCreate::class,
        'postManagement' => \App\Http\Middleware\postManagement::class,
        'faqCreate' => \App\Http\Middleware\faqCreate::class,
        'faqCategory' => \App\Http\Middleware\faqCategory::class,
        'faqManage' => \App\Http\Middleware\faqManage::class,
        'pressView' => \App\Http\Middleware\pressView::class,
        'pressCreate' => \App\Http\Middleware\pressCreate::class,
        'pressManage' => \App\Http\Middleware\pressManage::class,
        'pressCategory' => \App\Http\Middleware\pressCategory::class,
        'WebSettingsPanel' => \App\Http\Middleware\WebSettingsPanel::class,

    ];
}
