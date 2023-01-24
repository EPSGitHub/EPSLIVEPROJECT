<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);


 Route::get('dashboard/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::get('/dashboard/login', [App\Http\Controllers\loginController::class, 'LoginPage'])->name('dashboard.login');
 Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
 Route::resource('profilemanage','App\Http\Controllers\profileManagement');
 Route::get('/dashboard/profile/{id}', [App\Http\Controllers\profileManagement::class, 'edit'])->name('dashboard.profile');


Auth::routes();
Route::get('contact-us', [App\Http\Controllers\ContactController::class, 'index'])-> name('frontend.contact');;
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');
Route::post('subscribe', [App\Http\Controllers\subscribeController::class, 'subscribe'])->name('subscribe');


Route::post('job-application', [App\Http\Controllers\jobApplicationController::class, 'store'])->name('job.application.store');




Route::post('payment-gateway-registration', [App\Http\Controllers\pgRequestController::class, 'store'])->name('payment.registration.store');


Route::get('corporate-client-registration', [App\Http\Controllers\CorporateRequestController::class, 'index'])-> name('frontend.corporate.registration');;
Route::post('corporate-client-registration', [App\Http\Controllers\CorporateRequestController::class, 'store'])->name('corporate.registration.store');


//Admin Access Control


Route::middleware('userAccess')->group(function(){

  // User Management
Route::resource('dashboard/admin/user','App\Http\Controllers\UserManagement');
Route::resource('userpasswordmanage','App\Http\Controllers\UserPasswordManageController');
Route::get('dashboard/admin/user/{id}', [App\Http\Controllers\UserManagement::class, 'edit'])->name('dashboard.user');

});

Route::middleware('userCreate')->group(function(){

    Route::get('dashboard/admin/user/create', [App\Http\Controllers\UserManagement::class, 'create'])->name('user.create');

});


Route::middleware('userDepartment')->group(function(){

    Route::resource('dashboard/department','App\Http\Controllers\UserDeparmentManageController');

});


Route::middleware('userDesignation')->group(function(){

    Route::resource('dashboard/designation','App\Http\Controllers\UserDesignationManageController');
});


Route::middleware('userAccessViewControl')->group(function(){

    Route::resource('userAccessControl','App\Http\Controllers\UserAccessController');

});





//Blogpost Manage


Route::middleware('postManagement')->group(function(){

Route::resource('post','App\Http\Controllers\postController');
Route::get('post/statusInactive/{id}','App\Http\Controllers\postController@statusCheckedInactive');
Route::get('post/statusActive/{id}','App\Http\Controllers\postController@statusCheckedActive');

});

//Blogpost View
Route::middleware('blogView')->group(function(){
    Route::resource('postview','App\Http\Controllers\BlogpostViewController');
    Route::resource('postperformance','App\Http\Controllers\postPerformanceController');
    Route::get('postperformance/statusInactive/{id}','App\Http\Controllers\postPerformanceController@statusCheckedInactive');
Route::get('postperformance/statusActive/{id}','App\Http\Controllers\postPerformanceController@statusCheckedActive');
});

//Blogpost create
Route::middleware('blogCreate')->group(function(){
    Route::resource('dashboard/postCreate','App\Http\Controllers\postCreateController');
});


//Blogpost Category
Route::middleware('blogCategory')->group(function(){
    Route::resource('postCategory','App\Http\Controllers\postCategoryController');
});

//Blogpost TAG
Route::middleware('blogTag')->group(function(){
    Route::resource('postTag','App\Http\Controllers\postTagController');
});

// press release

//press release view
Route::middleware('pressView')->group(function(){
    Route::get('dashboard/events/pressview', [App\Http\Controllers\PressReleaseviewController::class, 'pressView'])->name('pressview');
});

//press release create
Route::middleware('pressCreate')->group(function(){
    Route::resource('dashboard/presscreate','App\Http\Controllers\PressReleaseCreateController');
});
//press release Manage
Route::middleware('pressManage')->group(function(){
    Route::resource('dashboard/pressManage','App\Http\Controllers\PressReleaseManageController');
    Route::get('dashboard/pressManage/statusInactive/{id}','App\Http\Controllers\PressReleaseManageController@statusCheckedInactive');
    Route::get('dashboard/pressManage/statusActive/{id}','App\Http\Controllers\PressReleaseManageController@statusCheckedActive');

});
//press release Category
Route::middleware('pressCategory')->group(function(){
    Route::resource('dashboard/pressCategory','App\Http\Controllers\PressReleaseCategoryController');
});








//FAQ

//Faq create
Route::middleware('faqCreate')->group(function(){
    Route::resource('faqCreate','App\Http\Controllers\faqCreateController');
});
//Faq Category
Route::middleware('faqCategory')->group(function(){
    Route::resource('faqCategory','App\Http\Controllers\faqCategoryController');
});
//Faq manage
Route::middleware('faqManage')->group(function(){

    Route::resource('faqs','App\Http\Controllers\faqManageController');
Route::get('faqs/statusInactive/{id}','App\Http\Controllers\faqManageController@statusCheckedInactive');
Route::get('faqs/statusActive/{id}','App\Http\Controllers\faqManageController@statusCheckedActive');

});






Route::middleware('eventView')->group(function(){
    Route::get('dashboard/events/eventshow', [App\Http\Controllers\eventViewController::class, 'eventshow'])->name('eventshow');

});
Route::middleware('eventManage')->group(function(){
    Route::resource('dashboard/eventpost','App\Http\Controllers\eventController');
Route::get('dashboard/eventpost/statusInactive/{id}','App\Http\Controllers\eventController@statusCheckedInactive');
Route::get('dashboard/eventpost/statusActive/{id}','App\Http\Controllers\eventController@statusCheckedActive');

});

Route::middleware('eventCreate')->group(function(){
Route::resource('dashboard/eventcreate','App\Http\Controllers\eventCreateController');
});
Route::middleware('eventCategory')->group(function(){

Route::resource('dashboard/eventCategory','App\Http\Controllers\eventCategoryController');
});





//EDITOR  Access Control

Route::middleware('CareerManagement')->group(function(){

    Route::resource('dashboard/careers','App\Http\Controllers\CareerController');
    Route::resource('dashboard/jobpostdraft','App\Http\Controllers\jobPostDraft');
    Route::resource('dashboard/jobpublished','App\Http\Controllers\jobPublished');
    Route::resource('dashboard/jobunpublished','App\Http\Controllers\jobUnPublished');



    Route::get('dashboard/careers/statusInactive/{id}','App\Http\Controllers\CareerController@statusCheckedInactive');
    Route::get('dashboard/careers/statusActive/{id}','App\Http\Controllers\CareerController@statusCheckedActive');
    Route::get('dashboard/jobpost/draft/statusInactive/{id}','App\Http\Controllers\CareerController@statusCheckedInactive');
    Route::get('dashboard/jobpost/draft/statusActive/{id}','App\Http\Controllers\CareerController@statusCheckedActive');
    Route::get('dashboard/careercat/statusInactive/{id}','App\Http\Controllers\CareerCategoryController@statusCheckedInactive');
    Route::get('dashboard/careercat/statusActive/{id}','App\Http\Controllers\CareerCategoryController@statusCheckedActive');
    Route::get('dashbaord/joblist','App\Http\Controllers\CareerController@jobListViewControl') ->name('career.joblist');




});


Route::middleware('careerPost')->group(function(){

    Route::get('dashboard/careers/create', [App\Http\Controllers\CareerController::class, 'create'])->name('careers.create');


    // Route::get('dashboard/jobpost/draft',[App\Http\Controllers\CareerController::class, 'Draft']);

});


Route::middleware('jobPosition')->group(function(){

    Route::resource('dashboard/careerCategory','App\Http\Controllers\CareerCategoryController');
    Route::resource('dashboard/jobdesignation','App\Http\Controllers\jobDesignationController');

});


Route::middleware('jobPrefix')->group(function(){

    Route::resource('dashboard/jobprefix','App\Http\Controllers\JobPrefixController');



});



Route::middleware('jobApplication')->group(function(){

    Route::resource('dashboard/job-applications','App\Http\Controllers\jobApplicationManageController');

    Route::get('dashboard/job-application/{id}','App\Http\Controllers\jobApplicationManageController@applicantview') ->name('job.applicantview');
    Route::get('dashboard/application-checked/{id}','App\Http\Controllers\jobApplicationManageController@Checked');
    Route::get('dashboard/shorlist-update/{id}','App\Http\Controllers\jobApplicationManageController@shortlist');
    Route::get('dashboard/application-rejected/{id}','App\Http\Controllers\jobApplicationManageController@ApplicationRejected');
    Route::get('dashboard/job-hired/{id}','App\Http\Controllers\jobApplicationManageController@Applicanthired');
    Route::get('dashboard/job-application/job-application-rejected/{id}','App\Http\Controllers\jobApplicationManageController@rejected');
    Route::get('dashboard/job-application/job-application-shortlisted/{id}','App\Http\Controllers\jobApplicationManageController@shortlisted');
    Route::get('dashboard/job-application/job-application-hired/{id}','App\Http\Controllers\jobApplicationManageController@Hired');
    Route::get('dashboard/job-application/job-application-checked/{id}','App\Http\Controllers\jobApplicationManageController@Statchecked');
    Route::get('dashboard/job-application/job-application-total/{id}','App\Http\Controllers\jobApplicationManageController@allApplication');


});



// Settings WebSettingsPanel

Route::middleware('WebSettingsPanel')->group(function(){

Route::get('dashboard/settings/appdwn',[App\Http\Controllers\SettingsManagement::class,'settingsAppDownloadView'])->name('settings.appdwn');

Route::get('dashboard/settings/blog-sidebar-img',[App\Http\Controllers\SettingsManagement::class,'BlogSidebarImages'])->name('settings.blogsidebar');


Route::put('dashboard/settings/dwnsettingsUpdate',[App\Http\Controllers\SettingsManagement::class,'AppDwnMessageUpdate']) ->name('settings.appdwnupdate');
Route::put('dashboard/settings/sidebar-image-update',[App\Http\Controllers\SettingsManagement::class,'blogSidebarImageaUpdate']) ->name('settings.blogSidebarImageaUpdate');
Route::get('dashboard/settings/social-links',[App\Http\Controllers\SettingsManagement::class,'socialLinks'])->name('settings.socials');
Route::put('dashboard/settings/social-settings-Update',[App\Http\Controllers\SettingsManagement::class,'socialLinksUpdate']) ->name('settings.socialupdate');
Route::get('dashboard/settings/contacts',[App\Http\Controllers\SettingsManagement::class,'ContactSetting'])->name('settings.contact');
Route::put('dashboard/settings/web-contacts-Update',[App\Http\Controllers\SettingsManagement::class,'ContactSettingUpdate']) ->name('settings.contactupdate');

Route::resource('dashboard/webpopup','App\Http\Controllers\webPopupController');
Route::get('dashboard/webpopup/statusInactive/{id}','App\Http\Controllers\webPopupController@statusCheckedInactive');
Route::get('dashboard/webpopup/statusActive/{id}','App\Http\Controllers\webPopupController@statusCheckedActive');


Route::resource('dashboard/fulltext','App\Http\Controllers\fullTextSearchController');
Route::resource('dashboard/partnerimg','App\Http\Controllers\partnerImageController');

Route::post('Custom-sortable','App\Http\Controllers\partnerImageController@orderupdate');



});

//FrontEnd Management


Route::localized(function () {
Route::get('/',[App\Http\Controllers\frontendViewManagement::class,'HomePage'])->name('fontend.home');
Route::get('/register',[App\Http\Controllers\frontendViewManagement::class,'Errorpage']);
Route::get('/contact-us',[App\Http\Controllers\frontendViewManagement::class,'ContactUs']) -> name('frontend.contact');
Route::get('/about-us',[App\Http\Controllers\frontendViewManagement::class,'AboutUs']) -> name('frontend.aboutus');
Route::get('/single-details',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails']) -> name('frontend.singledetails');
Route::get('/team',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_Team']) -> name('frontend.team');
Route::get('/terms-and-condition',[App\Http\Controllers\frontendViewManagement::class,'TermsAndCondition']) -> name('frontend.terms');
Route::get('/privacy-policy',[App\Http\Controllers\frontendViewManagement::class,'PrivacyPage']) -> name('frontend.privacy');
Route::get('/cookie',[App\Http\Controllers\frontendViewManagement::class,'CookiePage']) -> name('frontend.cookie');
Route::get('/faq',[App\Http\Controllers\frontendViewManagement::class,'FaqPage']) -> name('frontend.faq');
Route::get('/blog',[App\Http\Controllers\frontendViewManagement::class,'Blog']) -> name('frontend.blog');
Route::get('/blog-details/{cid:slug}',[App\Http\Controllers\frontendViewManagement::class,'BlogSingle'])->name('frontend.postdetails');
Route::get('/career',[App\Http\Controllers\frontendViewManagement::class,'Career']) -> name('frontend.career');
Route::get('/career-details/{cid:slug}',[App\Http\Controllers\frontendViewManagement::class,'CareerDetailsPage'])->name('frontend.cdetails');
Route::get('/service',[App\Http\Controllers\frontendViewManagement::class,'Service']) -> name('frontend.service');
Route::get('/service-single',[App\Http\Controllers\frontendViewManagement::class,'ServiceSingle']) -> name('frontend.service_single');
Route::get('/service-single-page',[App\Http\Controllers\frontendViewManagement::class,'ServiceSingleDetails']) -> name('frontend.service_single_details');
Route::get('/event',[App\Http\Controllers\frontendViewManagement::class,'Event']) -> name('frontend.event');
Route::get('/event-details/{cid:slug}',[App\Http\Controllers\frontendViewManagement::class,'EventDetails']) -> name('frontend.event_details');
Route::get('/press-release',[App\Http\Controllers\frontendViewManagement::class,'PressRelease']) -> name('frontend.press_release');

Route::get('/press-details/{cid:slug}',[App\Http\Controllers\frontendViewManagement::class,'PressReleaseSingle'])->name('frontend.pressdetails');

Route::get('/offer',[App\Http\Controllers\frontendViewManagement::class,'OfferPage']) -> name('frontend.offer');
Route::get('/offer_single',[App\Http\Controllers\frontendViewManagement::class,'OfferSinglePage']) -> name('frontend.offer_single');
Route::get('/eps-media',[App\Http\Controllers\frontendViewManagement::class,'Media']) -> name('frontend.media');
Route::get('/eps-media-single',[App\Http\Controllers\frontendViewManagement::class,'MediaSingle']) -> name('frontend.media_single');
Route::get('/eps-media-single-details',[App\Http\Controllers\frontendViewManagement::class,'MediaSingleDetails']) -> name('frontend.media_single_details');
Route::get('/eps-partner',[App\Http\Controllers\frontendViewManagement::class,'PartnerDetails']) -> name('frontend.partner');
Route::get('/eps-partner-single',[App\Http\Controllers\frontendViewManagement::class,'PartnerSingleDetails']) -> name('frontend.partner-details');
Route::get('/merchant',[App\Http\Controllers\frontendViewManagement::class,'Merchant']) -> name('frontend.merchant');
Route::get('/merchant-details',[App\Http\Controllers\frontendViewManagement::class,'MerchantDetails']) -> name('frontend.merchant_details');
Route::get('/app-details',[App\Http\Controllers\frontendViewManagement::class,'AppDetails']) -> name('frontend.app_details');
Route::get('/eps-support',[App\Http\Controllers\frontendViewManagement::class,'SupportDetails']) -> name('frontend.support');
Route::get('/sitemap',[App\Http\Controllers\frontendViewManagement::class,'Sitemap']) -> name('frontend.sitemap');
Route::get('job-application/{cid:slug}', [App\Http\Controllers\jobApplicationController::class, 'index'])->name('frontend.jobdetails');

//single_details
Route::get('about-us/mr-mohammad-mohsin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_Mohsin']) -> name('frontend.mohsin');
Route::get('about-us/md-shah-alam',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_shahAlam']) -> name('frontend.shahalam');
Route::get('about-us/nasir-uddin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_nasirUddin']) -> name('frontend.nasir');
Route::get('about-us/md-faruq-ahmed',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_Faruq']) -> name('frontend.faruq');
Route::get('about-us/mr-nasimul-hasin',[App\Http\Controllers\frontendViewManagement::class,'AboutUs_singleDetails_nasimul']) -> name('frontend.nasimul');

//End Single Details


// Service Pages Start
Route::get('/services/payment-gateway',[App\Http\Controllers\frontendViewManagement::class,'PaymentGateway']) -> name('frontend.payment');
Route::get('/fund-transfer',[App\Http\Controllers\frontendViewManagement::class,'FundTransfer']) -> name('frontend.fund_transfer');
Route::get('/services/bill-pay',[App\Http\Controllers\frontendViewManagement::class,'BillPay']) -> name('frontend.billpay');
Route::get('/services/mobile-recharge',[App\Http\Controllers\frontendViewManagement::class,'MobileRecharge']) -> name('frontend.mobile_recharge');
Route::get('/corporate',[App\Http\Controllers\frontendViewManagement::class,'CorporateService']) -> name('frontend.corporate');
Route::get('/corporate-client-registration',[App\Http\Controllers\frontendViewManagement::class,'CorporateClientReg']) -> name('frontend.corporate-reg');
Route::get('/terrif-calculator',[App\Http\Controllers\frontendViewManagement::class,'TerrifCalculator']) -> name('frontend.terrif');

// Service Page End

// App Download Pages
Route::get('/android-app-download',[App\Http\Controllers\frontendViewManagement::class,'AndroidAppDownload']) -> name('frontend.apk');
Route::get('/ios-app-download',[App\Http\Controllers\frontendViewManagement::class,'IosAppDownload']) -> name('frontend.ios');

// App Download Pages END



//press releasepress-release-business-desk

Route::get('/press-release/business-desk',[App\Http\Controllers\frontendViewManagement::class,'PressRelease1']) -> name('frontend.businessdesk');
Route::get('/press-release/business-standard',[App\Http\Controllers\frontendViewManagement::class,'PressRelease2']) -> name('frontend.business_standard');
Route::get('/press-release/daily-star',[App\Http\Controllers\frontendViewManagement::class,'PressRelease3']) -> name('frontend.daily_star');

Route::get('/press-release-jugantor',[App\Http\Controllers\frontendViewManagement::class,'PressRelease4']) -> name('frontend.jugantor');

//press release end

//Payment Gateway Registration

Route::get('payment-gateway-registration', [App\Http\Controllers\pgRequestController::class, 'index'])-> name('frontend.payment.registration');

//blog Section Start

/* Route::get('/blog/fintech-a-Prominent-Revamp-in-Bangladesh',[App\Http\Controllers\frontendViewManagement::class,'Blogpost1']) -> name('frontend.fintech');
Route::get('/blog/Post-liberation-Economic-Status-of-Bangladesh',[App\Http\Controllers\frontendViewManagement::class,'Blogpost2']) -> name('frontend.postlibaration');
Route::get('/blog/IDTP-First-Step-Towards-a-cashless-society',[App\Http\Controllers\frontendViewManagement::class,'Blogpost3']) -> name('frontend.idtp');
Route::get('/blog/Bangladesh-Electronic-Funds-Transfer-Network',[App\Http\Controllers\frontendViewManagement::class,'Blogpost4']) -> name('frontend.beftn');
Route::get('/blog/National-Payment-Switch-Bangladesh',[App\Http\Controllers\frontendViewManagement::class,'Blogpost5']) -> name('frontend.npsb');
Route::get('/blog/Real-Time-fund-transfer-using-RTGS',[App\Http\Controllers\frontendViewManagement::class,'Blogpost6']) -> name('frontend.rtgs');
Route::get('/blog/What-you-need-to-know-about-SWIFT',[App\Http\Controllers\frontendViewManagement::class,'Blogpost7']) -> name('frontend.swift'); */
//blog section end

// websearch

Route::post('/search', 'App\Http\Controllers\frontendViewManagement@websearch')->name('web.search');
Route::get('/autocomplete', 'App\Http\Controllers\frontendViewManagement@getWebSearch')->name('autocomplete');
Route::get('/blog/{slug}', 'App\Http\Controllers\frontendViewManagement@BlogCategorySearch')->name('frontend.blog.cat');

Route::get('/sitemap.xml', 'App\Http\Controllers\SitemapController@index');
Route::get('/robots.txt', 'App\Http\Controllers\SitemapController@robot');

});


