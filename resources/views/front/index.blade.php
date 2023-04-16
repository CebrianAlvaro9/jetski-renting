@extends('layouts.guest')

@section('content')

<section class="bg-white py-3">
  <div id="all" class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8  ">
    <div class="text-center">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Nuestras gam</span>as de precio</h1>
    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">En Waveriders queremos ofrecer la oportunidad de vivir la expericiencia a todo tipo de personas por lo que nuestros precios se adaptan a todos los bolsillos</p>
    </div>
 
    <div  class="flex flex-col md:flex-row my-9 ">

      <div class="w-full md:w-1/3"><div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
        <a href="#">
            <img class="rounded-t-lg" src="/images/entrada.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Para todo el mundo</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Esta gama es la más accesible te permite introducirte en el mundo de las motos de agua y disfrutar una experiencia increible</p>
            <span class="text-3xl font-bold text-gray-900 dark:text-white">80 €</span>
            <br>
            <a href="#" id="entrada" class="my-2  inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Más info
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
     
      </div></div>
      <div class="w-full md:w-1/3"><div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="/images/estandar.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Para expertos </h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Esta gama te permite disfrutar de motos de una grandisima calidad y adaptación a cualquier situación</p>
            <span class="text-3xl font-bold text-gray-900 dark:text-white ">100 €</span>
            <br>
            <a id="estandar" class=" my-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Más info
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
      </div></div>
      <div class="w-full md:w-1/3"><div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
        <a href="#">
            <img class="rounded-t-lg" src="/images/premium.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lo más radical</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">El nombre lo dice todo te permitimos disfrutar de motos de competición de más de 200cv (obligatorio carnet)</p>
            <span class="text-3xl font-bold text-gray-900 dark:text-white">120 €</span>
            <br>
        

            <a href="#" id="premium" class=" my-2  inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Más info
                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
      </div>
    </div>

    </div>
  </div>

    <div id="entrada-info"class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8  ">
      <div class="text-center">
      <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Gama de</span> entrada</h1>
      <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Desde Waveriders queremos dar la mejor expericiencia posible al margen  del precio por ello en nuestra gama de entrada con un precio super ajustado de 80 euros te ofrecemos los siguiente. <a href="welcome"class="underline decoration-black-500"><b>Otros planes</b></a> </p> 
      <div class="flex flex-col md:flex-row">
        <div class=" max-w-full md:w-2/3 p-12 ">  <img class="h-autow-full rounded-lg" src="/images/spark1.png" alt="image description"></div>
        <div class="w-full md:w-1/3 py-12">    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
          <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Entrada</h5>
          <div class="flex items-baseline text-gray-900 dark:text-white">
            <span class="text-5xl font-extrabold tracking-tight">{{$entrada[0]->price}} </span>
              <span class="text-3xl font-semibold">€</span>
              <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400"></span>
          </div>
          <!-- List -->
          <ul role="list" class="space-y-5 my-7">
              <li class="flex space-x-3">
                  <!-- Icon -->
                  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Alquiler por 1 hora</span>
              </li>
             @foreach ($entrada as $moto )
             <li class="flex space-x-3">
              <!-- Icon -->
              <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
              <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{$moto->brand}}, {{$moto->model}} {{$moto->horse_power}} CV</span>
          </li>
             @endforeach 
            
         
          
              <li class="flex space-x-3 line-through decoration-gray-500">
                  <!-- Icon -->
                  <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-gray-400 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                  <span class="text-base font-normal leading-tight text-gray-500">Carnet m1</span>
              </li>
           
          </ul>
          <a href="disponibilidad" type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Alquilar ahora!</a>
      </div></div>
      </div>
      
    

  

   
    </div>
  </div>

  <div id="estandar-info"class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8  ">
    <div class="text-center">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Gama Es</span>tándar</h1>
    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Motos de una altísima calidad que proporciona una buenísima estabilidad por su mayor tamaño. Eso no va a significar menos diversion ya que doblan en cv a la gama anterior.<a href="welcome"class="underline decoration-black-500"><b>Otros planes</b></a> </p> 
    <div class="flex flex-col md:flex-row">
      <div class=" max-w-full md:w-2/3 p-12 ">  <img class="h-autow-full rounded-lg" src="/images/gti1.png" alt="image description"></div>
      <div class="w-full md:w-1/3 py-12">    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Estándar</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white">
          <span class="text-5xl font-extrabold tracking-tight">{{$estandar[0]->price}} </span>
            <span class="text-3xl font-semibold">€</span>
            <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400"></span>
        </div>
        <!-- List -->
        <ul role="list" class="space-y-5 my-7">
            <li class="flex space-x-3">
                <!-- Icon -->
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Alquiler por 1 hora</span>
            </li>
           @foreach ($estandar as $moto )
           <li class="flex space-x-3">
            <!-- Icon -->
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{$moto->brand}}, {{$moto->model}} {{$moto->horse_power}} CV</span>
        </li>
           @endforeach 
        
           <li class="flex space-x-3">
            <!-- Icon -->
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
            <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Carnet M1</span>
        </li>
         
        </ul>
        <a href="disponibilidad" type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Alquilar ahora!</a>
    </div></div>
    </div>
    
  



 
  </div>
