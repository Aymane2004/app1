<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task',function(){
    return view("about",['people'=>[
        [
        'fname'=>'ayman',
        'lname'=>'taleb'
    ],[
        'fname'=>'ahmed',
        'lname'=>'taleb'
    ]]]);
});

Route::get('/tasks' ,function(){
    return view('midn',['people' => [
        [
        'id' => '1',
        'fname'=>'ayman',
        'lname'=>'taleb'
    ],[
        'id' => '2',
        'fname'=>'ahmed',
        'lname'=>'taleb'
    ]]]);
});
Route::get('/task/{id}' ,function($id){
    $people = [
        [
        'id' => '1',
        'fname'=>'ayman',
        'lname'=>'taleb'
    ],[
        'id' => '2',
        'fname'=>'ahmed',
        'lname'=>'taleb'
    ]];
    
    foreach ($people as $person) {
        if($person['id'] == $id){
            return view('people',['person' => $person['fname']]);
        }
        
    }
    return redirect('/')->with('error', 'Person not found');
});
    

Route::get('/todo/tasks',function(){
    return 'true';
});