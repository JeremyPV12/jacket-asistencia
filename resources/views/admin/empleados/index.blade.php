@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="flex items-center space-x-5">   
        <div class="text-color-main font-medium text-2xl ">Empleados</div>
        <a href="{{ route('empleados.create') }}" class="bg-color-letras5 rounded-xl text-white text-lg font-medium p-[0.5%] hover:outline-none hover:text-color-letter">Crear empleados</a>
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table id="empleados" class="table table-striped table-bordered" style="width:100%; margin-top: 20px; font-family:'Inter', sans-serif">
                <thead>
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Imagen</th>
                        <th class="text-center">DNI</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Cargo</th>
                        <th class="text-center">Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td class="text-center">{{$empleado->id}}</td>
                            <td class="">
                                <div class="w-10 h-10 rounded-xl mx-auto">
                                    <img src="{{asset($empleado->image)}}" alt="img" class="h-full w-full rounded-xl">
                                </div>
                            </td>
                            <td class="text-center">{{$empleado->dni}}</td>
                            <td class="text-center">{{$empleado->nombre}}</td>
                            <td class="text-center">{{$empleado->cargo}}</td>
                            @if ($empleado->estado=='activo')
                                <td class=""><h6 class="bg-green-500 rounded-xl p-[0.5%] text-center text-white capitalize">{{$empleado->estado}}</h6></td>
                            @else
                                <td class=""><h6 class="bg-red-500 rounded-xl p-[0.5%] text-center text-white capitalize">{{$empleado->estado}}</h6></td>
                            @endif
                            <td class="flex items-center justify-center space-x-4">
                            <a href="{{ route('empleados.edit', $empleado->id) }}" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1f2b6c" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zM19.5 7.125l-2.638 2.638M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </a>
                            <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1f2b6c" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9L14.394 18m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                            <a href="{{route('empleados.show',$empleado->id)}}" class="group">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#1f2b6c" class="size-6 group-hover:stroke-color-secundary">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="@vite('resources/css/app.css')">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#empleados').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    decimal: "",
                    emptyTable: "No hay datos disponibles en la tabla",
                    info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    infoEmpty: "Mostrando 0 a 0 de 0 registros",
                    infoFiltered: "(filtrado de _MAX_ entradas totales)",
                    infoPostFix: "",
                    thousands: ",",
                    lengthMenu: "Mostrar _MENU_ entradas",
                    loadingRecords: "Cargando...",
                    processing: "Procesando...",
                    search: "Buscar:",
                    zeroRecords: "No se encontraron registros coincidentes",
                    paginate: {
                        first: "Primero",
                        last: "Último",
                        next: "Siguiente",
                        previous: "Anterior"
                    },
                    aria: {
                        sortAscending: ": activar para ordenar la columna ascendente",
                        sortDescending: ": activar para ordenar la columna descendente"
                    }
                }
            });
        });
    </script>
@stop