<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    <title>Proceso de recolección de queja PQR</title>
</head>
<body>
<!--<body class="flex bg-local bg-blue-300" style="background: url('https://lh3.googleusercontent.com/proxy/QsETvCftGqMpXu1Fa7_0zdrU_P5AreLO1-6gEYz72S4x-CqQc48cCzNfJFylHPCME-PjT3VAC45qPB7Oz3ph6BE_MURCopQmiof42RNcYYn0Lx5sARxcDIadHtYP3OxmJlcL2jEeOqmyn2tYBGalvw')">-->
  <!--<div class="max-w-6xl px-12 py-20 mx-auto mb-24 bg-white bg-blue-100 shadow-xl lg:px-24">-->
    
    <div class="flex flex-wrap justify-center">
      <!--<div class="w-8/12 px-24 py-6 sm:w-6/12">-->
        <div class="px-24 py-8 h-18">
        <img src="../resources/imagenes\Perfect-Body-Santa-Marta.png" alt="" >
        </div>
      </div>
    </div>

<!--*****************************************************************************************************************-->
<!--*****************************************************************************************************************-->

  <form action="" method="post"></form>
  <div class="flex flex-wrap px-12 py-16 bg-blue-100 rounded-lg shadow-md h-18">
   <h1 class="text-sm text-lg text-3xl font-bold text-center lg:text-center text-black-600 md:text-2xl">PROCESO DE RECOLECCIÓN DE QUEJA</h1>
   <P class="py-4 text-base">Su opinion es importante para nosotros; para realizar su queja tenga en cuenta los siguientes aspectos:
   
    <div class="px-4 mb-4 bg-red-300 rounded-lg shadow-md h-18">
      
      <div class="item ">
        <item class="text-base">Dirijase en tono respetuoso.</item>
      </div>
      <div>
        <item class="text-base">Sea lo mas preciso en la imformación,incluya fecha, hora, funcionarios involucrados(si aplica).</item>
      </div>
      <div>
        <item class="text-base">Aporte pruebas (si las tiene), como fotos, documentos, o cualquier tipo de evidencia que usted considere que pueda respaldar lo descrito.</item>
      </div>
      <div>
        <item class="text-base">La queja puede ser realizada de manera anonima, pero si diligencia los campos de información personal, nos permitiria brindar una respuesta pertinente y oportuna a su solicitud.</item>
      </div>
    </div>
   </P>
  <!-- <div class="px-4 rounded-lg shadow-md bg-yellow-50 h-18">-->
     <textarea class="block w-full mt-1 bg-yellow-50 form-textarea" name="queja" id="queja" cols="30" rows="10" placeholder=" Digite aqui su queja"></textarea>
   </div>
  </div>

  <!--<div class="flex flex-wrap">
   <button class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none"
   type="button">Adjuntar</button>-->
   <label
  class="flex flex-col items-center w-64 px-4 py-6 tracking-wide text-purple-600 uppercase transition-all duration-150 ease-linear bg-white border rounded-md shadow-md cursor-pointer border-blue hover:bg-purple-600 hover:text-white">
  <i class="fas fa-cloud-upload-alt fa-3x"></i>
  <span class="mt-2 text-base leading-normal">Adjuntar</span>
  <input type='file' class="hidden" />
  </label>
  
   <!---<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
   </svg>-->
   <button class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear bg-purple-500 rounded shadow outline-none active:bg-purple-600 hover:shadow-lg focus:outline-none"
   type="button">Guardar</button>
  </div>
</form>
</body>
</html>