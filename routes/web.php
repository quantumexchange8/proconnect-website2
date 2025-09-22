<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content');
});

//services
Route::get('/services/web-design', function(){
    return view('services.web-design');
});

Route::get('/services/seo',function(){
    return view('services.seo');
});

Route::get('/services/data',function(){
    return view('services.data');
});

Route::get('/services/content',function(){
    return view('services.content');
});

Route::get('/services/formation', function(){
    return view('services.formation');
});

Route::get('/services/media',function(){
    return view('services.media');
});

Route::get('/services/social',function(){
    return view('services.social');
});

//FAQ
Route::get('/services/faq',function(){
    return view('services.faq');
});

//Contact Us
Route::get('/services/contactus', function(){
    return view('services.contactus');
});

//About Us
Route::get('/services/aboutus',function(){
    return view('services.aboutus');
});