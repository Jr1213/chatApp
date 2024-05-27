<div class="chat-list-container">
    <h2>{{ $user->name }} Chat List</h2>
    <div class="chat-list">
        @foreach ($chats as $chat)
            <a href="{{ route('chat.view', $chat->id) }}" class="chat-item">
                <div class="chat-info">
                    <h3>{{
                        $chat->sender_id == $user->id ? $chat->reciver->name : $chat->sender->name
                        }}</h3>
                    <p>{{ $chat->lastMessage()}}</p>
                </div>
            </a>
        @endforeach
    </div>

</div>
