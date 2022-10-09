<?php
use Illuminate\Support\Facades\Route;


Route::get('sitemap.xml','SitemapController@index')->name('sitemap.xml.index');
Route::get('sitemap/{slug}','SitemapController@single')->name('sitemap.xml.single');
Route::get('robots.txt','SitemapController@robots')->name('robots.txt');

Route::post('contact','PublicController@contactSubmit')->name('contact.submit');