<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;
    public function plus()
    {
        $this->count ++;
    }
    public function remove()
    {
        $this->count --;
    }
    public function render()
    {
        return view('livewire.counter');
    }
   
}

