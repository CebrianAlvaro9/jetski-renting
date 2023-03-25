<x-client-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   @if (session('exito'))
    <div class="alert alert-success">
        {{ session('exito') }}
    </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h4 class="text-3xl font-normal leading-normal mt-0 mb-2 text-pink-800">
                Cliente {{ $user->name }}
            </h4>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            id
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            nombre
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            email
                                        </th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $user->id }}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $user->name }}
                                        </td>
                                        <td
                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $user->email }}
                                        </td>

                                        {{-- <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class="flex space-x-2"> --}}
                                        {{-- <a href="{{ route('client.users.edit', $user->id) }}"

                                                        class="px-4 border border-black py-2 bg-green-300 hover:bg-green-700 rounded-lg text-black">Edit </a> --}}

                                        {{-- 
                                                    <form
                                                        class="px-4 py-2 bg-red-500 hover:bg-red-300 rounded-lg text-white"
                                                        method="POST"
                                                        action="{{ route('client.users.destroy', $user->id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Delete</button>
                                                    </form> --}}
                                        {{-- </div>
                                            </td> --}}
                                    </tr>


                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <br>
            <h4 class="text-3xl font-normal leading-normal mt-0 mb-2 text-pink-800">
                Alquileres realizados
            </h4>



            @if (empty($user->jetskis[0]))
                <br>
                <p>No hay alquileres realizados por parte de este cliente</p>
            @else
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                fecha
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                marca
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                modelo
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                tiempo
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                precio
                                            </th>
                                            <th scope="col" class="relative py-3 px-6 ">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rents as $key => $rent)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                                    {{ $rent->date_in }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $rent->brand }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $rent->model }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{-- {{ $rent->interval }} --}}

                                                    {{ $intervals[$key] }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{-- {{ $rent->interval }} --}}

                                                    {{ $rent->total_price }} €
                                                </td>
                                                @if(strtotime($rent->date_in) > time())
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <div class="flex space-x-2">
                                            <a href={{ route('client.jetskisUsers.edit', $rent->id) }}
                                               
                                                class="px-4 border border-black py-2 bg-green-300 hover:bg-green-700 rounded-lg text-black">Edit </a>

                                            <form
                                                class="px-4 py-2 bg-red-500 hover:bg-red-300 rounded-lg text-white"
                                                method="POST"
                                                action="{{ route('client.jetskisUsers.destroy', $rent->id) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                    @endif



                                            </tr>
                                        @endforeach
            @endif
            </tbody>
            </table>


        </div>
    </div>
    </div>
    </div>

    </div>
    </div>
</x-client-layout>
