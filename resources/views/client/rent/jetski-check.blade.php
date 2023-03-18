<x-client-layout>
<div class="container w-full px-5 py-6 mx-auto">
    <div class="grid lg:grid-cols-4 gap-y-6">
       
        <form method="POST" action="{{ route('seleccion-moto') }}">
            @csrf
        @foreach ($motoslibres as $moto)
            <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
                {{-- <img class="w-full h-48" src="{{ Storage::url($moto->brand) }}" alt="Image" /> --}}
                <div class="px-6 py-4">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">
                        {{ $moto->brand }}</h4>
                    <p class="leading-normal text-gray-700">{{ $moto->model }}.</p>
                </div>
                <div class="flex items-center justify-between p-4">
                    <span class="text-xl text-green-600">{{ $moto->price }}$</span>
                </div>
                <input type=hidden name="id" value="{{ $moto->id }}" >
                <div class="mt-6 p-4 flex ">
                    <button type="submit"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Next</button>
                </div>
            </div>
        @endforeach
    </form>
    </div>
</div>
</x-client-layout>
