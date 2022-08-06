<?php require 'scoring.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
  <title>Kalkulator JWD</title>
</head>
<body class="bg-gray-200">
  <div class="w-[300px] h-[600px] bg-orange-100 mx-auto mt-[5%] border-2 border-black rounded-3xl overflow-hidden ">
    <h1 class="text-2xl bg-blue-600 overflow-hidden text-center text-white py-3">Kalkulator Nilai</h1>
    <div class="w-[90%] mx-auto mt-5" id="calculator-form">
      <form action="" method="POST">
        <div class="mb-6">
          <label for="nilai-praktik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Praktik</label>
          <input  type="number" id="nilai-praktik" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nilai praktik" required="" name="praktik">
        </div>
        <div class="mb-6">
          <label for="nilai-pilihan-ganda" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Pilihan Ganda</label>
          <input  type="number" id="nilai-pilihan-ganda" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nilai praktik" required="" name="pilihan-ganda">
        </div>
        <div class="mb-6">
          <label for="nilai-sikap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Sikap</label>
          <input  type="number" id="nilai-sikap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nilai praktik" required="" name="sikap">
        </div>
        <div class="mb-6">
          <label for="nilai-kehadiran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nilai Kehadiran</label>
          <input  type="number" id="nilai-kehadiran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nilai praktik" required="" name="kehadiran">
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="submit">Submit</button>
        <div class="mt-6 text-md font-bold">Nilai Akhir : <?= $nilaiAkhir ?></div>
        <div class="text-md font-bold">Kriteria Kelulusan : <?= $kriteria ?> </div>
      </form>
    </div>
  </div>











  <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>