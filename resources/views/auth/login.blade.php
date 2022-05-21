{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

      

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

           

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Dont have account?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<x-guest-layout>

    <div class="container">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <br>
        <form class="row col-md-6 col-md-offset-3 margin-right" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Logo -->
            <div class="logo">
                <a href="index"><img  class= " center-block"src="images/home/logo.png" alt="" /></a>
            </div>
            <h2>Login</h2>
            
            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

           

            <div class="form-group " style="padding-left:30%">
                <a class="btn btn-warning "  href="{{ route('register') }}">
                    {{ __('Dont have account?') }}
                </a>

                <x-button class="btn btn-light">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </div>
</x-guest-layout>
