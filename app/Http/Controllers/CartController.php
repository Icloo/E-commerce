<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Http\Client\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carts = auth()->user()->carts;

        return view('cart.index', compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
   
   
        $i = "Café nueve";
        $u = "8";
        Cart::create([
     
            'title' => $i,
            'content' => $u,
            'image' => $u,
            'price' => $u

        ]);
        
         return redirect()->route('carts.index')->with('success', 'Votre produit a bien été ajouté au panier');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartRequest $request, Article $article)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart, Article $article)
    {
        return view('cart.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart, Article $article)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();

        return redirect()->route('carts.index')->with('success', 'Votre produit a bien été supprimé du panier');

    }
}
