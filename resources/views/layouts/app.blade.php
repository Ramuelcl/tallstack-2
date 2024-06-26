<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <meta name="description"
        content="">
  <meta name="author"
        content="Ramuel Gonzalez">
  <!-- CSRF Token -->
  <meta name="csrf-token"
        content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Guz@net') }} - @yield('title')</title>

  <!-- Styles & Fonts -->
  @include('layouts.partials.styles')
  @livewireStyles

</head>

<body class="font-sans antialiased"
      x-data="{ darkMode: false }"
      x-init="if (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
          localStorage.setItem('darkMode', JSON.stringify(true));
      }
      darkMode = JSON.parse(localStorage.getItem('darkMode'));
      $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
      x-cloak>
  <div class="min-h-screen bg-gray-100"
       x-bind:class="{ 'dark': darkMode === true }">

    <!-- pl-8 md:pl-16 lg:pl-32 xl:pl-64 -->

    <main class="bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-50">

      @include('layouts.partials.header')

      {{ $slot ?? 'falta contenido' }}

      @include('layouts.partials.footer')
    </main>

  </div>
  @livewireScripts
  @include('layouts.partials.scripts')
</body>

</html>
