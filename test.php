<?php
if(!isset($_COOKIE['test'])) {
    setcookie('test', json_encode(array()), time() + (86400 * 30), "/");
} else {
    $product_array =  json_decode($_COOKIE['test']);
}
if(!in_array($_GET['id'],$product_array)){
	$product_array[] = $_GET['id'];	
	setcookie('test', json_encode($product_array), time() + (86400 * 30), "/");
}
// var_dump($product_array);

// change code 

if(!isset($_COOKIE['product_id_str_r'])) 
     setcookie('product_id_str_r', json_encode(array()), time() + (86400 * 30), "/");
else 
     $product_id_array = json_decode($_COOKIE['product_id_str_r']) ;
if(!in_array($_GET['id'],$product_id_array))
     $product_id_array[] = $_GET['id'];
setcookie('product_id_str_r', json_encode($product_id_array), time() + (86400 * 30), "/");
var_dump($product_id_array);

