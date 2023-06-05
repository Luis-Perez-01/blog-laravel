<header class="bg-gray-800" x-data="{ open: false }">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="/" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400"
        @click="open = true">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
          aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
        <button @click="open = ! open" type="button"
          class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-white" aria-expanded="false">
          Product
          <svg class="h-5 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
              clip-rule="evenodd" />
          </svg>
        </button>
        <div x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-200"
          x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
          x-transition:leave-end="opacity-0 translate-y-1"
          class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-gray-800 shadow-lg ring-1 ring-gray-900/5">
          <div class="p-4">
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-700">
              <div
                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-700 group-hover:bg-gray-800">
                <svg class="h-6 w-6 text-white group-hover:text-cyan-500" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-white">
                  Analytics
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-400">Get a better understanding of your traffic</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-700">
              <div
                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-700 group-hover:bg-gray-800">
                <svg class="h-6 w-6 text-white group-hover:text-cyan-500" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-white">
                  Engagement
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-400">Speak directly to your customers</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-700">
              <div
                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-700 group-hover:bg-gray-800">
                <svg class="h-6 w-6 text-white group-hover:text-cyan-500" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-white">
                  Security
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-400">Your customers’ data will be safe and secure</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-700">
              <div
                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-700 group-hover:bg-gray-800">
                <svg class="h-6 w-6 text-white group-hover:text-cyan-500" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-white">
                  Integrations
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-400">Connect with third-party tools</p>
              </div>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm leading-6 hover:bg-gray-700">
              <div
                class="flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-700 group-hover:bg-gray-800">
                <svg class="h-6 w-6 text-white group-hover:text-cyan-500" fill="none" viewBox="0 0 24 24"
                  stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
              </div>
              <div class="flex-auto">
                <a href="#" class="block font-semibold text-white">
                  Automations
                  <span class="absolute inset-0"></span>
                </a>
                <p class="mt-1 text-gray-400">Build strategic funnels that will convert</p>
              </div>
            </div>
          </div>
          <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-800">
            <a href="#"
              class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-white hover:bg-gray-600">
              <svg class="h-5 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                  clip-rule="evenodd" />
              </svg>
              Watch demo
            </a>
            <a href="#"
              class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-white hover:bg-gray-600">
              <svg class="h-5 w-5 flex-none text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                  clip-rule="evenodd" />
              </svg>
              Contact sales
            </a>
          </div>
        </div>
      </div>
      @foreach ($categories as $category)
        <a href="{{ route('posts.category', $category) }}"
          class="text-sm font-semibold leading-6 text-gray-300 border-b border-transparent hover:border-cyan-500">{{ $category->name }}</a>
      @endforeach
    </div>



    <div x-data="{ open: false }" x-transition:enter="transition ease-out duration-1000"
      x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 translate-y-1" class="hidden lg:flex lg:flex-1 lg:justify-end">
      <div class="relative mr-3">
        @auth
          <div>
            <button @click="open = ! open" type="button"
              class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
              id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
            </button>
          </div>

          <div x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1"
            class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-lg bg-gray-800 p-2 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <a href="{{ route('profile.show') }}"
              class="block px-4 py-2 text-sm text-white hover:bg-gray-600 rounded-md" role="menuitem" tabindex="-1"
              id="user-menu-item-0">Perfil</a>
            <a href="{{ route('admin.home') }}" class="block px-4 py-2 text-sm text-white hover:bg-gray-600 rounded-md" role="menuitem"
              tabindex="-1" id="user-menu-item-1">Dashboard</a>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-white hover:bg-gray-600 rounded-md"
                role="menuitem" tabindex="-1" id="user-menu-item-2"
                onclick="event.preventDefault(); this.closest('form').submit();">Sign out</a>
            </form>

          </div>
        @else
          <div class="grid grid-cols-2 divide-x divide-gray-900/5 rounded-lg">
            <a href="{{ route('login') }}"
              class="flex items-center justify-center text-sm font-semibold leading-6 text-gray-300 gap-x-2.5 py-2 px-6 hover:bg-gray-700 rounded-r rounded-lg">Login</a>
            <a href="{{ route('register') }}"
              class="flex items-center justify-center text-sm font-semibold leading-6 text-gray-300 gap-x-2.5 py-2 px-6 hover:bg-gray-700 rounded-l rounded-lg">Register</a>
          </div>
        </div>
      </div>

    @endauth
  </nav>
  <div class="lg:hidden" role="dialog" aria-modal="true" x-show="open">
    <div class="fixed inset-0 z-10"></div>
    <div @click.away="open = false"
      class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-gray-800 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
            alt="">
        </a>
        <button @click="open = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
          <span class="sr-only">Close menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-2 py-6">
            <div x-data="{ open: false, rotate: '' }" x-on:click="rotate = !rotate" class="-mx-3">
              <button @click="open = true" type="button"
                class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-white font-semibold leading-7 hover:bg-gray-700"
                aria-controls="disclosure-1" aria-expanded="false">
                Product
                <!--
                  Expand/collapse icon, toggle classes based on menu open state.

                  Open: "rotate-180", Closed: ""
                -->
                <svg x-bind:class="{ 'rotate-180': rotate }" class="h-5 w-5 flex-none" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                </svg>
              </button>
              <div x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
                class="mt-2 space-y-2" id="disclosure-1">
                <a href="#"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Analytics</a>
                <a href="#"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Engagement</a>
                <a href="#"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Security</a>
                <a href="#"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Integrations</a>
                <a href="#"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Automations</a>
                <a href="#"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Watch
                  demo</a>
                <a href="#"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Contact
                  sales</a>
              </div>
            </div>
            @foreach ($categories as $category)
              <a href="{{ route('posts.category', $category) }}"
                class="-mx-3 block rounded-lg px-3 py-2 text-white font-semibold leading-7 hover:bg-gray-700">{{ $category->name }}</a>
            @endforeach
          </div>



          <div x-data="{ open: false, rotate: '' }" x-on:click="rotate = !rotate" class="py-6">
            <div class="inline-flex items-center gap-3 w-full">
              @auth
                <button @click="open = true" type="button"
                  class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 hover:bg-gray-700"
                  id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                  <span class="font-semibold text-white pl-3">
                    {{ auth()->user()->name }}
                  </span>
                  <svg x-bind:class="{ 'rotate-180': rotate }" class="h-5 w-5 ml-auto text-white" viewBox="0 0 20 20"
                    fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                      clip-rule="evenodd"></path>
                  </svg>
                </button>
              </div>

              <div x-show="open" @click.outside="open = false" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1"
                class="mt-2 space-y-2" id="disclosure-1">
                <a href="{{ route('profile.show') }}"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Perfil</a>
                <a href="{{ route('admin.home') }}"
                  class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700">Dashboard</a>

                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <a href="{{ route('logout') }}"
                    class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-300 hover:bg-gray-700"
                    onclick="event.preventDefault(); this.closest('form').submit();">Sign
                    out</a>
                </form>
              </div>
            </div>
          @else
            <div class="grid grid-cols-2 divide-x divide-gray-900/5 rounded-lg">
              <a href="{{ route('login') }}"
                class="flex items-center justify-center text-sm font-semibold leading-6 text-gray-300 gap-x-2.5 py-2 px-6 hover:bg-gray-700 rounded-r rounded-lg">Login</a>
              <a href="{{ route('register') }}"
                class="flex items-center justify-center text-sm font-semibold leading-6 text-gray-300 gap-x-2.5 py-2 px-6 hover:bg-gray-700 rounded-l rounded-lg">Register</a>
            </div>
          </div>
        </div>
      @endauth
    </div>
  </div>
</header>
