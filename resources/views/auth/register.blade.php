<x-guest-layout>
    <div class="container">

        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf
            <p class="title">Register </p>
            <p class="message">Signup now and get full access to our app. </p>
            <label>
                <input class="input" type="text" placeholder="" id="name" required="" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                <span>Firstname</span>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </label>     
            <label>
                <input class="input" type="email" placeholder="" required="" id="email" name="email" :value="old('email')" required autocomplete="username" >
                <span>Email</span>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </label> 
                
            <label>
                <input class="input" type="password" placeholder="" id="password" class="block mt-1 w-full" name="password" required autocomplete="new-password" >
                <span>Password</span>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
    
            </label>
            <label>
                <input class="input" type="password" placeholder="" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                <span>Confirm password</span>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    
            </label>
            <button class="submit">Submit</button>
            <p class="signin">Already have an acount ? <a href="{{ route('login') }}">Login</a> </p>
            
    </div>


        <!-- Name -->
        {{-- <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div> --}}

        <style>
            /* From Uiverse.io by Yaya12085 */ 
        .container{
            width: 400px;
        }
        .form {
        display: flex;
        flex-direction: column;
        gap: 10px;
        max-width: 480px;
        background-color: #bec7ca;
        padding: 20px;
        border-radius: 20px;
        position: relative;
        }

        .title {
        font-size: 28px;
        color: royalblue;
        font-weight: 600;
        letter-spacing: -1px;
        position: relative;
        display: flex;
        align-items: center;
        padding-left: 30px;
        }

        .title::before,.title::after {
        position: absolute;
        content: "";
        height: 16px;
        width: 16px;
        border-radius: 50%;
        left: 0px;
        background-color: royalblue;
        }

        .title::before {
        width: 18px;
        height: 18px;
        background-color: royalblue;
        }

        .title::after {
        width: 18px;
        height: 18px;
        animation: pulse 1s linear infinite;
        }

        .message, .signin {
        color: rgba(88, 87, 87, 0.822);
        font-size: 14px;
        }

        .signin {
        text-align: center;
        }

        .signin a {
        color: royalblue;
        }

        .signin a:hover {
        text-decoration: underline royalblue;
        }

        .flex {
        display: flex;
        width: 100%;
        gap: 6px;
        }

        .form label {
        position: relative;
        }

        .form label .input {
        width: 90%;
        padding: 10px 10px 20px 10px;
        outline: 0;
        border: 1px solid rgba(105, 105, 105, 0.397);
        border-radius: 10px;
        }

        .form label .input + span {
        position: absolute;
        left: 10px;
        top: 15px;
        color: grey;
        font-size: 0.9em;
        cursor: text;
        transition: 0.3s ease;
        }

        .form label .input:placeholder-shown + span {
        top: 15px;
        font-size: 0.9em;
        }

        .form label .input:focus + span,.form label .input:valid + span {
        top: 30px;
        font-size: 0.7em;
        font-weight: 600;
        }

        .form label .input:valid + span {
        color: green;
        }

        .submit {
        border: none;
        outline: none;
        background-color: royalblue;
        padding: 10px;
        border-radius: 10px;
        color: #fff;
        font-size: 16px;
        transform: .3s ease;
        }

        .submit:hover {
        background-color: rgb(56, 90, 194);
        }

        @keyframes pulse {
        from {
            transform: scale(0.9);
            opacity: 1;
        }

        to {
            transform: scale(1.8);
            opacity: 0;
        }
        }
        </style>
       
          
                
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
