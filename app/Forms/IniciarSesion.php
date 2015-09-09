<?php namespace WinWin\Forms;

use Kris\LaravelFormBuilder\Form;

class IniciarSesion extends Form
{
    public function buildForm()
    {
        $this
        	->add('email','email',[
        		'label' => 'E-Mail'
        		])
        	->add('password','password',[
        		'label' => 'Contraseña'
        		])
        	->add('remember','checkbox',[
        		'label' => 'No cerrar sesión'
        		])
        	->add('login','submit',[
        		'label' => 'Enviar'
        		]);
    }
}