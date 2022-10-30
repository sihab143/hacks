<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\ExamConfigurationController;
use App\HTTP\Controllers\StudentController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/exam-create', [HomeController::class, 'examCreate'])->name('exam-create');

Route::get('/exam-config', [ExamConfigurationController::class, 'index'])->name('exam-config');

Route::post('/fetch-section', [ExamConfigurationController::class, 'fetchSection']);

Route::post('/fetch-course', [ExamConfigurationController::class, 'fetchCourse']);

Route::post('/set-exam', [ExamConfigurationController::class, 'setExam'])->name('set-exam');

Route::get('/mark-entry', [StudentController::class, 'index'])->name('mark-entry');



