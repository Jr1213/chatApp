<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    protected $rules = [
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'name' => 'required',
    ];
    public $email;
    public $password;
    public $name;

    public function render()
    {
        return view('livewire.auth.create');
    }

    public function submit()
    {
        $data = $this->validate();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        auth()->attempt([
            'email' => $data['email'],
            'password' => $this->password,
        ]);
        return redirect()->route('home');
    }
}
