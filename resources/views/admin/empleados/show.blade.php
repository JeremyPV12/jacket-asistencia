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
                <div class="col-span-4 row-span-1 border ">
                    <h1 class="text-xl text-color-terciario font-medium mx-[2%] bg-color-main rounded-xl">{{$empleados->first()->nombre}}</h1>
                </div>
                <div class="col-span-2 row-span-1 border">
                    <h1>{{$empleados->first()->apellido_paterno}}</h1>
                </div>
                <div class="col-span-2 row-span-1 border">
                    <h1>{{$empleados->first()->apellido_materno}}</h1>
                </div>
                <div class="col-span-2 row-span-1 border ">
                    <h1>{{$empleados->first()->direccion}}</h1>
                </div>
                <div class="col-span-2 row-span-1">
                    <h1>{{$empleados->first()->telefono}}</h1>
                </div>
                <div class="col-span-2 row-span-1 border">
                    <h1>{{$empleados->first()->dni}}</h1>
                </div>
                <div class="col-span-2 row-span-1 border">
                    <h1>{{$empleados->first()->dni}}</h1>
                </div>
                <div class="col-span-2 row-span-1 border">
                    <h1>{{$empleados->first()->estado}}</h1>
                </div>
                <div class="col-span-2 row-span-1 border">
                    <h1>{{$empleados->first()->cargo}}</h1>
                </div>
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