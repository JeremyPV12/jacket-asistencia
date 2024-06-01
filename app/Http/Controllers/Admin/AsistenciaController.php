<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asistencia;
use App\Models\Empleado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $asistencias = Asistencia::all();
        return view('admin.asistencias.index',compact('asistencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $empleados= Empleado::all();
        return view('admin.asistencias.create',compact('empleados'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //



        /* Asistencia::create([
            'empleado_id' => $request->empleado_id,
            'fecha' => now(),
            'registro' => Carbon::now(), // Establecer la hora actual
            'estado' => $request->estado,
        ]); */
        $fechaActual = Carbon::now()->toDateString(); // Obtener solo la fecha
        $horaActual = Carbon::now()->toTimeString(); // Obtener solo la hora

        $asistencia = new Asistencia;
        $asistencia->empleado_id = $request->empleado_id;
        $asistencia->fecha = $fechaActual; // Establecer la fecha actual
        $asistencia->registro = $horaActual; // Establecer la hora actual
        $asistencia->estado = $request->estado;
        $asistencia->save();

        return redirect()->route('asistencias.create')->with('success', 'Asistencia registrada correctamente.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
