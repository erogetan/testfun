<?php

//always use whatever you are testing

use App\Product;


class ProductTest extends PHPUnit_Framework_TestCase 

{

	protected $product;



	public function setUp()
	{

		$this->product = new Product("Donuts",3);

	}

	//always start with test

	function test_a_product_has_name()
	{


		$this->assertEquals('Donuts', $this->product->name());

	}

	function test_a_product_has_price()
	{

		$this->assertEquals(3, $this->product->price());

	}




}