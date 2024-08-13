<div class="login-register-area ptb-130 hm-3-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <!--Login-->
                                    <form action="{{ route('login') }}" method="POST">@csrf
                                        <input id="email" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        <input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input id="remember_me" type="checkbox"name="remember">
                                                <label>{{ __('Remember me') }}</label>
                                                @if (Route::has('password.request'))
                                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                                        {{ __('Forgot your password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                            <button type="submit" class="btn-style cr-btn"><span>{{ __('Log in') }}</span></button>
                                        </div>
                                    </form>
                                    <!--Login End-->
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="{{ route('register') }}" method="POST">@csrf

                                        <input id="name" placeholder="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            <input id="email" placeholder="Email" type="email" name="email" :value="old('email')" required autocomplete="username">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        <input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                        <input id="password_confirmation" placeholder="Confirm Password" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password">
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            
                                        <div class="button-box">
                                            <button type="submit" class="btn-style cr-btn"><span>{{ __('Register') }}</span></button>
                                        <div class="button-box">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>