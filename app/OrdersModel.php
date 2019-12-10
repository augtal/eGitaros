<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersModel extends Model
{
    protected $table = 'uzsakymas';
    protected $primaryKey = 'uzsakymo_ID';

    public function orders()
    {
        return $this->hasMany('App\OrdersItemsModel');
    }
}
