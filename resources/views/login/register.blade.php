<x-login.layout>
    <div class="login-container">
        <div class="wrapper-login mt-3">
            <div class="container container-login animated fadeIn" style="display: block;">
                <h3 class="text-center">Register</h3>
                <form action="{{ route('register.user') }}" method="post">
                    @csrf
                    <div class="login-form">
                        <div class="form-group form-floating-label">
                            <label for="name" class="placeholder">Full Name</label>
                            <input id="name" name="name" value="{{ old('name') ?? '' }}" type="text"
                                class="form-control input-border-bottom" required="">
                            @error('name')
                                <p id="task-statuses-error" class="form-text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
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
                            <input id="password" value="{{ old('password') ?? '' }}" name="password" type="password"
                                class="form-control input-border-bottom" required="">
                            @error('password')
                                <p id="task-statuses-error" class="form-text text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group form-floating-label">
                            <label for="password-confirmation" class="placeholder">Confirm Password</label>
                            <input id="password-confirmation" value="{{ old('password_confirmation') ?? '' }}"
                                name="password_confirmation" type="password" class="form-control input-border-bottom"
                                required="">
                        </div>

                        <div class="form-group form-floating-label">
                            <div class="form-action mb-3">
                                <button type="submit" class="btn btn-primary btn-block btn-login">Create
                                    Account</button>
                            </div>
                            <div class="login-account">
                                <span class="msg">Already have an account?</span>
                                <a href="{{ route('login') }}" id="show-signup" class="link">Sign In</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-login.layout>
