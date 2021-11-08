<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css')}}">
    <title>Incio</title>
</head>
<body>
    
<div class="w-full max-w-xs">
    <form class="px-8 pt-6 pb-8 mb-4 bg-white bg-blue-300 rounded shadow-md" action="" method="POST">
      <div class="mb-4">
        <label class="block mb-2 text-sm font-bold text-gray-700" for="usuario">
          Usuario
        </label>
        <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
      </div>
      <div class="mb-6">
        <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
          Contraseña
        </label>
        <input class="w-full px-3 py-2 mb-3 leading-tight text-gray-700 border border-red-500 rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Password">
        <p class="text-xs italic text-red-500">Please choose a password.</p>
      </div>
      <div class="flex items-center justify-between">
        <button class="px-4 py-2 text-xs font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
          Iniciar sesión
        </button>
        <a class="inline-block text-sm font-bold text-blue-500 align-baseline hover:text-blue-800" href="#">
          Recordar contraseña?
        </a>
      </div>
    </form>
    <p class="text-xs text-center text-gray-500">
      &copy;2020 Acme Corp. All rights reserved.
    </p>
  </div>
  
</body>
</html>