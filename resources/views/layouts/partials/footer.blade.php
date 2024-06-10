<!-- resources/views/layouts/partials/footer.blade.php -->
<footer
        class="h-6 bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-50 md:flex md:items-center md:justify-between md:px-6">
  <span class="text-sm sm:text-center">&copy; {{ date('Y') }} &middot;
    <a class="hover:underline"
       href="mailto:{{ config('guzanet.email') }}">{{ __(' Created by ') }}{{ config('guzanet.autor', 'falta el autor en config/guzanet.php') }}
    </a>

  </span>
  <ul class="flex flex-wrap items-center text-sm sm:mt-0">
    <li>
      <a class="mr-4 hover:underline md:mr-6"
         href="{{ route('pages.about') }}"
         wire:navigate>{{ __('About') }}</a>
    </li>

    <li>
      <a class="hover:underline"
         href="{{ route('pages.contact') }}"
         wire:navigate>{{ __('Contact') }}</a>
    </li>
  </ul>
</footer>
