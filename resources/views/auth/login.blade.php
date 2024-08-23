<x-layout>
    <style>
        .register-container {
  max-width: 400px;
  margin: 2rem auto;
  padding: 2rem;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.register-container h1 {
  text-align: center;
  color: #333;
  margin-bottom: 1.5rem;
}

.form-group {
  margin-bottom: 1rem;
}

.form-group label {
  display: block;
  margin-bottom: 0.5rem;
  color: #555;
}

.form-group input {
  width: 100%;
  padding: 0.5rem;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 1rem;
}

.error-message {
  color: #e74c3c;
  font-size: 0.875rem;
  margin-top: 0.25rem;
}

.form-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 1.5rem;
}

.form-footer a {
  color: #3498db;
  text-decoration: none;
}

.form-footer a:hover {
  text-decoration: underline;
}

.submit-button {
  background-color: #3498db;
  color: white;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  cursor: pointer;
  font-size: 1rem;
  transition: background-color 0.3s ease;
}
.rm{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.submit-button:hover {
  background-color: #2980b9;
}
    </style>
    <div class="register-container">
      <h1>Login</h1>
      @if (session('true'))
          <p class="error-message">{{session('true')}}</p>
      @endif
      @if (session('false'))
      <p class="error-message">{{session('false')}}</p>
  @endif
      <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email">
          @error('email')
            <p class="error-message">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password">
          @error('password')
            <p class="error-message">{{$message}}</p>
          @enderror
        </div>
        <div class="rm">
            <label for=""><input type="checkbox">Remember me</label>
            <a href="{{route('password.request')}}">Forgot Password?</a>
        </div>
        <div class="form-footer">
          <a href="{{route('view.register')}}">Dont have account?</a>
          <button type="submit" class="submit-button">Login</button>
        </div>
      </form>
    </div>
  </x-layout>
