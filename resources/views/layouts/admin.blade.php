<div class="flex-col w-full md:flex md:flex-row md:min-h-full">

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


<div
    class="fixed bottom-0 left-0 z-50 w-full h-20 bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600">
    <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
        <a href="/admin/users" type="button"
            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                </path>

            </svg>
            <span
                class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Users</span>
        </a>
  
        <a href="/admin/jetskis" type="button"
            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 490 490"
                xml:space="preserve">
                <g>
                    <path
                        d="M489.755,319.312c-0.662-2.02-2.547-3.387-4.673-3.387H5.068c-2.126,0-4.011,1.367-4.673,3.387
		c-0.662,2.022,0.049,4.238,1.763,5.496c1.767,1.297,45.537,31.775,242.918,31.775s241.15-30.479,242.918-31.775
		C489.706,323.55,490.417,321.334,489.755,319.312z" />
                    <path
                        d="M488.749,293.146c-5.739-10.082-16.157-19.199-27.914-26.518c-9.284-5.777-20.017-10.51-31.9-14.064
		c-20.127-6.018-36.507-6.584-37.194-6.605c-0.052-0.002-0.105-0.002-0.157-0.002H56.511c-0.552,0-1.098,0.096-1.623,0.264
		c-19.145,6.145-43.861,29.176-54.229,47.605c-0.965,1.715-0.818,3.518,0.108,5.07c0.927,1.553,2.602,2.504,4.409,2.502
		c1.739,0,175.477-0.027,315.921-0.027c82.483,0,137.509,0.01,163.547,0.027c0.002,0,0.002,0,0.004,0
		c1.887,0,3.621-1.033,4.518-2.695C490.062,297.043,489.72,294.851,488.749,293.146z" />
                    <g>
                        <path
                            d="M218.358,193.966c-0.546-1.746-1.704-2.742-4.235-3.547c-6.332-2.014-28.635-7.596-49.676-10.201l14.668-19.238
			l37.463-8.643c5.156-1.189,8.373-6.334,7.184-11.49c-1.189-5.158-6.335-8.373-11.492-7.184c0,0-30.259,7.139-40.39,9.318
			c-2.542,0.545-4.319,1.484-5.899,3.615c-6.852,9.246-21.37,28.092-24.683,32.387c-31.76,2.547-76.96,40.842-79.541,43.424
			c-1.518,1.518-2.209,3.664-1.462,5.676c0.747,2.012,2.666,3.346,4.813,3.346c30.029,0,120.118,0,120.118,0
			c1.296,0,2.395-0.43,3.444-1.338c1.811-1.568,28.573-31.125,28.573-31.125C218.479,197.617,218.903,195.713,218.358,193.966z" />
                        <path
                            d="M410.042,174.586c-3.395-5.152-8.598-7.992-14.653-7.992c-2.221,0-4.688,0.525-6.978,1.133
			c-64.377,17.383-93.166,25.305-138.511,26.219c-0.195,0.004-1.002,0.037-1.196,0.059c-7.6,0.824-15.056,6.479-22.688,16.273
			c-5.334,6.846-8.754,13.373-8.897,13.648c-0.829,1.592-0.767,3.5,0.164,5.035c0.931,1.533,2.595,2.469,4.389,2.469h156.565
			c10.922,0,20.628-4.91,27.329-13.826c5.578-7.424,8.777-17.135,8.777-26.648C414.343,184.517,412.856,178.857,410.042,174.586z" />
                    </g>
                </g>
            </svg>
            <span
                class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Motos</span>
        </a>
        <a href="/admin/jetskisUsers" type="button"
        class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
        <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z">
            </path>
        </svg>
        <span
            class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">Reservas</span>
    </a>
        <a href="/admin/cancellations"type="button"
            class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
            <svg class="w-6 h-6 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path>
              </svg>
            <span
                class="text-sm text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500">cancelaciones</span>
        </a>
    </div>
</div>
