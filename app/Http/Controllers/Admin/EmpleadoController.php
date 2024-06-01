<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asistencia;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados = Empleado::all();
        return view('admin.empleados.index',compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $empleados = Empleado::all();
        return view('admin.empleados.create',compact('empleados'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado = new Empleado;
        $empleado->nombre = $request->nombre;
        $empleado->apellido_paterno = $request->apellido_paterno;
        $empleado->apellido_materno = $request->apellido_materno;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->direccion = $request->direccion;
        $empleado->telefono = $request->telefono;
        $empleado->dni = $request->dni;
        $empleado->estado = $request->estado;
        $empleado->cargo = $request->cargo;

        $request->validate([
            'image' => 'required|image'
        ]);

        $imagePath = $request->file('image')->store('public/image');
        $url = Storage::url($imagePath);

        $empleado->image = $url;

        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Empleado $empleado)
    {
        //
        $empleados = Empleado::find($empleado);
        return view('admin.empleados.edit',compact('empleados'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empleado $empleado)
    {
        //
        $empleado->nombre = $request->nombre;
        $empleado->apellido_paterno = $request->apellido_paterno;
        $empleado->apellido_materno = $request->apellido_materno;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->direccion = $request->direccion;
        $empleado->telefono = $request->telefono;
        $empleado->dni = $request->dni;
        $empleado->estado = $request->estado;
        $empleado->cargo = $request->cargo;

        $request->validate([
            'image' => 'required|image'
        ]);

        $imagePath = $request->file('image')->store('public/image');
        $url = Storage::url($imagePath);

        $empleado->image = $url;

        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empleado $empleado)
    {
        //
        $empleado->delete();
        return redirect()->route('empleados.index');
    }

}
