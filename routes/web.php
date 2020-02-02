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

use App\Models\Quote;

$router->get('/', function () use ($router) {
    //return $router->app->version();

    $quotes = Quote::query()->get()->all();

    if (empty($quotes)) {
        throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
    }

    return view('home', ['quote' => $quotes]);


});
/*
$router->get('/{id}', function($id) use ($router) {
    $quote = Quote::query()->findOrFail($id);
    return view('home', ['quote' => $quote]);
});
*/

$router->get('/version', function () use ($router) {
    return $router->app->version();
});

$router->get('/login', function () use ($router) {
    return view('login');
});
