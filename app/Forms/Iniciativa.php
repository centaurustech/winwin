<?php namespace WinWin\Forms;

use Kris\LaravelFormBuilder\Form;

class Iniciativa extends Form
{
    public function buildForm()
    {
        $this
        	->add('nombre','text')
        	->add('nombre_solicitante','text')
        	->add('apellidos_solicitante','text')
        	->add('cantidad','number')
        	->add('descripcion','textarea')
        	->add('login','submit',[
        		'label' => 'Guardar Iniciativa'
        		]);
    }
}