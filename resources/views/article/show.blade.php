<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $article->title }}
        </h2>
    </x-slot>


<section class="bg-white dark:bg-gray-900">
    <div class="container px-6 py-10 mx-auto" style="display:flex; justify-content:space-around">
      
        <img src="{{ asset('/storage/' . $article->image) }}" alt="">
<div style="margin-right: 30vw;">
        <div>
            {{ $article->content }}
        </div>
<div style="height: 5vh">

</div>
        <div>
            {{ $article->price }} €
        </div>

        <a href="{{ route('carts.create', $article)}}">
                    <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Ajouter au panier</button>
                    </a>
    </div>
    </div>
    
</section>


</x-app-layout>
@include('layouts.footer')