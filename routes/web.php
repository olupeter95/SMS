<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('market');
});
Route::get('/widgets', function () {
    return view('admin.widgets');
});
Route::get('/topnav', function () {
    return view('admin.topnav');
});
Route::get('/sidenav', function () {
    return view('admin.navside');
});
Route::get('/group','GroupController@store');
Route::get('/class','GroupController@index')->name('admin.group');
Route::get('/admin','StudentController@home');
Route::get('/section','SectionController@store');
Route::get('/hostel','HostelController@store');
Route::get('/teacher','TeacherController@index');
Route::post('/new_teacher', 'TeacherController@store')->name('teacher.store');
Route::get('/transport','TransportController@store');
Route::get('/add_student', 'StudentController@index')->name('admin.index');
Route::get('/add_bulk_student', 'StudentController@addStudent')->name('add.bulk');
Route::get('/display/{class_id}', 'StudentController@display')->name('display.student');
Route::get('/edit/{student}', 'StudentController@edit')->name('student.edit');
Route::post('/add_student', 'StudentController@store')->name('new.store');
Route::post('/update/{student}', 'StudentController@update')->name('new.update');
Route::get('/parents','ParentsController@index')->name('admin.parent');
Route::post('/parents/store','ParentsController@store')->name('parent.store');
Route::get('/librarian','LibrarianController@index')->name('admin.librarian');
Route::post('/librarian/store','LibrarianController@store')->name('librarian.store');
