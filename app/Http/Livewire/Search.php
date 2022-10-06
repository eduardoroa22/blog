<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public $open = false;

    public function updatedSearch($value)
    {
        if ($value) {
           $this->open = true;
        }else{
            $this->open = false;
        }
        
    }
    
    public function render()
    {

        if ($this->search) {
            $posts = Post::where('name', 'LIKE', '%' . $this->search . '%')
                            ->where('status', 2)
                            ->take(8)
                            ->get();
        } else {
            $posts = [];
        }
        

        
        return view('livewire.search', compact('posts'));
    }
}
