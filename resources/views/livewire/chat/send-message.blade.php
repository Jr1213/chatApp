<form wire:submit.prevent="sendMessage" class="chat-input">
    <input type="text" wire:model="message" placeholder="Type your message here...">
    <button type="submit">Send</button>
</form>