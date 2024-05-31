@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Formulario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="">
                <div class="flex items-center mx-[1%]">
                    <a href="{{route('empleados.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2B384E" class="size-10">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </a>
                    <h2 class="text-color-main font-bold text-2xl p-[0.5%] my-[0.5%] mx-[1%]  rounded-xl uppercase">Formulario para crear empleados</h2>
                </div>
                <form action="{{route('empleados.store')}}" method="POST" enctype="multipart/form-data" class="grid grid-cols-2 bg-white rounded-xl px-[3%] py-[2%] space-y-5 gap-x-[10%]">
                    @csrf
                    <label for="" class=" col-span-2 space-y-3">
                        <h2 class="text-color-letras2 font-medium text-lg">Nombre</h2>
                        <input type="text" name="nombre" id="" placeholder="Ingrese su nombre" class=" rounded-lg border-2 p-[0.4%] w-[50%] text-color-letras3 px-4 text-base bg-white outline-color-letras1 focus:outline-color-letras4">
                    </label>
                    <label for="" class=" col-span-1 space-y-3">
                        <h2 class="text-color-letras2 font-medium text-lg">Apellido Paterno</h2>
                        <input type="text" name="apellido_paterno" id="" placeholder="Ingrese su apellido paterno" class=" rounded-lg border-2 p-[0.4%] w-[100%] text-color-letras3 px-4 text-base bg-white outline-color-letras1 focus:outline-color-letras4">
                    </label>
                    <label for="" class=" col-span-1 space-y-3">
                        <h2 class="text-color-letras2 font-medium text-lg">Apellido Materno</h2>
                        <input type="text" name="apellido_materno" id="" placeholder="Ingrese su apellido materno" class=" rounded-lg border-2 p-[0.4%] w-[100%] text-color-letras3 px-4 text-base bg-white outline-color-letras1 focus:outline-color-letras4">
                    </label>
                    <label for="" class=" col-span-1 space-y-3">
                        <h2 class="text-color-letras2 font-medium text-lg">Fecha de nacimiento</h2>
                        <input type="date" name="fecha_nacimiento" id="" placeholder="" class=" rounded-lg border-2 p-[0.4%] w-[100%] text-color-letras3 px-4 text-base bg-white outline-color-letras1 focus:outline-color-letras4">
                    </label>
                     <label for="" class=" col-span-1 space-y-3 ">
                        <h2 class="text-color-letras2 font-medium text-lg">Direccion</h2>
                        <textarea name="direccion" id="" cols="50" rows="3" placeholder="Ingrese su dirección" class=" rounded-lg border-2 p-[0.4%] w-[100%] text-color-letras3 px-4 text-base bg-white outline-color-letras1 focus:outline-color-letras4"></textarea>
                    </label>
                    <label for=""  class="col-span-2 space-y-3" >
                        <h2 class="text-color-letras2 font-medium text-lg">Imagen del empleado</h2>
                        <input type="file" accept="image/*" name="image" id="image" class=" rounded-lg  p-[0.4%] w-[100%] text-color-letras3 text-base bg-white outline-color-letras1 focus:outline-color-letras4">
                        @error('image')
                            <small class="text-danger">{{mesagge}}</small>
                        @enderror
                    </label>
                    <button type="submit" class="col-span-2 bg-color-main mx-auto text-white font-medium text-lg rounded-xl px-[2%] py-[0.5%] w-auto uppercase">Crear empleado</button>
                </form>
            </div>
        </div>
    </div>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="@vite('resources/css/app.css')">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop