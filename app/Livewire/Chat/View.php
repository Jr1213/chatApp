<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use Livewire\Component;

class View extends Component
{
    public Chat $chat;

    public function mount(Chat $chat)
    {
        
    }
    public function render()
    {
        $chat = $this->chat;
        return view('livewire.chat.view',compact('chat'));
    }
}
