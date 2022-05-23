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

            <div>Input your email to take back your password</div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

           
          
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<x-guest-layout>

    <div class="container">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        
        <br>
        <form class="row col-md-12 col-md-offset-3 margin-right" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Logo -->
         
            <h2>Input your email to take back your password</h2>
            
            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

           

           

            
        </form>
    </div>
</x-guest-layout>
