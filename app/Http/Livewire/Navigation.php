<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

use function GuzzleHttp\Promise\all;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::all()->take(5);

        return view('livewire.navigation', compact('categories'));
    }

    
}
