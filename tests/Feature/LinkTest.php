<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinkTest extends TestCase
{
    public function testWeSeeAListOfLinks()
    {
        factory(App\Link::class)->create([
            'title' => 'dotdev.co',
        ]);
        $this->visit('/')
             ->see('dotdev.co');
    }
}

