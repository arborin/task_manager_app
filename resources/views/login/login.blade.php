<x-login.layout>
    <div class="login-container">
        <div class="wrapper-login mt-3">
            <div class="container container-login animated fadeIn" style="display: block;">
                <h3 class="text-center">Log In</h3>
                <form action="{{ route('auth') }}" method="post">
                    @csrf
                    <div class="login-form">
                        <div class="form-group form-floating-label">
                            <label for="email" class="placeholder">Email</label>
                            <input id="email" name="email" value="{{ old('email') ?? '' }}" type="text"
                                class="form-control input-border-bottom" required="">
                            @error('email')
                                <p id="task-statuses-error" class="form-text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group form-floating-label">
                            <label for="password" class="placeholder">Password</label>
                            <input id="password" name="password" type="password"
                                class="form-control input-border-bottom" required="">
                            @error('password')
                                <p id="task-statuses-error" class="form-text text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group form-floating-label mt-3">
                            <div class="form-action mb-3">
                                <button type="submit" href="#" class="btn btn-primary btn-block btn-login">
                                    Sign In
                                </button>
                            </div>
                            <div class="login-account">
                                <span class="msg">Don't have an account yet?</span>
                                <a href="{{ route('register.form') }}" id="show-signup" class="link">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-login.layout>
