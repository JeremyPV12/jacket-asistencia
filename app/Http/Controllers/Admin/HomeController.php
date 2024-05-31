<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $empleados = Empleado::all();
        return view('admin.index',compact('empleados'));
    }
}
