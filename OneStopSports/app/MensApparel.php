<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MensApparel extends Model
{
    /**
     * Allow soft deletes
     */
    /* use SoftDeletes;
     /**
      * The database table used by the model.
      *
      * @var string
      */
    protected $table = 'mens_apparel';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ItemID', 'Apparel', 'Price'];
    // protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function item()
    {
        return $this->belongsTo('App\Item');
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
