<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <title>Sección de preguntas</title>
</head>
<body>
<style>
        .carousel-open:checked+.carousel-item {
          position: static;
          opacity: 100;
        }
      
        .carousel-item {
          -webkit-transition: opacity 0.6s ease-out;
          transition: opacity 0.6s ease-out;
        }
      
        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
          display: block;
        }
      
        .carousel-indicators {
          list-style: none;
          margin: 0;
          padding: 0;
          position: absolute;
          bottom: 2%;
          left: 0;
          right: 0;
          text-align: center;
          z-index: 10;
        }
      
        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
          color: #2b6cb0;
          /*Set to match the Tailwind colour you want the active one to be */
        }
      </style>
      
      <div class="relative overflow-hidden rounded shadow-xl carousel">
        <div class="relative w-full overflow-hidden carousel-inner">
          <!--Slide 1-->
          <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
            checked="checked">
          <div class="absolute bg-center opacity-0 carousel-item" style="height:auto; background-image: url(https://mdbootstrap.com/img/new/slides/052.jpg)">
           
            <div class="flex flex-wrap justify-center">
              <div class="px-24 py-8 h-18">
              <img src="../resources/imagenes\Perfect-Body-Santa-Marta.png" alt="" 
              class="">
              </div>
            </div>
            <label class="mb-2 text-base tracking-wide text-black " for="plantilla">
              <div class="mx-20 bg-black">
              <p class="py-12 mx-8 text-center text-justify text-white">
                  Estimado usuario</br>
                  Para <strong class="color-blue-300">PERFECT BODY MEDICAL CENTER</strong>, sus opiniones y sugerencias son de valiosa
                  importancia para la mejora continua. Permitanos conocer su percepción para la 
                  toma de decisiones que nos permita prestarle cada vez, un mejor servicio.
                  <br>
                  <strong class="text-sm text-center text-green-100 sm:text-base">Por favor, marque la casilla segun su percepción del servicio recibido:</strong>
              </div>
                </p>
              </label>
              

            

                <div class="container mt-4 text-center bg-red-900">
                  <span class="text-lg text-white">¿Está usted satisfecho con nuestro servicio?</span>
                  <div class="grid grid-rows-3 mt-2 text-justify text-white">
                    <div class="grid content-center w-40 grid-rows-3 mx-auto text-lg bg-blue-500">
                      <label type="inline-flex items-center">
                          <input type="radio" class="form-radio" name="accountType" value="5">
                          <span class="ml-2">Muy bueno</span>
                      </label>
                      <label type="inline-flex items-center">
                        <input type="radio" class="form-radio" name="accountType" value="4">
                        <span class="ml-2">Bueno</span>
                      </label>
                      <label type="inline-flex items-center">
                        <input type="radio" class="form-radio" name="accountType" value="3">
                        <span class="ml-2">Regular</span>
                      </label>
                      <label type="inline-flex items-center">
                        <input type="radio" class="form-radio" name="accountType" value="2">
                        <span class="ml-2">Malo</span>
                      </label>
                      <label type="inline-flex items-center">
                        <input type="radio" class="form-radio" name="accountType" value="1">
                        <span class="ml-2">Muy malo</span>
                      </label>
                    </div>
                  </div>
             
      <!-- ------------------------------------------------------------------------------------------------------ -->
      <!-- ------------------------------------------------------------------------------------------------------ -->
      <!-- ------------------------------------------------------------------------------------------------------ -->
          
      <div class="container mt-4 text-center bg-red-900">
        <span class="text-white ">¿Como califica el trato recibido por parte del personal?</span>
        <div class="grid grid-rows-3 mt-2 text-justify text-white">
          <div class="grid content-center w-40 grid-rows-3 mx-auto bg-blue-500 ">
            <label type="inline-flex items-center">
                <input type="radio" class="form-radio" name="accountType" value="5">
                <span class="ml-2">Muy bueno</span>
            </label>
            <label type="inline-flex items-center">
              <input type="radio" class="form-radio" name="accountType" value="4">
              <span class="ml-2">Bueno</span>
            </label>
            <label type="inline-flex items-center">
              <input type="radio" class="form-radio" name="accountType" value="3">
              <span class="ml-2">Regular</span>
            </label>
            <label type="inline-flex items-center">
              <input type="radio" class="form-radio" name="accountType" value="2">
              <span class="ml-2">Malo</span>
            </label>
            <label type="inline-flex items-center">
              <input type="radio" class="form-radio" name="accountType" value="1">
              <span class="ml-2">Muy malo</span>
            </label>
          </div>
        </div>
   
