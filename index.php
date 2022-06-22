<?php

// https://www.youtube.com/watch?v=1Ip7_hdSqzY
// https://github.com/thecodeholic/PHP-OOP-Projects/tree/master/Shopping%20Cart
// https://github.com/thecodeholic/PHP-OOP-Projects/tree/final-version/Shopping%20Cart

require_once "Product.php";
require_once "Cart.php";
require_once "CartItem.php";

echo "
    <div style='text-align: center'>
        <h1>Loja Virtual OOP PHP</h1>
    </div>
    <hr />
    ";

//  1º PASSO
//Cria-se um estoque de exemplo com 3 produtos e suas referidas quantidades
$product1 = new Product(1, "iPhone 11", 2500, 10);
$product2 = new Product(2, "M2 SSD", 400, 10);
$product3 = new Product(3, "Samsung Galaxy S20", 3200, 10);

// 2º PASSO
//Cria-se o carrinho que receberá todas os produtos de interesse
$cart = new Cart();

// Mostrar que da pra enviar direto
// $cartItem1 = $cart->addProduct($product1, 1);

// 3º PASSO
//Adiciona os produtos e suas referidas quantidades no carrinho
$cartItem1 = $product1->addToCart($cart, 1);
$cartItem2 = $product2->addToCart($cart, 1);

// 4º PASSO
// Verifica-se os TOTAIS do itens do carrinho
// echo '<pre>';
// var_dump($cart);
// echo '</pre>';
// echo '<hr />';
//Nº itens
echo "Number of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL; // This must print 2
echo '<hr />';
// Preço total
echo "Total price of items in cart: ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL; // This must print 2900
echo '<hr />';

// 5º PASSO
// Aumentar ou diminuir a quantidade do item
$cartItem2->increaseQuantity();
// $cartItem2->increaseQuantity();
// $cartItem2->decreaseQuantity();

// 6º PASSO
// Verifica-se os TOTAIS do itens do carrinho
// echo '<pre>';
// var_dump($cart);
// echo '</pre>';
// echo '<hr />';
//Nº itens
echo "Number of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL; // This must print 2
echo '<hr />';
// Preço total
echo "Total price of items in cart: ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL; // This must print 2900
echo '<hr />';

// 7º PASSO
// Remover item do carrinho
$cart->removeProduct($product1);

//VISUALIZAR ITEMS CARRINHO
// echo "<pre>";
// var_dump($cart->getItems());
// echo "</pre>";

// 8º PASSO
// Verifica-se os TOTAIS do itens do carrinho
// echo '<pre>';
// var_dump($cart);
// echo '</pre>';
// echo '<hr />';
//Nº itens
echo "Number of items in cart: ".PHP_EOL;
echo $cart->getTotalQuantity().PHP_EOL; // This must print 2
echo '<hr />';
// Preço total
echo "Total price of items in cart: ".PHP_EOL;
echo $cart->getTotalSum().PHP_EOL; // This must print 2900