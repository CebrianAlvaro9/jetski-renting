@extends('layouts.guest')

@section('content')


<div class="relative overflow-hidden bg-gray-900">
    

    <section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image:url('{{ asset('images/banner.jpg') }}') ">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Alquiler de Motos de Agua</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>  
            </div>
        </div>
    </section>
    
    
</div>

    <div class="py-20 pb-30 container mx-auto my-8 px-4">

        
        <h1 class="text-3xl font-bold text-center mb-4">Alquiler de Motos de Agua</h1>
      
        <div class="flex flex-col md:flex-row">
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <img src="{{ asset('images/home.jpg') }}"  alt="Moto de agua" class="rounded-lg shadow-lg">
          </div>
          <div class="w-full md:w-1/2 lg:w-2/3 px-4 mb-8">
            <p class="text-gray-700 text-lg leading-relaxed">
              ¡Bienvenido a nuestro sitio de alquiler de motos de agua! En nuestra empresa, ofrecemos una amplia variedad de motos de agua modernas y seguras para que disfrutes al máximo de tu tiempo en el agua. Ya sea que quieras explorar la costa, hacer deportes acuáticos o simplemente relajarte, tenemos la moto de agua perfecta para ti.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mt-4">
              Nuestras motos de agua están disponibles para alquiler por hora, día o semana, y ofrecemos tarifas competitivas para adaptarnos a cualquier presupuesto. Además, nuestro equipo de expertos en deportes acuáticos estará encantado de proporcionarte todo el equipo que necesites, así como consejos útiles para que disfrutes al máximo de tu experiencia.
            </p>
            <a href="#" class="inline-block mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Reserva ahora</a>
          </div>
        </div>
      
        <div class="flex flex-col md:flex-row">
          <div class="w-full md:w-1/2 lg:w-2/3 px-4 mb-8">
            <p class="text-gray-700 text-lg leading-relaxed">
              En nuestra flota de motos de agua, contamos con modelos de las mejores marcas del mercado, equipados con las últimas tecnologías en seguridad y confort. Además, nuestro equipo de mantenimiento se encarga de que cada moto esté en perfectas condiciones antes y después de cada alquiler.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mt-4">
              No importa si eres un principiante o un experto en motos de agua, nuestro equipo estará encantado de ayudarte en todo lo que necesites para que disfrutes al máximo de tu experiencia. ¡No dudes en contactar con nosotros para obtener más información o hacer tu reserva!
            </p>
          </div>
          <div class="w-full md:w-1/2 lg:w-1/3 px-4 mb-8">
            <img src="{{ asset('images/home1.jpg') }}" alt="Moto de agua" class="rounded-lg shadow-lg">
          </div>
        </div>
    </div>
      
      
@endsection