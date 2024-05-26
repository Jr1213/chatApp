<div class="form-wrapper">
    <div class="form-info">
        <h2>Welcome to Our App</h2>
        <p>Create an account to get started. If you already have an account, you can log in here.</p>
        <a href="{{ route('login') }}" class="cta-button">Log In</a>
    </div>
    <div class="form-container">
        <form wire:submit.prevent='submit' method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" wire:model="name" name="name" value="{{ old('name') }}">
                @error('name')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" wire:model="email" value="{{ old('email') }}">
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" wire:model="password">
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit">Create Account</button>
            </div>
        </form>
    </div>
</div>
