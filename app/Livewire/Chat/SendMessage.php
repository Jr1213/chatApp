<?php

namespace App\Livewire\Chat;

use App\Models\Chat;
use Livewire\Component;

class SendMessage extends Component
{
    public Chat $chat;
    public string $message = '';
    public function render()
    {
        return view('livewire.chat.send-message');
    }

    public function sendMessage()
    {
        $message = $this->chat->messages()->create([
            'message' => $this->message,
            'user_id' => auth()->user()->id
        ]);
        $this->reset('message');
    }
}
