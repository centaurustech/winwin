<?php namespace WinWin\Forms;

use Kris\LaravelFormBuilder\Form;

class RegistrarUsuario extends Form
{
    public function buildForm()
    {
        $this
        	->add('name','text',[
        		'label' => 'Nombre'
        		])
        	->add('email','email',[
        		'label' => 'E-Mail'
        		])
        	->add('password', 'repeated', [
			    'type' => 'password',
			    'second_name' => 'password_confirmation',
			    'first_options' => ['label' => 'Contraseña'],
			    'second_options' => ['label' => 'Repita Contraseña']
			])
        	->add('remember','checkbox',[
        		'label' => 'No cerrar sesión'
        		])
        	->add('login','submit',[
        		'label' => 'Enviar'
        		]);
    }
}