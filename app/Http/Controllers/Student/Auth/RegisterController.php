<?php

namespace App\Http\Controllers\Student\Auth;

use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use Illuminate\Support\Facades\Session;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    public $password;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'student/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->password = Str::random(6);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('student.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'email|max:255|unique:students',
            'admission_number' => 'required|integer|unique:students',
            'level' => 'required',
            'dorm' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Student::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'admission_number' => $data['admission_number'],
            'level_id' => $data['level'],
            'dorm_id' => $data['dorm'],
            'password' => bcrypt('student'),
        ]);
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $data = array('password' => $this->password, 'email' => $request->email, 'admission_number' => $request->admission_number);

        event(new Registered($user = $this->create($request->all())));

        // try {
        //     Mail::send('emails.password', $data ,function ($message) use ($data)
        // {

        //     $message->from('hello@example.com', 'Example');

        //     $message->to($data['email']);

        // });
        // } catch (Exception $e) {
        //     Session::flash('email_failed','email not sent');
        //     return redirect('admin/');
        // }

        Session::flash('student_created', 'Account for student '. $request['name'] .' has been created');

        return redirect('admin/');
    }
}