<!-- ------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------------ -->

 
      
      <div>
              <label class="block mt-4 " for="">
                  <span class="text-white form-gray-700">¿Como califica el trato recibido por parte del personal?</span>
                  <select class="block w-full mt-1 form-select" name="" id="">
                      <option value="">Muy bueno</option>
                      <option value="">Bueno</option>
                      <option value="">Regular</option>
                      <option value="">Malo</option>
                      <option value="">Muy Malo</option>
                  </select>
              </label>
          </div>

          </div>
          <label for="carousel-3"
            class="absolute inset-y-0 left-0 z-10 flex content-center justify-center hidden w-10 h-10 my-auto ml-2 font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer control-1 md:ml-10 hover:text-white hover:bg-blue-700"><i
              class="mt-3 fas fa-angle-left"></i></label>
          <label for="carousel-2"
            class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-1 md:mr-10 hover:text-white hover:bg-blue-700"><i
              class="mt-3 fas fa-angle-right"></i></label>
      
          <!--Slide 2-->
          <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
          <div class="absolute bg-center opacity-0 carousel-item" style="height:630px; background-image: url(https://mdbootstrap.com/img/new/slides/043.jpg)">
          </div>
          <label for="carousel-1"
            class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer control-2 md:ml-10 hover:text-white hover:bg-blue-700"><i
              class="mt-3 fas fa-angle-left"></i></label>
          <label for="carousel-3"
            class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-2 md:mr-10 hover:text-white hover:bg-blue-700"><i
              class="mt-3 fas fa-angle-right"></i></label>
      
          <!--Slide 3-->
          <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
          <div class="absolute opacity-0 carousel-item" style="height:630px; background-image: url(https://mdbootstrap.com/img/new/slides/054.jpg)">
          </div>
          <label for="carousel-2"
            class="absolute inset-y-0 left-0 z-10 hidden w-10 h-10 my-auto ml-2 font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer control-3 md:ml-10 hover:text-white hover:bg-blue-700"><i
              class="mt-3 fas fa-angle-left"></i></label>
          <label for="carousel-1"
            class="absolute inset-y-0 right-0 z-10 hidden w-10 h-10 my-auto mr-2 font-bold leading-tight text-center text-black bg-white rounded-full cursor-pointer next control-3 md:mr-10 hover:text-white hover:bg-blue-700"><i
              class="mt-3 fas fa-angle-right"></i></label>
      
          <!-- Add additional indicators for each slide-->
          <ol class="carousel-indicators">
            <li class="inline-block mr-3">
              <label for="carousel-1"
                class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
              <label for="carousel-2"
                class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
              <label for="carousel-3"
                class="block text-4xl text-white cursor-pointer carousel-bullet hover:text-blue-700">•</label>
            </li>
          </ol>
      
        </div>
      </div>
    


<!--
      <div class="relative">
        <div class="absolute inset-0 flex items-center justify-center w-screen h-screen text-5xl text-white transition-all duration-1000 ease-in-out transform translate-x-0 bg-pink-500 slide">Hello</div>
        <div class="absolute inset-0 flex items-center justify-center w-screen h-screen text-5xl text-white transition-all duration-1000 ease-in-out transform translate-x-full bg-purple-500 slide">There</div>
        <div class="absolute inset-0 flex items-center justify-center w-screen h-screen text-5xl text-white transition-all duration-1000 ease-in-out transform translate-x-full bg-teal-500 slide">Booya!</div>
        <div onclick="nextSlide()" class="fixed bottom-0 right-0 flex items-center justify-center w-16 h-16 text-black bg-white cursor-pointer">&#x276F;</div>
        <div onclick="previousSlide()" class="fixed bottom-0 right-0 flex items-center justify-center w-16 h-16 mr-16 text-black bg-white border-r border-gray-400 cursor-pointer">&#x276E;</div>
      </div>
      <script>
        function nextSlide(){
          let activeSlide = document.querySelector('.slide.translate-x-0');
          activeSlide.classList.remove('translate-x-0');
          activeSlide.classList.add('-translate-x-full');
          
          let nextSlide = activeSlide.nextElementSibling;
          nextSlide.classList.remove('translate-x-full');
          nextSlide.classList.add('translate-x-0');
      }
      
      function previousSlide(){
          let activeSlide = document.querySelector('.slide.translate-x-0');
          activeSlide.classList.remove('translate-x-0');
          activeSlide.classList.add('translate-x-full');
          
          let previousSlide = activeSlide.previousElementSibling;
          previousSlide.classList.remove('-translate-x-full');
          previousSlide.classList.add('translate-x-0');
      }
      </script>-->
</body>
</html>