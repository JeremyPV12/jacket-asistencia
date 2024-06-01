@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Constancia de los empleados</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="flex items-center mx-[1%]">
                <a href="{{route('empleados.index')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2B384E" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </a>
                <h2 class="text-color-main font-bold text-2xl p-[0.5%] my-[0.5%] mx-[1%]  rounded-xl uppercase">Empleados</h2>
            </div>
            <div class="grid grid-cols-6  grid-rows-12 gap-10 mx-[4%]">
                <div class="col-span-2 row-span-2 rounded-full h-[100%]">
                    <img src="{{asset($empleados->first()->image)}}" alt="imagen" class="h-full w-full rounded-xl">
                </div>
                <div class="col-span-4 row-span-1 space-y-3 ">
                    <h2 class="text-color-letras2 font-medium text-lg mx-[2%]">Nombre</h2>
                    <h1 class="w-[50%] text-lg text-color-letter font-medium mx-[2%] bg-color-letras3 rounded-xl capitalize p-[1%]">{{$empleados->first()->nombre}}</h1>
                </div>
                <div class="col-span-2 row-span-1 space-y-3">
                    <h2 class="text-color-letras2 font-medium text-lg mx-[2%]">Apellido paterno</h2>
                    <h1 class="w-[100%] text-lg text-color-letter font-medium mx-[2%] bg-color-letras3 rounded-xl capitalize p-[1%]">{{$empleados->first()->apellido_paterno}}</h1>
                </div>
                <div class="col-span-2 row-span-1 space-y-3">
                    <h2 class="text-color-letras2 font-medium text-lg mx-[2%]">Apellido materno</h2>
                    <h1 class="w-[100%] text-lg text-color-letter font-medium mx-[2%] bg-color-letras3 rounded-xl capitalize p-[1%]">{{$empleados->first()->apellido_materno}}</h1>
                </div>
                <div class="col-span-2 row-span-1 space-y-3 ">
                    <h2 class="text-color-letras2 font-medium text-lg mx-[2%]">Direccion</h2>
                    <h1 class="w-[100%] text-lg text-color-letter font-medium mx-[2%] bg-color-letras3 rounded-xl capitalize p-[1%]">{{$empleados->first()->direccion}}</h1>
                </div>
                <div class="col-span-2 row-span-1 space-y-3 ">
                    <h2 class="text-color-letras2 font-medium text-lg mx-[2%]">Telefono</h2>
                    <h1 class="w-[100%] text-lg text-color-letter font-medium mx-[2%] bg-color-letras3 rounded-xl capitalize p-[1%]">{{$empleados->first()->telefono}}</h1>
                </div>
                <div class="col-span-2 row-span-1 space-y-3 ">
                    <h2 class="text-color-letras2 font-medium text-lg mx-[2%]">DNI</h2>
                    <h1 class="w-[100%] text-lg text-color-letter font-medium mx-[2%] bg-color-letras3 rounded-xl capitalize p-[1%]">{{$empleados->first()->dni}}</h1>
                </div>
                <div class="col-span-2 row-span-1 space-y-3 ">
                    <h2 class="text-color-letras2 font-medium text-lg mx-[2%]">Estado</h2>
                    <h1 class="w-[100%] text-lg text-color-letter font-medium mx-[2%] bg-color-letras3 rounded-xl capitalize p-[1%]">{{$empleados->first()->estado}}</h1>
                </div>
                <div class="col-span-2 row-span-1 space-y-3 ">
                    <h2 class="text-color-letras2 font-medium text-lg mx-[2%]">Cargo</h2>
                    <h1 class="w-[100%] text-lg text-color-letter font-medium mx-[2%] bg-color-letras3 rounded-xl capitalize p-[1%]">{{$empleados->first()->cargo}}</h1>
                </div>
            </div>
            {{-- <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>ID</th>
                        <th>ID</th>
                        <th>ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asistencias as $asistencia)
                        <tr>
                            <td>{{$asistencia->first()->id}}</td>
                            <td>{{$asistencia->first()->estado}}</td>
                            <td>{{$asistencia->first()->fecha}}</td>
                            <td>{{$asistencia->first()->registro}}</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table> --}}
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