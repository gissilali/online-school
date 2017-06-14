<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['prefix'=>'academics'], function (){
    Route::resource('courses','CourseController');
});

/**
 * Admin Routes
 */
Route::get('students', 'Student\StudentController@index');
Route::get('students/{slug}/{level_id}', 'Student\StudentController@getStudents');
Route::group(['prefix' => 'admin'], function(){
        Route::get('/','Admin\HomeController@index')->name('home')->middleware('permission.admin');
		// Authentication Routes...
        Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login')->middleware('is.admin');
        Route::post('login', 'Admin\Auth\LoginController@login');
        Route::post('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

        // Registration Routes...
        Route::get('register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
        Route::post('register', 'Admin\Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
        Route::post('password/reset', 'Admin\Auth\ResetPasswordController@reset');

         // Teacher Registration Routes...
        Route::get('register-teacher', 'Teacher\Auth\RegisterController@showRegistrationForm')->name('teacher.register');
        Route::post('register-teacher', 'Teacher\Auth\RegisterController@register');
});

/**
 * Student Routes
 */
Route::group(['prefix' => 'student'], function(){
        Route::get('download-result', 'ResultController@downloadPDF');
        Route::get('/home', function(){
            $results = App\Result::whereStudentId(Auth::guard('student')->user()->id)->get();

            $total = 0;

            foreach ($results as $result) {
                $total += $result->mark;
            }
            return view('student.index', compact('results', 'total'));
        });
        Route::post('delete/{student_id}', 'Student\AccountController@delete');
        Route::get('configure-account/{student_id}', 'Student\AccountController@showEditForm');
        Route::put('configure-account/{student_id}', 'Student\AccountController@updateAccount')->name('student.update');
		// Authentication Routes...
        Route::get('login', 'Student\Auth\LoginController@showLoginForm')->name('student.login')->middleware('student.auth');
        Route::post('login', 'Student\Auth\LoginController@login');
        Route::post('logout', 'Student\Auth\LoginController@logout')->name('student.logout');

        // Registration Routes...
        Route::get('register', 'Student\Auth\RegisterController@showRegistrationForm')->name('student.register')->middleware('permission.admin');
        Route::post('register', 'Student\Auth\RegisterController@register')->middleware('permission.admin');

        // Password Reset Routes...
        Route::get('password/reset', 'Student\Auth\ForgotPasswordController@showLinkRequestForm')->name('student.password.request');
        Route::post('password/email', 'Student\Auth\ForgotPasswordController@sendResetLinkEmail')->name('student.password.email');
        Route::get('password/reset/{token}', 'Student\Auth\ResetPasswordController@showResetForm')->name('student.password.reset');
        Route::post('password/reset', 'Student\Auth\ResetPasswordController@reset');
});

/**
 * Teacher Routes
 */

Route::group(['prefix' => 'teacher'], function(){
        Route::get('home', function(){
            return view('teacher.dashboard');
        });
        Route::get('configure-account/{teacher_id}', 'Teacher\AccountController@showEditForm');

        Route::put('configure-account/{teacher_id}', 'Teacher\AccountController@updateAccount')->name('teacher.update');

        Route::get('results', 'ResultController@index');
		// Authentication Routes...
        Route::get('login', 'Teacher\Auth\LoginController@showLoginForm')->name('teacher.login')->middleware('guest');
        Route::post('login', 'Teacher\Auth\LoginController@login');
        Route::post('logout', 'Teacher\Auth\LoginController@logout')->name('teacher.logout');
        //Registration Routes
        Route::get('register', 'Teacher\Auth\RegisterController@showRegistrationForm')->name('teacher.register')->middleware('permission.admin')->middleware('guest');
        Route::post('register', 'Teacher\Auth\RegisterController@register')->middleware('permission.admin');
        // Password Reset Routes...
        Route::get('password/reset', 'Teacher\Auth\ForgotPasswordController@showLinkRequestForm')->name('teacher.password.request');
        Route::post('password/email', 'Teacher\Auth\ForgotPasswordController@sendResetLinkEmail')->name('teacher.password.email');
        Route::get('password/reset/{token}', 'Teacher\Auth\ResetPasswordController@showResetForm')->name('teacher.password.reset');
        Route::post('password/reset', 'Teacher\Auth\ResetPasswordController@reset');
});

/**
 * Guardian Routes
 */

Route::group(['prefix' => 'guardian'], function(){
        Route::get('home', 'Guardian\PageController@index');
		// Authentication Routes...
        Route::get('login', 'Guardian\Auth\LoginController@showLoginForm')->name('guardian.login');
        Route::post('login', 'Guardian\Auth\LoginController@login');
        Route::post('logout', 'Guardian\Auth\LoginController@logout')->name('guardian.logout');

        // Registration Routes...
        Route::get('register', 'Guardian\Auth\RegisterController@showRegistrationForm')->name('guardian.register');
        Route::post('register', 'Guardian\Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Guardian\Auth\ForgotPasswordController@showLinkRequestForm')->name('guardian.password.request');
        Route::post('password/email', 'Guardian\Auth\ForgotPasswordController@sendResetLinkEmail')->name('guardian.password.email');
        Route::get('password/reset/{token}', 'Guardian\Auth\ResetPasswordController@showResetForm')->name('guardian.password.reset');
        Route::post('password/reset', 'Guardian\Auth\ResetPasswordController@reset');
        //Results Route
        Route::get('result/{slug}/{student_id}', 'ResultController@guardianResultView');
        Route::get('download-result/{student_id}', 'ResultController@downloadPDFGuardian');
        
});

/**
 * Accounts Routes
 */
Route::group(['prefix' => 'accountant'], function(){
    Route::get('home', 'Accountant\PageController@index');
    // Authentication Routes...
    Route::get('login', 'Accountant\Auth\LoginController@showLoginForm')->name('accountant.login');
    Route::post('login', 'Accountant\Auth\LoginController@login');
    Route::post('logout', 'Accountant\Auth\LoginController@logout')->name('accountant.logout');

    // Registration Routes...
    Route::get('register', 'Accountant\Auth\RegisterController@showRegistrationForm')->name('accountant.register');
    Route::post('register', 'Accountant\Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Accountant\Auth\ForgotPasswordController@showLinkRequestForm')->name('accountant.password.request');
    Route::post('password/email', 'Accountant\Auth\ForgotPasswordController@sendResetLinkEmail')->name('accountant.password.email');
    Route::get('password/reset/{token}', 'Accountant\Auth\ResetPasswordController@showResetForm')->name('accountant.password.reset');
    Route::post('password/reset', 'Accountant\Auth\ResetPasswordController@reset');

});

//Other Routes
Route::post('confirm-student', function(Illuminate\Http\Request $request){
    if(count(App\Student::where('admission_number',$request['admission_number'])->first()) > 0){
        return response('true', 200);
    } else{
        return response('false', 404);
    }
});

/**
 * Subject Routes
 */
Route::get('subjects', 'SubjectController@index');
Route::get('result/{slug}/{level_id}', 'ResultController@getStudents');
Route::get('add-result/{student_id}', 'ResultController@showResultForm');
Route::post('add-result/{student_id}', 'ResultController@addResult');

/**
 * Fees Account Routes
 */

Route::get('students/fees-accounts/{slug}/{level_id}', 'FeesAccountController@getStudents');
Route::get('fees-account/{slug}/{student_id}', 'FeesAccountController@showFeesUpdateForm');
Route::post('fees-account/{slug}/{student_id}', 'FeesAccountController@updateFees');