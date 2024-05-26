<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public $email;
    public $password;
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function submit()
    {
        $this->validate();
        if (auth()->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            return redirect()->route('home');
        }
    }
}
