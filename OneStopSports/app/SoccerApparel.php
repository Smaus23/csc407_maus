<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SoccerApparel extends Model
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
    protected $table = 'soccer';
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
        $item = SoccerApparel::where('itemID', $id)->first()->toArray();

        Cart::add($item['ItemID'], $item['Apparel'], 1, $item['Price']);

        return redirect('/shoppingcart');
    }
}
