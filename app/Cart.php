<?php

namespace App;

class Cart
{
    public $items=null;
    public $totalQty=0;
    public $totalPrice=0;

    public function __construct($oldCart)
    {
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id)
    {
        $storedItem = [ 'qty'=> 0,
                        'price' => $item->kaina,
                        'item' => $item,
                        'img' => $item->pavadinimas,
                        'pav' => $item->pavadinimas,
                        'id' => $id
                      ];

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $storedItem['qty']++;
        $storedItem['price'] = $item->kaina * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->kaina;
    }

    public function remove($item, $id)
    {
        $storedItem = [ 'qty'=> 0,
                        'price' => $item->kaina,
                        'item' => $item,
                        'img' => $item->pavadinimas,
                        'pav' => $item->pavadinimas,
                        'id' => $id
                      ];

        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }

        $this->totalQty--;
        $this->totalPrice -= $item->kaina;

        $storedItem['qty']--;
        if($storedItem['qty'] == 0){
            unset($this->items[$id]);
            return;
        }
        $storedItem['price'] = $item->kaina * $storedItem['qty'];
        $this->items[$id] = $storedItem;

    }
}
