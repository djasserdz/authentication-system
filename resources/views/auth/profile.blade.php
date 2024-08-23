<x-layout>
    <style>
        body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f6fa;
    margin: 0;
    padding: 0;
    color: #2c3e50;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
}

h1 {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 40px;
}

h2 {
    font-size: 1.75rem;
    margin-bottom: 10px;
    color: #34495e;
}

p {
    font-size: 1rem;
    color: #7f8c8d;
    margin-bottom: 20px;
}

form {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
}

label {
    font-weight: 600;
    display: block;
    margin-bottom: 8px;
    color: #34495e;
}

input[type="text"], input[type="password"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-bottom: 20px;
    font-size: 1rem;
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);
}

input:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
}

button {
    background-color: #3498db;
    color: #ffffff;
    padding: 12px 20px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #2980b9;
}

.error-message {
    color: #e74c3c;
    margin-top: -15px;
    margin-bottom: 20px;
}

.delete-button {
    background-color: #e74c3c;
}

.delete-button:hover {
    background-color: #c0392b;
}


    </style>
    <div class="container">
      <h1>Profile</h1>
      @if (session('true'))
          <p style="color: green">{{session('true')}}</p>
      @endif
      <div>
        <form action="{{route('update')}}" method="POST">
            <h2>Profile Information</h2>
            <p>Update your account's profile information and email address</p>
          @csrf
          <div>
            <label for="username">Username</label>
            <input type="text" name="username">
            @error('username')
                <p class="error-message">{{$message}}</p>
            @enderror
          </div>
          <div>
            <label for="email">Email</label>
            <input type="text" name="email">
            @error('email')
                <p class="error-message">{{$message}}</p>
            @enderror
          </div>
          <button type="submit">Save</button>
        </form>
      </div>

      <div>
        <form action="{{route('update_password')}}" method="POST">
            <h2>Update Password</h2>
            <p>Ensure your account is using a long, random password to stay secure.</p>
            @if (session('false'))
                <p class="error-message">{{session('false')}}</p>
            @endif
          @csrf
          <div>
            <label for="current_password">Current Password</label>
            <input type="password" name="current_password">
            @error('current_password')
                <p class="error-message">{{$message}}</p>
            @enderror
          </div>
          <div>
            <label for="password">New Password</label>
            <input type="password" name="password">
            @error('password')
                <p class="error-message">{{$message}}</p>
            @enderror
          </div>
          <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation">
            @error('password_confirmation')
                <p class="error-message">{{$message}}</p>
            @enderror
          </div>
          <button type="submit">Save</button>
        </form>
      </div>

      <div>
        <form action="{{route('destroy')}}" method="POST">
            <h2>Delete Account</h2>
            <p>Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you will retain.</p>
          @csrf
          <button type="submit" class="delete-button">Delete</button>
        </form>
      </div>
    </div>
  </x-layout>
