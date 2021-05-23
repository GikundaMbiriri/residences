<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Component;

class Registration extends Component
{
    public $name1;
    public $email1;
    public $phone1;
    public $password1;
    public function reg()
    {
        $user = new User();
        $user->name = $this->name1;

        $user->email = $this->email1;
        $user->tel = $this->phone1;
        $user->password = Hash::make($this->password1);

        $user->save();
        session()->flash('message', 'user created successfully');
    }
    public function render()
    {
        return view('livewire.registration')->layout('layouts.base');
    }
}
