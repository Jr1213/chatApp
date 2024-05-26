<?php

namespace App\Livewire\Dashboard;

use App\Models\Chat;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $user = auth()->user();
        $chats = Chat::where('sender_id',$user->id)
            ->orWhere('reciver_id',$user->id)
            ->get();
        return view('livewire.dashboard.home',compact('chats','user'));
    }
}
