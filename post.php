<?php

abstract class shopProducts {
    protected $price;
    protected $discount;
    abstract function getPrice();
}

interface shopDiscount {
    public function getDiscount();
}

class shopBooks extends shopProducts implements shopDiscount {

    public function __construct($price)
    {
        $this->price = $price;
        $this->discount = 50;
    }

    public function getPrice() {
        if($this->discount > 0) {
            return $this->price - ($this->price / 100 * $this->discount);
        }
        return $this->price;
    }

    public function getDiscount()
    {
        return $this->discount;
    }


}

class books extends shopBooks {
    public function getPrice() {
        return $this->price;
    }
}

$obj = new Books(20);
echo $obj->getPrice().'<br>';
echo $obj->getDiscount();