<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>calculadora</title>
    <style>
      @layer utilities {
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }
      }
    </style>
  </head>
  <?php

  $n1 = $_GET["n1"];
  $n2 = $_GET["n2"];
  $op = $_GET["op"];
  
  $resultado;
  
  if($op == "+"){
  
    $resultado =  $n1 + $n2 ;
  
  } elseif ($op == "-") {
  
    $resultado =  $n1 - $n2 ;
  
  } elseif ($op == "/") {
  
    $resultado =  $n1 / $n2 ;
  
  }elseif ($op == "*") {
  
    $resultado =  $n1 * $n2 ;
  
  }
  ?>

  <body class="bg-slate-800 h-screen w-screen">
    <form action="" method="get" class="h-full w-full">
      <div class="grid grid-cols-3 gap-4 place-content-center h-full mx-8">
        <div class="">
          <label
            for="n1"
            class="block mb-2 text-sm font-medium text-gray-900 text-gray-300"
            >Primeiro Número</label
          >
          <input
            type="number"
            id="n1"
            name="n1"
            aria-describedby="helper-text-explanation"
            class="text-slate-400 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
            placeholder="00"
          />
        </div>
        <div>
          <label
            for="countries"
            class="block mb-2 text-sm font-medium text-gray-900 text-gray-400"
            >Escolha uma opeção</label
          >
          <select
            id="op"
            name="op"
            class="text-slate-400 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
          >
            <option selected>Operaçoes</option>
            <option value="+">mais</option>
            <option value="-">menos</option>
            <option value="/">dividir</option>
            <option value="*">multiplicar</option>
          </select>
        </div>
        <div>
          <label
            for="n2"
            class="block mb-2 text-sm font-medium text-gray-900 text-gray-300"
            >Segundo Número</label
          >
          <input
            type="number"
            id="n2"
            name="n2"
            aria-describedby="helper-text-explanation"
            class="text-slate-400 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-4 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
            placeholder="00"
          />
        </div>
        <div class="">
          <div
            class="text-slate-400 border border-gray-300 text-gray-900 text-sm rounded-lg p-4 bg-purple-700 border-gray-600 placeholder-gray-400 text-white"
          >
            <?php
            echo($resultado);
            ?>
          </div>
        </div>
        <div class="col-end-4 col-start-3 place-self-end">
          <button
            type="submit"
            class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 focus:ring-gray-700 bg-gray-800 text-gray-400 border-gray-600 hover:text-white hover:bg-gray-700"
          >
            Alternative
          </button>
        </div>
      </div>
    </form>
  </body>
</html>
