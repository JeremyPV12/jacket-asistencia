

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Asistencia</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-color-fondo w-screen h-screen flex justify-center items-center">
        <div class="bg-color-terciario flex flex-col rounded-xl shadow-2xl px-[3%] py-[2%] h-[60%]">
            <h4 class="text-3xl text-color-main font-bold text-center">Registro de asistencia</h4>
            <div>
                <form action="{{ route('asistencias.store') }}" method="POST" class="flex flex-col space-y-5">
                    @csrf                   
                    <label for="empleado_id" class="flex flex-col">
                        <h3 class="text-color-letras2 font-medium text-lg">Empleado:</h3>
                        <select name="empleado_id" id="empleado_id">
                            @foreach($empleados as $empleado)
                                <option value="{{ $empleado->id }}" class="p-[0.7%] w-[50%] text-color-letter text-lg bg-color-fondo outline-color-main">{{ $empleado->dni }}</option>
                            @endforeach
                        </select>
                    </label>

                    <label for="">
                        <h3 class="text-color-letras2 font-medium text-lg">Estado:</h3>
                        <select name="estado" id="estado">
                            <option value="ingreso" class="p-[0.7%] w-[50%] text-color-letter text-lg bg-color-fondo outline-color-main">ingreso</option>
                            <option value="salida" class="p-[0.7%] w-[50%] text-color-letter text-lg bg-color-fondo outline-color-main">salida</option>
                        </select>
                    </label>
                    <button type="submit" class="bg-color-main rounded-xl text-white text-xl py-[1%] hover:text-color-terciario">Registrar asistencia</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>