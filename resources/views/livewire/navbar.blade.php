<nav class="border-b border-gray-100 bg-white dark:bg-gray-800"
     x-data="{ open: false }">
  <!-- Primary Navigation Menu -->
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 justify-between">
      <div class="flex">
        <!-- Logo -->
        <div class="flex shrink-0 items-center">
          <!-- logotipo -->
          <a class="flex items-center no-underline"
             href="/">
            <img class="mr-3 block h-6 w-auto fill-current sm:h-9"
                 src="{{ asset(config('guzanet.logoImagen')) }}"
                 alt="falta imagen en config/guzanet.php" />
            <span
                  class="self-center whitespace-nowrap text-xl font-semibold">{{ config('guzanet.logoNombre', 'falta config/guzanet.php') }}</span>
          </a>
        </div>

        <!-- Navigation Links -->
        <div class="my-auto hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
          <ul
              class="mt-4 flex flex-col rounded-lg border border-gray-100 p-4 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:text-sm md:font-medium">
            @foreach ($menus as $menu => $html)
              @php
                $active = setActive($html) == 'active' ? 'underline' : 'no-underline';
              @endphp
              <li>
                <a class="{{ $active }} block rounded pl-3 pr-4 hover:underline md:bg-transparent md:p-0"
                   href="{{ route($html) }}"
                   aria-current="">{{ $menu }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>

      <!-- Settings Dropdown -->
      <div class="flex flex-row">
        <div class="hidden sm:ml-6 sm:flex sm:items-center">
          @auth
            <x-dropdown align="right"
                        width="48">
              <x-slot name="trigger">
                <button
                        class="flex items-center text-sm font-medium transition duration-150 ease-in-out hover:border-gray-300 focus:outline-none">
                  <div>{{ Auth::user()->name }}</div>

                  <div class="ml-1">
                    <svg class="h-4 w-4 fill-current"
                         xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20">
                      <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                  </div>
                </button>
              </x-slot>

              <x-slot name="content">
                <!-- Authentication -->
                <form method="POST"
                      action="{{ route('logout') }}">
                  @csrf

                  <x-dropdown-link :href="route('logout')"
                                   onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                  </x-dropdown-link>
                </form>
              </x-slot>
            </x-dropdown>
          @endauth
        </div>
        <div class="my-auto ml-2">
          <button class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                  type="button"
                  role="switch"
                  aria-checked="false"
                  x-bind:class="darkMode ? 'bg-indigo-500' : 'bg-gray-200'"
                  x-on:click="darkMode = !darkMode">
            <span class="sr-only">Dark mode toggle</span>
            <span class="pointer-events-none relative inline-block h-5 w-5 transform rounded-full shadow ring-0 transition duration-200 ease-in-out"
                  x-bind:class="darkMode ? 'translate-x-5 bg-gray-700' : 'translate-x-0 bg-white'">
              <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                    aria-hidden="true"
                    x-bind:class="darkMode ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200'">
                <svg class="h-3 w-3 text-gray-400"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20"
                     fill="currentColor">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                </svg>
              </span>
              <span class="absolute inset-0 flex h-full w-full items-center justify-center transition-opacity"
                    aria-hidden="true"
                    x-bind:class="darkMode ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100'">
                <svg class="h-3 w-3 text-white"
                     xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20"
                     fill="currentColor">
                  <path fill-rule="evenodd"
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        clip-rule="evenodd" />
                </svg>
              </span>
            </span>
          </button>
        </div>
      </div>
      <!-- Hamburger -->
      <div class="-mr-2 flex items-center sm:hidden">
        <button class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 transition duration-150 ease-in-out hover:bg-gray-100 hover:text-gray-500 focus:bg-gray-100 focus:text-gray-500 focus:outline-none"
                @click="open = ! open">
          <svg class="h-6 w-6"
               stroke="currentColor"
               fill="none"
               viewBox="0 0 24 24">
            <path class="inline-flex"
                  :class="{ 'hidden': open, 'inline-flex': !open }"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16" />
            <path class="hidden"
                  :class="{ 'hidden': !open, 'inline-flex': open }"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div class="hidden sm:hidden"
       :class="{ 'block': open, 'hidden': !open }">
    <div class="space-y-1 pb-3 pt-2">
      <ul
          class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:text-sm md:font-medium md:dark:bg-gray-900">
        @foreach ($menus as $menu => $html)
          <li>
            @php
              $active = setActive($html) == 'active' ? 'underline' : 'no-underline';
            @endphp
            <a class="{{ $active }} block rounded bg-blue-700 py-2 pl-3 pr-4 text-gray-50 hover:underline dark:text-gray-50 md:bg-transparent md:p-0 md:text-blue-700"
               href="{{ route($html) }}"
               aria-current="">{{ $menu }}</a>
          </li>
        @endforeach
      </ul>
    </div>

    <!-- Responsive Settings Options -->
    <div class="border-t border-gray-200 pb-1 pt-4">
      @auth
        <div class="px-4">
          <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
          <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
        </div>
      @endauth

      <div class="mt-3 space-y-1">
        <!-- Authentication -->
        <form method="POST"
              action="{{ route('logout') }}">
          @csrf

          <x-responsive-nav-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
  </div>
</nav>
