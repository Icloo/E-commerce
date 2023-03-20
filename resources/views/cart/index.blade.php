<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panier') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        @if(session('success'))
                {{session('success')}}
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($carts as $cart)
                <div class="flex items-center" style="display:flex; justify-content:space-around">
                    {{ $cart->title }}
          
                    {{ $cart->price}} € 
                    <a href="#" class="bg-red-500 px-2 py-3 block" 
                    onclick="event.preventDefault
                        document.getElementById('destroy-article-form').submit();
                    ">Retirer {{ $cart->title }} du panier
                    <form action="{{ route('carts.destroy', $cart)}}" method="post" id="destroy-article-form">
                        @csrf
                        @method('delete')
                    </form>
                </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')