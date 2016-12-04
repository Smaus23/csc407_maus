<?php

namespace App\Http\Controllers;

use App\MensApparel;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Requests;

class MensApparelController extends Controller
{


    public function index()
    {
        $mens = MensApparel::get()->toArray();
        // dd($mens);
        return view('mens')->with('mens', $mens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addToCart($id)
    {
        $item = MensApparel::where('itemID', $id)->first()->toArray();

        Cart::add($item['ItemID'], $item['Apparel'], 1, $item['Price']);

        return redirect('/shoppingcart');
    }

    public function updateCart($id)
    {
        $row = MensApparel::where('itemID', $id)->first()->toArray();

        Cart::update($row, 2);

        return redirect('/shoppingcart');
    }

    public function subtotal($id)
    {
        $item = MensApparel::where('itemID', $id)->first()->toArray();

        Cart::subtotal($item);

        return redirect('/shoppingcart');
    }

    public function tax($id)
    {
        $item = MensApparel::where('itemID', $id)->first()->toArray();

        Cart::tax($item);

        return redirect('/shoppingcart');
    }

    public function total($id)
    {
        $item = MensApparel::where('itemID', $id)->first()->toArray();

        Cart::total($item);

        return redirect('/shoppingcart');
    }
}
