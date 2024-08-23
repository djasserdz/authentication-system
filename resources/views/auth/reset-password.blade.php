<x-layout>
    <style>
        .reset-password-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

.reset-password-container h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #34495e;
}

.reset-password-container p {
    margin-bottom: 20px;
    font-size: 1rem;
    color: #7f8c8d;
}

.reset-password-container label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #34495e;
}

.reset-password-container input {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1rem;
}

.reset-password-container .reset-button {
    background-color: #3498db;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1rem;
    width: 100%;
}

.reset-password-container .reset-button:hover {
    background-color: #2980b9;
}

.error-message {
    color: #e74c3c;
    font-size: 0.875rem;
    margin-top: 5px;
}

    </style>
    <div class="reset-password-container">
        <h1>Reset Password</h1>
        <p>Enter a new password below.</p>

        <form action="{{ route('password.update') }}" method="POST">
            @csrf

            <!-- Token Field (hidden) -->
            <input type="hidden" name="token" value="{{ $token }}">

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password">New Password</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
                @error('password_confirmation')
                    <p class="error-message">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="reset-button">Reset Password</button>
        </form>
    </div>
</x-layout>
