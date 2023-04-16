@extends('layouts.guest')

@section('content')

<section class="bg-white py-3">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8  ">
    <div class="text-center">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Nuestras gam</span>as de precio</h1>
    <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">En Waveriders queremos ofrecer la oportunidad de vivir la expericiencia a todo tipo de personas por lo que nuestros precios se adaptan a todos los bolsillos</p>
    </div>
 
    <div id="all" class="flex flex-col md:flex-row my-9 ">

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
      </div></div>
    


    </div>
    
    
    

  
  


  
  

</section>

<script>
  $(document).ready(function () {

   info();

  });

 function info(){

  $(document).ready(function() {
  $("a").click(function(event) {
    // Obtenemos el id del elemento clicado
    var idElemento = $(event.target).attr("id");
    console.log("El elemento clicado tiene el id: " + idElemento);
  });

});
 }
</script>

      
@endsection

