<x-layout>
    <style>
        .email-verification {
    text-align: center;
    padding: 20px;
}

.email-verification h1 {
    font-size: 2rem;
    color: #34495e;
    margin-bottom: 20px;
}

.email-verification p {
    font-size: 1rem;
    color: #7f8c8d;
    margin-bottom: 30px;
}

.resend-button {
    background-color: #3498db;
    color: #ffffff;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.resend-button:hover {
    background-color: #2980b9;
}

    </style>
    <div class="email-verification">
        <h1>Email Verification</h1>
        <p>We have sent you an email verification link.</p>
        @if (session('true'))
            <p>{{session('true')}}</p>
        @endif
        <form action="{{ route('verification.send') }}" method="POST">
            @csrf
            <p>Didn't get the email?</p>
            <button type="submit" class="resend-button">Send again!</button>
        </form>
    </div>
</x-layout>
