<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students/create', function() {
$student = new Student();
$student ->first_name ='john';
$student ->last_name ='Doe';
$student ->email ='johndoe@gmail.com';
$student ->age =22;
$student ->save();
return 'Student Created';
});

Route::get('/students', function() {
	$students = Student::all();
	return $students;

});

Route::get('/students/update', function() {
	$student = Student::where('email', 'johndoe@gmail.com')->firts();
	$student ->email ='johndoe@gmail';
	$student ->age =23; //update age as well
	$student ->save();
	return 'Students update!';
});

Route::get('/students/delete', function() {
	$student = Student::where('email', 'johndoe@gmail.com')->firts();
	$student ->delete();
	return 'Students Delete!';
});

Route::get('/courses/create', function() {
	$course = new Course();
	$course->course_name = 'Introduction to Databases';
	$course->save();
	return 'Course Created';
});

Route::get('/course/{id}/students', function($id) {
	$course =Course::find($id);
	return $course->students;
});