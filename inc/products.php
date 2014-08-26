<?php

	function get_list_view_html($product_id, $product){

			$output = "";


			$output = $output . "<li>";
			$output = $output .  '<a href=' . BASE_URL . 'shirts/'. $product_id . '>';
			$output = $output .  '<img src="' . BASE_URL . $product["img"] . '" alt="' . $product["name"] . '">';
			$output = $output .  "<p>View Details</p>";
			$output = $output .  "</a>";
			$output = $output .  "</li>";

			return $output;

	};

$products = array();

$products [101] = array(
	"name" => "Logo Shirt, Red", 
	"price" => 18, 
	"img" => "img/shirts/shirt-101.jpg"
	);
$products [102] = array(
	"name" => "Mike the Frog Shirt, Black", 
	"price" => 20,
	"img" => "img/shirts/shirt-102.jpg"
	);
$products [103] = array(
	"name" => "Mike the Frog Shirt, Blue",
	"price" => 20,
	"img" => "img/shirts/shirt-103.jpg"
	);
$products [104] = array(
	"name" => "Logo Shirt, Green",
	"price" => 18,
	"img" => "img/shirts/shirt-104.jpg"
	);
$products [105] = array(
	"name" => "Mike the Frog Shirt, Yellow",
	"price" => 25,
	"img" => "img/shirts/shirt-105.jpg"
	);
$products [106] = array(
	"name" => "Logo Shirt, Gray",
	"price" => 18,
	"img" => "img/shirts/shirt-106.jpg"
	);
$products [107] = array(
	"name" => "Logo Shirt, Turquoise",
	"price" => 18,
	"img" => "img/shirts/shirt-107.jpg"
	);
$products [108] = array(
	"name" => "Logo Shirt, Orange",
	"price" => 18,
	"img" => "img/shirts/shirt-108.jpg"
	);
?>