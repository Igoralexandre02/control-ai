<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
  <title>@yield('title')</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900">
  <!-- navbar -->
  <x-navbar />
  <div class="flex pt-16 bg-gray-50 dark:bg-gray-900">
    <!-- Sidebar -->
    <x-sidebar />
    <!-- Conteúdo -->
    <div id="main-content" class="w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
      <main class="p-4 bg-gray-100 dark:bg-gray-900">
        @yield('content')
      </main>
      <!-- footer -->
      <x-footer />
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>