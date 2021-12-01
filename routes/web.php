<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AjaxCRUDImageController;

use App\Http\Controllers\ProductController;




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
    return view('welcome');
});

Route::get('students', [StudentController::class, 'index']);
Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');

//bị lỗi đường dẫn hình ảnh nên chưa hiển thị được hình ảnh
Route::get('ajax-crud-image-upload', [AjaxCRUDImageController::class, 'index']);
Route::post('add-update-book', [AjaxCRUDImageController::class, 'store']);
Route::post('edit-book', [AjaxCRUDImageController::class, 'edit']);
Route::post('delete-book', [AjaxCRUDImageController::class, 'destroy']);



