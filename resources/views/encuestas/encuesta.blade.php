<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <title>Encuestas perfect body</title>
</head>
  <body class="flex bg-local bg-green-100" style="background: bg-black-900">
    
  <div class="max-w-6xl px-12 py-20 mx-auto mt-10 mb-24 bg-white bg-gray-100 shadow-xl lg:px-24">
    
   
    <form>
      <div class="flex flex-col px-8 pt-6 pb-8 mb-4 bg-white shadow-md rounded-3xl">
      <div class="px-3 md:w-full">
            <label class="mb-2 text-xs font-bold tracking-wide text-black uppercase" for="tipo-documento">
              Tipo de documento
            </label>
            <div>
              <select class="w-full px-4 py-3 pr-8 mb-3 text-xs text-black bg-gray-200 border border-gray-200 rounded" id="tipo-documento">
                <option class="font-bold text-center" value="0">- - - -  Seleccionar  - - - -</option>  
                <option class="font-bold text-center" value="1">Tarjeta de identidad</option>
                <option class="font-bold text-center" value="2">Cedula de ciudadania</option>
                <option class="font-bold text-center" value="3">Cedula de extranjeria</option>
                <option class="font-bold text-center" value="4">Pasaporte</option>
              </select>
            </div>
<!-- -------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------- -->
<!-- -------------------------------------------------------------------------------------------------------- -->
            <!--<span class="text-xs italic text-red-500">
                Elija una opción
              </span>-->
          </div>
          <div class="px-3 md:w-full">
            <label class="mb-2 text-xs font-bold tracking-wide text-black uppercase" for="identificacion">
              identificación
            </label>
            <input class="w-full px-4 py-3 mb-3 text-black bg-gray-200 border border-gray-200 rounded" id="application-linkidentificacion" type="text" placeholder="identificación">
          </div>
        </div>
        
        <div class="mt-2 -mx-3 md:flex">
          <div class="px-3 md:w-full">
            <button class="px-4 py-2 font-bold text-white bg-green-300 border-b-4 border-gray-200 rounded-br-3xl rounded-tl-3xl md:w-full hover:border-b-2 hover:border-gray-100">
              Siguiente
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
<!---  *********************************************************************************************************+---> 

</body>
</html>