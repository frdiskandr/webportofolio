<!DOCTYPE html class="h-full bg-gray-100">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
      html{
        padding: 0;
        margin: 0;
      }
      body{
        width: 100%;
        height: 100%;
      
      }
    </style>
      @vite('resources/css/app.css')
      <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
      <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="h-full main-body">
<div class="min-h-full">
  <x-navbar />
  <x-header>{{ $title }}</x-header>
  <main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    {{ $slot }}
  </main>
</div> 
</body>
</html>