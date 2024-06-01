<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Servicio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $servicios = Servicio::all();
        $productos_oferta = Producto::whereNotNull('descuento')->get();
        $productos = Producto::whereNull('descuento')->paginate(12);
        return view('user.index', compact('servicios', 'productos', 'productos_oferta'));
    }
}
