<?php


class CartItem
{
    private Product $product;
    private int $quantity;

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

    //Criar construtor
    public function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    //GET AND SET
    // public function getProduct(){
    public function getCartItem(){
        return $this->product;
    }

    // public function setProduct($product){
    public function setCartItem($product){
        $this->product = $product;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function setQuantity($quantity){
        $this->quantity = $quantity;
    }
    //.GET AND SET

    public function increaseQuantity($amount = 1)
    {
        if($this->getQuantity() + $amount > $this->getCartItem()->getAvailableQuantity()){
            throw new Exception('Product quantity can not be more than'.$this->getCartItem()->getAvailableQuantity());
        }
        $this->quantity += $amount;
    }

    public function decreaseQuantity($amount = 1)
    {
        if($this->getQuantity() - $amount < 1){
            throw new Exception('Product quantity can not be less than 1');
        }
        $this->quantity -= $amount;
    }
}