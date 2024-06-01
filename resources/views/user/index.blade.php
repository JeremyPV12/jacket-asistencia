@extends('user.templates.template')

@section('title', 'Home')

@section('main')
    <main class="bg-color-fondo">
        <div>
            <div class="">
                <img src="{{ asset('image/imageFondo-main.jpg') }}" alt="" class="w-full h-auto">
                <div class="flex justify-around">
                    <div>
                        a
                    </div>
                    <div>
                        b
                    </div>
                    <div>
                        c
                    </div>
                </div>
            </div>

        </div>
        <div class="px-[10%] mx-[5%] rounded-lg flex flex-col space-y-5 py-[3%] mb-[2%] bg-white ">
            <h1 class="uppercase text-color-secundary font-bold text-2xl text-center " id="welcome">Bienvenidos a la
                Veterinaria Tomy</h1>
            <h2 class="text-color-main font-bold text-4xl text-center">Un Gran Lugar donde Salvamos Vidas</h2>
            <p class="text-color-letter font-medium text-lg text-center">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Id quis iure qui doloremque autem optio expedita. Ullam assumenda, incidunt officiis neque voluptates
                laboriosam voluptate! Accusantium expedita sunt est necessitatibus. Quia.</p>
            <button class="flex flex-row space-x-3 justify-center" id="contentButtomReadMore">
                <a href="#welcome" class="flex space-x-3">
                    <h3 class="text-color-secundary text-center">Leer mas <span></span></h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#159be7" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#159be7" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                    </svg>
                </a>
            </button>
            <div class="hidden" id="moreInfo">
                <div class="flex flex-col items-center py-[3%] space-y-10 ">
                    <h2 class="text-color-main font-bold text-4xl text-center border-b-4 border-color-secundary">Mision</h2>
                    <p class="text-color-letter font-medium text-lg text-center">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Id quis iure qui doloremque autem optio expedita. Ullam assumenda, incidunt
                        officiis neque voluptates laboriosam voluptate! Accusantium expedita sunt est necessitatibus. Quia.
                    </p>
                    <h2 class="text-color-main font-bold text-4xl text-center border-b-4 border-color-secundary">Vision</h2>
                    <p class="text-color-letter font-medium text-lg text-center">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Id quis iure qui doloremque autem optio expedita. Ullam assumenda, incidunt
                        officiis neque voluptates laboriosam voluptate! Accusantium expedita sunt est necessitatibus. Quia.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="px-[6%]">
                <img src="{{ asset('image/imageFondo-secundary.jpg') }}" alt="" class="mx-auto rounded-xl">
            </div>
            <div class="grid grid-cols-5 w-[100%] px-[6%] ">
                <div class="col-span-1 w-[100%] h-[50%] bg-color-secundary"></div>
                <div class="col-span-3 w-[100%] h-[50%] bg-color-main"><span class="invisible">a</span></div>
                <div class="col-span-1 w-[100%] h-[50%] bg-color-secundary"></div>
            </div>
        </div>
        <div
            class="flex flex-col items-center mx-auto rounded-xl space-y-8 my-[5%] w-[90%] sm:w-[90%] md:w-[80%] lg:w-[40%] py-[3%] bg-white">
            <h1 class="uppercase text-color-secundary font-bold text-2xl text-center">Tenemos los mejores especialistas</h1>
            <h2 class="text-color-main font-bold text-4xl text-center">Especialistas Medicas</h2>
            <div class=" max-w-sm ">
                <img src="{{ asset('image/imageVeterinario.jpg') }}" alt="" class="rounded-t-xl w-full h-auto">
                <div class="bg-color-main flex flex-col rounded-b-xl">
                    <h3 class="text-color-cuarto font-bold text-xl text-center border-b py-2">Medico Veterinario</h3>
                    <h3 class="text-color-secundary font-bold text-2xl text-center py-2">Tomy Perez Huamani</h3>
                </div>
            </div>
        </div>
        <div class="bg-white w-[90%] mx-auto py-[2%] rounded-xl " id="servicios">
            <h1 class="uppercase text-color-secundary font-bold text-2xl text-center">Cuidamos la salud de las mascotas</h1>
            <h2 class="text-color-main font-bold text-4xl text-center">Nuestro Servicios</h2>
            <div
                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-10 mx-[5%] py-[5%]">
                @foreach ($servicios as $servicio)
                    <div class="col-span-1 my-[5%]">
                        <img src="{{ asset($servicio->image) }}" alt="" class="rounded-t-xl h-[80%]">
                        <div class="">
                            <div class="bg-color-terciario flex flex-col items-center">
                                <h3 class="font-medium text-lg text-color-main py-[1%] ">Servicios especializados en:</h3>
                                <h4 class="font-semibold text-2xl text-color-main py-[1%] text-center"><a
                                        href="{{-- {{ route('user.servicios.show', $servicio->id) }} --}}">{{ $servicio->nombre }}</a></h4>
                            </div>
                            <div class="bg-color-main flex justify-center rounded-b-xl p-[2%]">
                                <h3 class="text-color-terciario font-bold text-xl hover:text-white"><a
                                        href="{{-- {{ route('user.servicios.show', $servicio->id) }} --}}">Mas información </a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-span-1 my-[5%]">
                <img src="./assets/image/servicios-analisis.jpg" alt="" class="rounded-t-xl h-[80%]">
                <div class="">
                    <div class="bg-color-terciario flex flex-col items-center">
                        <h3 class="font-medium text-lg text-color-main py-[1%] ">Servicios especializados en:</h3>
                        <h4 class="font-semibold text-2xl text-color-main py-[1%]">Vacunas</h4>
                    </div>
                    <div class="bg-color-main rounded-b-xl flex justify-center">
                        <h3 class="font-semibold text-lg text-color-terciario hover:text-white text-center py-[1%]">Mas información</h3>
                    </div>
                </div>
            </div>
            <div class="col-span-1 my-[5%]">
                <img src="./assets/image/servicios-analisis.jpg" alt="" class="rounded-t-xl h-[80%]">
                <div class="">
                    <div class="bg-color-terciario flex flex-col items-center">
                        <h3 class="font-medium text-lg text-color-main py-[1%] ">Servicios especializados en:</h3>
                        <h4 class="font-semibold text-2xl text-color-main py-[1%]">Vacunas</h4>
                    </div>
                    <div class="bg-color-main rounded-b-xl flex justify-center">
                        <h3 class="font-semibold text-lg text-color-terciario hover:text-white text-center py-[1%]">Mas información</h3>
                    </div>
                </div>
            </div>
            <div class="col-span-1 my-[5%]">
                <img src="./assets/image/servicios-analisis.jpg" alt="" class="rounded-t-xl h-[80%]">
                <div class="">
                    <div class="bg-color-terciario flex flex-col items-center">
                        <h3 class="font-medium text-lg text-color-main py-[1%] ">Servicios especializados en:</h3>
                        <h4 class="font-semibold text-2xl text-color-main py-[1%]">Vacunas</h4>
                    </div>
                    <div class="bg-color-main rounded-b-xl flex justify-center">
                        <h3 class="font-semibold text-lg text-color-terciario hover:text-white text-center py-[1%]">Mas información</h3>
                    </div>
                </div>
            </div>
            <button class=" mt-[5%] mx-auto rounded-xl p-[0.5%] text-color-terciario font-semibold text-xl hover:text-white col-span-1 sm:col-span-1 md:col-span-2 lg:col-span-3 xl:col-span-3 2xl:col-span-3 bg-color-main" id="moreService">Ver más</button>
            
            <div class="col-span-1 hidden my-[5%]" id="masServicios">
                <img src="./assets/image/servicios-analisis.jpg" alt="" class="rounded-t-xl h-[80%]">
                <div class="">
                    <div class="bg-color-terciario flex flex-col items-center">
                        <h3 class="font-medium text-lg text-color-main py-[1%] ">Servicios especializados en:</h3>
                        <h4 class="font-semibold text-2xl text-color-main py-[1%]">Vacunas</h4>
                    </div>
                    <div class="bg-color-main rounded-b-xl flex justify-center">
                        <h3 class="font-semibold text-lg text-color-terciario hover:text-white text-center py-[1%]">Mas información</h3>
                    </div>
                </div>
            </div>
            <div class="col-span-1 hidden my-[5%]" id="masServicios">
                <img src="./assets/image/servicios-analisis.jpg" alt="" class="rounded-t-xl h-[80%]">
                <div class="">
                    <div class="bg-color-terciario flex flex-col items-center">
                        <h3 class="font-medium text-lg text-color-main py-[1%] ">Servicios especializados en:</h3>
                        <h4 class="font-semibold text-2xl text-color-main py-[1%]">Vacunas</h4>
                    </div>
                    <div class="bg-color-main rounded-b-xl flex justify-center">
                        <h3 class="font-semibold text-lg text-color-terciario hover:text-white text-center py-[1%]">Mas información</h3>
                    </div>
                </div>
            </div>
            <div class="col-span-1 hidden my-[5%]" id="masServicios">
                <img src="./assets/image/servicios-analisis.jpg" alt="" class="rounded-t-xl h-[80%]">
                <div class="">
                    <div class="bg-color-terciario flex flex-col items-center">
                        <h3 class="font-medium text-lg text-color-main py-[1%] ">Servicios especializados en:</h3>
                        <h4 class="font-semibold text-2xl text-color-main py-[1%]">Vacunas</h4>
                    </div>
                    <div class="bg-color-main rounded-b-xl flex justify-center">
                        <h3 class="font-semibold text-lg text-color-terciario hover:text-white text-center py-[1%]">Mas información</h3>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
        <div class="bg-white my-[2%] mx-[5%] rounded-xl px-[3%] py-[4%] space-y-5">
            <h1 class="uppercase text-color-secundary font-bold text-2xl text-center">Nosostros tenemos los mejores </h1>
            <h2 class="text-color-main font-bold text-4xl text-center">Productos para tus Mascotas</h2>
            <h3 class="text-color-main font-semibold text-4xl flex justify-start py-[2%]">Ofertas</h3>
            <div
                class="gap-5 py-[3%] grid  grid-cols-2 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 2xl:grid-cols-5">
                @foreach ($productos_oferta as $producto_oferta)
                    <div class="border rounded-xl">
                        <img src="{{asset($producto_oferta->image)}}" alt="" class="rounded-t-xl">
                        <div class="">
                            <div class="bg-color-cuarto flex flex-col p-[5%]">
                                <h2 class="text-center text-color-main font-bold text-lg">{{ $producto_oferta->nombre }}
                                </h2>
                                <div class="flex justify-between">
                                    <h3 class="text-color-secundary font-bold text-base">1kg / 5kg</h3>
                                    <h3 class="text-color-letter  font-bold text-base">Disponible</h3>
                                </div>
                                @php
                                    $numero1 = $producto_oferta->precio;
                                    $numero2 = $producto_oferta->descuento;
                                    $oferta = $numero1 - $numero2;
                                @endphp
                                <div class="flex justify-center space-x-5">
                                    <h3 class="text-center text-xl font-semibold text-color-red">
                                        S/. <s>{{ $producto_oferta->precio }}</s>
                                    </h3>
                                    <h3 class="text-center text-2xl font-semibold text-color-main">
                                        S/. {{ $producto_oferta->precio }}</h3>
                                </div>
                            </div>
                            <div class="bg-color-main flex justify-center rounded-b-xl p-[2%]">
                                <h3 class="text-color-terciario font-bold text-xl hover:text-white">Añadir al
                                    carrito</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <h3 class="text-color-secundary font-black text-4xl flex justify-center">Nuestros Productos</h3>
            <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-4 gap-5">
                @foreach ($productos as $producto)
                    <div class="col-span-1 border rounded-xl">
                        <img src="./assets/image/comida-gato-2.jpg" alt="" class="rounded-t-xl">
                        <div class="">
                            <div class="bg-color-cuarto flex flex-col p-[5%]">
                                <h2 class="text-center text-color-main font-bold text-lg">{{ $producto->nombre }}</h2>
                                <div class="flex justify-between">
                                    <h3 class="text-color-letter font-bold text-base">1kg / 5kg</h3>
                                    <h3 class="text-color-red font-bold text-base">Disponible</h3>
                                </div>
                                <h3 class="text-center text-2xl font-semibold text-color-main">S/. {{ $producto->precio }}
                                </h3>
                            </div>
                            <div class="bg-color-main flex justify-center rounded-b-xl p-[2%]">
                                <h3 class="text-color-terciario font-bold text-xl hover:text-white">Añadir al carrito</h3>
                            </div>
                        </div>
                    </div>
                @endforeach


                <button
                    class="col-span-2 sm:col-span-2 md:col-span-3 lg:col-span-3 xl:col-span-4 2xl:col-span-4 flex justify-center bg-color-main mx-auto rounded-xl p-[0.5%] text-lg font-bold text-color-terciario hover:text-white"><a
                        href="{{-- {{ route('user.productos.index') }} --}}">Ver más </a></button>
            </div>
        </div>
        <div class="flex flex-col bg-white mx-[5%] rounded-xl py-[4%] px-[3%] space-y-10npm space-y-10">
            <h2 class="text-color-main font-bold text-4xl text-center ">Contactanos</h2>
            <div
                class=" grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-4 gap-5">
                <div
                    class=" rounded-xl col-span-1 bg-color-terciario hover:bg-color-main  w-full h-auto flex flex-col py-[8%] space-y-3 justify-center items-center group">
                    <a href="" class="mx-auto group-hover:stroke-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </a>
                    <h3 class="text-color-main font-bold text-xl group-hover:text-white">Emergencia</h3>
                    <ul>
                        <li class="text-color-letter font-medium text-lg group-hover:text-white">987654132</li>
                        <li class="text-color-letter font-medium text-lg group-hover:text-white">963852741</li>
                    </ul>
                </div>
                <div
                    class=" rounded-xl col-span-1 bg-color-terciario hover:bg-color-main  w-full h-auto flex flex-col py-[8%] space-y-3 justify-center items-center group">
                    <a href="" class="mx-auto group-hover:stroke-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                        </svg>
                    </a>
                    <h3 class="text-color-main font-bold text-xl group-hover:text-white">Ubicación</h3>
                    <ul>
                        <li class="text-color-letter font-medium text-lg group-hover:text-white">Jiron calixto #123</li>
                        <li class="text-color-letter font-medium text-lg group-hover:text-white">Jiron calixto #124</li>
                    </ul>
                </div>
                <div
                    class=" rounded-xl col-span-1 bg-color-terciario hover:bg-color-main  w-full h-auto flex flex-col py-[8%] space-y-3 justify-center items-center group">
                    <a href="#" class="mx-auto group-hover:stroke-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                        </svg>
                    </a>
                    <h3 class="text-color-main font-bold text-xl group-hover:text-white">Email</h3>
                    <ul>
                        <li class="text-color-letter font-medium text-lg group-hover:text-white">veterinariatomy@gmail.com
                        </li>
                        <li class="text-color-letter font-medium text-lg group-hover:text-white">a</li>
                    </ul>
                </div>
                <div
                    class=" rounded-xl col-span-1 bg-color-terciario hover:bg-color-main  w-full h-auto flex flex-col py-[8%] space-y-3 justify-center items-center group">
                    <a href="" class="mx-auto group-hover:stroke-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="white" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                        </svg>
                    </a>
                    <h3 class="text-color-main font-bold text-xl group-hover:text-white">Emergencia</h3>
                    <ul>
                        <li class="text-color-letter font-medium text-lg group-hover:text-white">987654132</li>
                        <li class="text-color-letter font-medium text-lg group-hover:text-white">963852741</li>
                    </ul>
                </div>

            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.85126414142175!2d-75.20817214755436!3d-12.069630306441445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e964e6edb2287%3A0xb7dc8a8eef3abd8!2sJr.%20Calixto%20554%2C%20Huancayo%2012000!5e0!3m2!1ses!2spe!4v1716866585075!5m2!1ses!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
@endsection
