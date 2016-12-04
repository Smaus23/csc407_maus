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

}
