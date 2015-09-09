<?php namespace WinWin\Http\Controllers\Auth;

use WinWin\User;
use Validator;
use WinWin\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Kris\LaravelFormBuilder\FormBuilder;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectPath = '/proyectos/create';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:4',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin(FormBuilder $formBuilder)
    {
        if (view()->exists('auth.authenticate')) {
            return view('auth.authenticate');
        }
        $formulario_login = $formBuilder->create('WinWin\Forms\IniciarSesion',[
                'method' => 'post',
                'url' => url('auth/login')
                ]);
        return view('auth.login',compact('formulario_login'));
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister(FormBuilder $formBuilder)
    {
        $formulario_registro = $formBuilder->create('WinWin\Forms\RegistrarUsuario',[
                'method' => 'post',
                'url' => url('auth/register')
                ]);
        return view('auth.register',compact('formulario_registro'));
    }

}
