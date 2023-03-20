<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $article }}
        </h2>
    </x-slot>


<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto">
      
        <img src="{{ asset('/storage/' . $article->image) }}" alt="">

        <div>
            {{ $article }}
        </div>

        <div>
            {{ $article }} €
        </div>

        <a href="{{ route('carts.create', $article)}}">
                    <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Ajouter au panier</button>
                    </a>
    </div>

    
</section>


</x-app-layout>