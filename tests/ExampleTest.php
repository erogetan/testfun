<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // $this->visit('/')
        //      ->see('Laravel 4');



         //1.  Visit the home page
        $this->visit('/');       
        //2. press a "click me" link
        $this->click('Click Me');
        //3.  See "wish the concert Justin Beiber last night"
        $this->see("Wish the concert was bieber");
        //4.  Assert that the current url is /bieber
        $this->seePageIs('/bieber');




    }









}