</div>

 
<div id="premium-info"class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8  ">
  <div class="text-center">
  <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Gama Pre</span>mium</h1>
  <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Lo más radical que se puede alquilar en toda España. Motos de competición que te hacen disfrutar al máximo de la velocida en el mar. Solo para expertos. <a href="welcome"class="underline decoration-black-500"><b>Otros planes</b></a> </p> 
  <div class="flex flex-col md:flex-row">
    <div class=" max-w-full md:w-2/3 p-12 ">  <img class="h-autow-full rounded-lg" src="/images/rtx.png" alt="image description"></div>
    <div class="w-full md:w-1/3 py-12">    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
      <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Premium</h5>
      <div class="flex items-baseline text-gray-900 dark:text-white">
        <span class="text-5xl font-extrabold tracking-tight">{{$premium[0]->price}} </span>
          <span class="text-3xl font-semibold">€</span>
          <span class="ml-1 text-xl font-normal text-gray-500 dark:text-gray-400"></span>
      </div>
      <!-- List -->
      <ul role="list" class="space-y-5 my-7">
          <li class="flex space-x-3">
              <!-- Icon -->
              <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
              <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Alquiler por 1 hora</span>
          </li>
         @foreach ($premium as $moto )
         <li class="flex space-x-3">
          <!-- Icon -->
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
          <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{$moto->brand}}, {{$moto->model}} {{$moto->horse_power}} CV</span>
      </li>
         @endforeach 
      
         <li class="flex space-x-3">
          <!-- Icon -->
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
          <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Carnet M1</span>
      </li>
       
      </ul>
      <a href="disponibilidad" type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">Alquilar ahora!</a>
  </div></div>
  </div>
  





</div>
</div>
    
  </div>
  
  


  
  

</section>

<script>
  $(document).ready(function () {
    $("#entrada-info").css("display", "none");
    $("#estandar-info").css("display", "none");
    $("#premium-info").css("display", "none");
   info();

  });

 function info(){

  $(document).ready(function() {
  $("a").click(function(event) {
    // Obtenemos el id del elemento clicado
    var idElemento = $(event.target).attr("id");

    if(idElemento==="entrada"){
      $( "#all" ).fadeOut( "slow" );
      // $("#all").css("display", "none");
      $("#entrada-info").fadeIn( "slow" );
    }else if(idElemento==="estandar"){
      $( "#all" ).fadeOut( "slow" );
      
      $("#estandar-info").fadeIn( "slow" );
    }else if(idElemento==="premium"){
      $( "#all" ).fadeOut( "slow" );
      $("#premium-info").fadeIn( "slow" );
    }


    console.log("El elemento clicado tiene el id: " + idElemento);
  });

});
 }
</script>

      
@endsection

