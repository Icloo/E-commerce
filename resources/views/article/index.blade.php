<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des produits') }}
        </h2>

    </x-slot>

    
<section class="text-gray-600 body-font">
    @foreach($articles as $article)

        <div class="container px-5 py-24 mx-auto">
        
          <div class="flex flex-wrap -m-4">

          

            <div class="p-4 md:w-1/3">
              <div class="h-full rounded-xl shadow-cla-blue bg-gradient-to-r from-indigo-50 to-blue-50 overflow-hidden">
                <img class="lg:h-48 md:h-36  object-cover object-center scale-110 transition-all duration-400 hover:scale-100" src="{{ asset('/storage/' . $article->image) }}" alt="blog">
                <div class="p-6">
                  
                  <h1 class="title-font text-lg font-medium text-gray-600 mb-3">{{$article->title}}</h1>
                  <p class="leading-relaxed mb-3">{{ Str::limit($article->content, 75)}}</p>
                  <span class="text-l font-semibold text-gray-800 hover:underline dark:text-white ">
                  {{$article->price}} €
                    </span>
                  <div class="flex items-center flex-wrap ">
                    <a href="{{ route('articles.show', $article)}}">
                    <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">En savoir +</button>
                    </a>
                    <a href="{{ route('carts.create', $article)}}">
                    <button class="bg-gradient-to-r from-cyan-400 to-blue-400 hover:scale-105 drop-shadow-md  shadow-cla-blue px-4 py-1 rounded-lg">Ajouter au panier</button>
                    </a>
                  </div>
                </div>
                
              </div>
              
            </div>
            
        </div>
        @endforeach
      </section>

      

</x-app-layout>
@include('layouts.footer')

