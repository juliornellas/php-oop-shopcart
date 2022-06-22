<?php

class Cart
{
    private array $items = [];

    private function findCartItem(int $productId)
    {
        return $this->items[$productId] ?? null;
        // foreach ($this->items as $item) {
        //     if($item->getCartItem()->getId() === $productId){
        //         return $item->getCartItem();
        //     }
        // }
        // return null;
    }

    public function addProduct(Product $product, int $quantity)
    {
        //Seleciona o produto
        $cartItem = $this->findCartItem($product->getId());
        //Verifica se existe o produto
        if($cartItem === null){
            //Cria o produto
            $cartItem = new CartItem($product, 0);// Zero pq no increase o default ja é 1
            //Adc no array dos itens do carrinho
            $this->items[$product->getId()] = $cartItem;
        }
        //Então, adc a qtd selecionada
        $cartItem->increaseQuantity($quantity);
        //Retorna o produto
        return $cartItem;
    }

    public function removeProduct(Product $product)
    {
        unset($this->items[$product->getId()]);
        // foreach ($this->items as $index => $item) {
        //     if($item->getCartItem()->getId() === $product->getId()){
        //         unset($this->items[$index]);
        //         break;
        //     }
        // }
    }

    public function getItems(){
        return $this->items;
    }

    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->items as $item){
            $sum += $item->getQuantity();
        }
        return $sum;
    }

    public function getTotalSum()
    {
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item->getQuantity() * $item->getCartItem()->getPrice(); //item instancia da classe produto logo ele acessa a função getPrice
        }
        return $totalSum;
    }
}