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

.success-message {
    color: #27ae60;
    font-size: 1rem;
    margin-bottom: 20px;
}

    </style>
    <div class="reset-password-container">
        <h1>Reset Password</h1>
        @if (session('true'))
            <p class="success-message">{{ session('true') }}</p>
        @endif
        @if (session('false'))
            <p>{{session('false')}}</p>
        @endif
        <div>
            <p>Enter your email so we can send you a reset link</p>
            <form action="{{route('password.email')}}" method="POST">
                @csrf
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>
                <button type="submit" class="reset-button">Send</button>
            </form>
        </div>
    </div>
</x-layout>
