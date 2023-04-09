
        <div class="flex-col w-full md:flex md:flex-row md:min-h-full">
            <div @click.away="open = false" class="flex flex-col flex-shrink-0 w-full text-gray-700 bg-white md:w-64 dark-mode:text-gray-200 dark-mode:bg-gray-800" x-data="{ open: false }">
                <div class="flex flex-row items-center justify-between flex-shrink-0 px-8 py-4">
                    <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Gestión</a>
                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                    <nav :class="{'block': open, 'hidden': !open}" class="flex-grow px-4 pb-4 md:block md:pb-0 md:overflow-y-auto">
                     
                        <x-admin-nav-link :href="route('admin.users.index')"
                        :active="request()->routeIs('admin.users.index')">
                        {{ __('Usuarios') }}
                        </x-admin-nav-link>
                        <x-admin-nav-link :href="route('admin.jetskis.index')"
                        :active="request()->routeIs('admin.jetskis.index')">
                        {{ __('Motos de agua') }}
                        </x-admin-nav-link>
                        <x-admin-nav-link :href="route('admin.jetskisUsers.index')"
                        :active="request()->routeIs('admin.jetskisUsers.index')">
                        {{ __('Alquileres') }}
                        </x-admin-nav-link>
                        <x-admin-nav-link :href="route('admin.cancellations.index')"
                        :active="request()->routeIs('admin.cancellations.index')">
                        {{ __('Cancelaciones') }}
                        </x-admin-nav-link>
                      
                        
                    </nav>
            </div>
            <main class="w-full">
                <div>
                    @if (session()->has('danger'))
                        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                            role="alert">
                            <span class="font-medium">{{ session()->get('danger') }}!</span>
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                            role="alert">
                            <span class="font-medium">{{ session()->get('success') }}!</span>
                        </div>
                    @endif
                    @if (session()->has('warning'))
                        <div class="p-4 mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800"
                            role="alert">
                            <span class="font-medium">{{ session()->get('warning') }}!</span>
                        </div>
                    @endif
                </div>
                {{ $slot }}
            </main>
        </div>

