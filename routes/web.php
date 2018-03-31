<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', function () use ($router) {
  $res['success'] = true;
  $res['result'] = "Hello there welcome to web api using lumen tutorial!";
  return response($res);
});
/* Route user */
$router->post('/login', 'LoginController@index');
$router->post('/register', 'UserController@register');
$router->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);

/* Route caregory ads */
 $router->get('/category', 'CategoryAdsController@index');
 $router->get('/category/{id}', 'CategoryAdsController@read');
 $router->post('/category', 'CategoryAdsController@create');
 $router->post('/category/update/{id}', 'CategoryAdsController@update');
 $router->post('/category/delete/{id}', 'CategoryAdsController@delete');

 /* Route item ads */
 $router->get('/item_ads', 'ItemAdsController@index');
 $router->get('/item_ads/{id}', 'ItemAdsController@read');
 $router->get('/item_ads/delete/{id}', 'ItemAdsController@delete');
 $router->post('/item_ads/create', 'ItemAdsController@create');
 $router->post('/item_ads/update/{id}', 'ItemAdsController@update');
