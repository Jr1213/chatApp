<div class="form-wrapper">
    <div class="form-info">
        <h2>Welcome Back</h2>
        <p>Log in to your account. If you don't have an account, you can create one here.</p>
        <a href="{{ route('signup') }}" class="cta-button">Create Account</a>
    </div>
    <div class="form-container">
        <form wire:submit.prevent='submit' method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" wire:model='email' value="{{ old('email') }}" required>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" wire:model='password' id="password" name="password" required>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit">Log In</button>
            </div>
        </form>
    </div>
</div>
