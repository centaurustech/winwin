<?php namespace WinWin\Http\Controllers;

use Illuminate\Http\Request;
use WinWin\Http\Requests;
use WinWin\Http\Controllers\Controller;
use WinWin\Proyecto;
use WinWin\Http\Requests\ProyectoRequest;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Contracts\Auth\Authenticatable;

class ProyectoController extends Controller
{

    /**
    * Control de seguridad
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $iniciativas = Proyecto::all();
        return view('iniciativas.index',compact('iniciativas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $formulario_proyecto = $formBuilder->create('WinWin\Forms\Iniciativa',[
                'method' => 'post',
                'url' => url('proyectos')
                ]);
        return view('ingreso',compact('formulario_proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProyectoRequest  $request
     * @return Response
     */
    public function store(Authenticatable $user, ProyectoRequest $request)
    {
        $proyecto = new Proyecto($request->all());
        $user->proyectos()->save($proyecto);
        return redirect('proyectos');
    }

    /**
     * Display the specified resource.
     *
     * @param  Proyecto $proyecto
     * @return Response
     */
    public function show(Proyecto $proyecto)
    {
        return 'Acá se muestra un proyecto';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Proyecto $proyecto
     * @return Response
     */
    public function edit(Proyecto $proyecto, FormBuilder $formBuilder)
    {
        return 'Acá se muestra la vista para editar un proyecto';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProyectoRequest  $request
     * @param  Proyecto $proyecto
     * @return Response
     */
    public function update(ProyectoRequest $request, Proyecto $proyecto)
    {
        return 'Acá se guardan actualizaciones a un proyecto';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Proyecto $proyecto
     * @return Response
     */
    public function destroy(Proyecto $proyecto)
    {
        return 'Acá mueren los proyectos';
    }
}
