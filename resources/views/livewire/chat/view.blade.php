<div class="chat-view-container">
    <div class="chat-header">
        <h2>Chat with {{ $chat->sender_id == auth()->user()->id ? $chat->reciver->name : $chat->sender->name }}</h2>
    </div>
    <div class="chat-content">
        <div class="chat-messages">
            @foreach ($chat->messages()->orderByDesc('created_at')->get() as $message)
                <div class="message {{ $message->user_id == auth()->user()->id ? 'sent' : 'received' }}">
                    <p>{{ $message->message }}</p>
                    <span class="message-date">{{ $message->created_at->format('g:i A') }}</span>
                </div>
            @endforeach
        </div>
        <livewire:Chat.SendMessage :chat="$chat" />
    </div>
</div>
