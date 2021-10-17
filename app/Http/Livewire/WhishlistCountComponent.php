<?php

namespace App\Http\Livewire;

use Livewire\Component;

class WhishlistCountComponent extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];
    public function render()
    {
        return view('livewire.whishlist-count-component');
    }
}
