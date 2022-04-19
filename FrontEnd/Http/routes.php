<?php

use FrontEnd\Mail\SimpleMail;
use Illuminate\Support\Facades\DB;
Route::get('build/pages', 'Mcms\Pages\Http\Controllers\PageController@index');
Route::get('build/page/{id}', 'Mcms\Pages\Http\Controllers\PageController@show');

Route::post('contact', [
    'as' => 'contactForm',
    'middleware' => ['cors'],
    'uses' => 'FrontEnd\Http\Controllers\ContactController@contactForm'
]);

Route::prefix('astro')->middleware(['astroAuth'])->group(function($router) {
    $router->get('/boot', '\FrontEnd\Http\Controllers\Astro\AstroBootController@index');
    $router->get('/home', '\FrontEnd\Http\Controllers\Astro\AstroHomePageController@index');
    $router->get('/categories', '\FrontEnd\Http\Controllers\Astro\AstroCategoriesController@index');
    $router->get('/tags', '\FrontEnd\Http\Controllers\Astro\AstroTagController@index');
    $router->get('/pages', '\FrontEnd\Http\Controllers\Astro\AstroPageController@index');
    $router->get('/pages/count', '\FrontEnd\Http\Controllers\Astro\AstroPageController@count');
});



Route::group(['middleware' => ['web']], function ($router) {
    $router->get('/', ['as' => 'home', 'uses'=> 'FrontEnd\Http\Controllers\HomeController@index']);
//    $router->get('/contact', ['as' => 'contact', 'uses' => 'FrontEnd\Http\Controllers\ContactController@index']);
//    $router->post('/contact', ['as' => 'contact', 'uses'=> 'FrontEnd\Http\Controllers\ContactController@post']);

    $router->get('/page/{id}/{slug}', ['as' => 'article', 'uses'=> 'FrontEnd\Http\Controllers\ArticleController@index']);
    $router->get('/pages/{slug}', ['as' => 'articles', 'uses'=> 'FrontEnd\Http\Controllers\ArticleController@articles']);
    $router->view('/search', 'articles.search');

    $router->get('/listing/{slug}', ['as' => 'listing', 'uses'=> 'FrontEnd\Http\Controllers\ListingController@index']);
    $router->get('/listings/{slug}', ['as' => 'listings', 'uses'=> 'FrontEnd\Http\Controllers\ListingsController@index'
        , 'defaultSlug' => 'listings']);

    $router->get('/store/{slug}', ['as' => 'store', 'uses'=> 'FrontEnd\Http\Controllers\ListingController@index'
        , 'defaultSlug' => 'store']);
    $router->get('/stores/{slug}', ['as' => 'stores', 'uses'=> 'FrontEnd\Http\Controllers\ListingController@articles'
        , 'defaultSlug' => 'stores']);

    $router->get('/product/{slug}', ['as' => 'product', 'uses'=> 'FrontEnd\Http\Controllers\ArticleController@index']);
    $router->get('/products/{slug}', ['as' => 'products', 'uses'=> 'FrontEnd\Http\Controllers\ArticleController@articles'
        , 'defaultSlug' => 'listings']);


    $router->get('/sitemap.xml', ['as' => 'sitemap', 'uses'=> 'FrontEnd\Http\Controllers\SiteMapController@index']);
    $router->get('/tag/{slug}', ['as' => 'tag', 'uses'=> 'FrontEnd\Http\Controllers\TagController@index']);
});




Route::get('mailchimp', 'FrontEnd\Http\Controllers\MailchimpHooksController@index');
Route::post('mailchimp', 'FrontEnd\Http\Controllers\MailchimpHooksController@index');
/*
Route::get('finish-registration/{hash}', [
    'as' => 'finishRegistration',
    'uses' => 'FrontEnd\Http\Controllers\MailRegistration@finishRegistration'
]);

Route::post('finish-registration', [
    'as' => 'finishRegistrationPost',
    'uses' => 'FrontEnd\Http\Controllers\MailRegistration@submitFinishRegistration'
]);

Route::post('subscribeToContent', [
    'as' => 'subscribeToContent',
    'uses' => 'FrontEnd\Http\Controllers\MailRegistration@subscribeToContent'
]);

Route::post('subscriptionForm', [
    'as' => 'subscriptionForm',
    'uses' => 'FrontEnd\Http\Controllers\MailRegistration@subscribeToContent'
]);

Route::get('test-email', function (){


    return \FrontEnd\Helpers\AllFormsAsOptions::get();
});

Route::get('fbia', function (){
    $feed = FBIARss::feed('2.0', 'UTF-8');
    $feed->channel(array('title' => 'Channel\'s title', 'description' => 'Channel\'s description', 'link' => 'http://www.test.com/'));
    for ($i=1; $i<=5; $i++){
        $feed->item(array('title' => 'Item '.$i, 'description|cdata' => 'Description '.$i, 'link' => 'http://www.test.com/article-'.$i));
    }

    return Response::make($feed, 200, array('Content-Type' => 'text/xml'));
});



Route::post('pusher/send', [
    'as' => 'pusherSend',
    'uses' => 'FrontEnd\Http\Controllers\PusherController@send'
]);

// Authentication Routes...

Route::get('login', 'Mcms\FrontEnd\Http\Controllers\Auth\AuthController@showLoginForm');
Route::post('login', 'Mcms\FrontEnd\Http\Controllers\Auth\AuthController@login');
Route::get('logout', 'Mcms\FrontEnd\Http\Controllers\Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Mcms\FrontEnd\Http\Controllers\Auth\AuthController@showRegistrationForm');
Route::post('register', 'Mcms\FrontEnd\Http\Controllers\Auth\AuthController@register');

// Password Reset Routes...
Route::get('password/reset/{token?}', 'Mcms\FrontEnd\Http\Controllers\Auth\PasswordController@showResetForm');
Route::post('password/email', 'Mcms\FrontEnd\Http\Controllers\Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Mcms\FrontEnd\Http\Controllers\Auth\PasswordController@reset');*/