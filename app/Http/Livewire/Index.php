<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $user = User::first();
        return view('livewire.index');
    }
}
