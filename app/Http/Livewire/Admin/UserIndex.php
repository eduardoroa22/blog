<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;

    public $search;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {

        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                        ->orwhere('email', 'LIKE', '%' . $this->search . '%')
                        ->paginate();//el metodo paginate pagina de 15 en 15


                    
        
        
        
        return view('livewire.admin.user-index', compact('users'));
    }
}
