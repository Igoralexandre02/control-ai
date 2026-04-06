<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
  <title>@yield('title', config('app.name', 'Laravel'))</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900">
  <x-navbar />
  <div class="flex pt-16 bg-gray-50 dark:bg-gray-900">
    <x-sidebar />
    <div class="main-container">
      <main class="bg-gray-100 dark:bg-gray-900 mb-4">
        @yield('content')
      </main>
      <x-footer />
    </div>
  </div>

</body>