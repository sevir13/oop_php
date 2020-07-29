<?php

class Cart
{
    private $products = [];

    public function add($product)
    {
        if(is_object($product)) $this->products[] = $product;
    }

    public function getCart()
    {
        $products = [];
        foreach($this->products as $product){
            $products[] = array(
                'name' => $product->getName(),
                'price' => $product->getPrice(),
                'quantity' => $product->getQuantity()
            );
        }
        return $products;
    }

    public function remove($product_name)
    {
        $products = $this->products;
        foreach($products as $key => $value) {
            if($value->getName() === $product_name) unset($products[$key]);
        }
        $this->products = $products;
    }

    public function getTotalCost()
    {
        $products = $this->products;
        $cost = 0;
        foreach($products as $value) {
            $cost += $value->getCost();
        }
        return $cost;
    }

    public function getTotalQuantity()
    {
        $products = $this->products;
        $quantity = 0;
        foreach($products as $value) {
            $quantity += $value->getQuantity();
        }
        return $quantity;
    }

    public function getAvgPrice()
    {
        return $this->getTotalCost() / $this->getTotalQuantity();
    }
}