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

$app->get('/', function () use ($app) {
    return $app->version();
});

//Get all tasks
$app->get('tasks', ['uses' => 'TasksController@index']);

//Get a specific task
$app->get('task/{id}', ['uses' => 'TasksController@show']);

//Create a new task
$app->post('task/create', ['uses' => 'TasksController@create']);

//Delete a specific task
$app->delete('task/delete/{id}', ['uses' => 'TasksController@delete']);

//Deletes multiples tasks at once
$app->delete('task/multidelete/{ids}', ['uses' => 'TasksController@multiDelete']);
