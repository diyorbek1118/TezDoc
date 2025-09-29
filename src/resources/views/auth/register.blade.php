<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <style>
        :root { font-family: 'Inter', sans-serif; }
        @supports (font-variation-settings: normal) {
            :root { font-family: 'Inter var', sans-serif; }
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-600">

    <div class="max-w-lg mx-auto mt-20 bg-white p-8 rounded-xl shadow shadow-slate-300">
        <h1 class="text-4xl font-medium">Register</h1>
        <p class="text-slate-500">Create a new account ✨</p>

        <!-- Register form -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="flex flex-col space-y-5">

                <!-- Name -->
                <label for="name">
                    <p class="font-medium text-slate-700 pb-2">Full Name</p>
                    <input id="name" name="name" type="text" value="{{ old('name') }}" 
                           required autofocus autocomplete="name"
                           class="w-full py-3 border border-slate-200 rounded-lg px-3 
                                  focus:outline-none focus:border-slate-500 hover:shadow" 
                           placeholder="Enter your name">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Email -->
                <label for="email">
                    <p class="font-medium text-slate-700 pb-2">Email address</p>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" 
                           required autocomplete="username"
                           class="w-full py-3 border border-slate-200 rounded-lg px-3 
                                  focus:outline-none focus:border-slate-500 hover:shadow" 
                           placeholder="Enter email address">
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Password -->
                <label for="password">
                    <p class="font-medium text-slate-700 pb-2">Password</p>
                    <input id="password" name="password" type="password" required autocomplete="new-password"
                           class="w-full py-3 border border-slate-200 rounded-lg px-3 
                                  focus:outline-none focus:border-slate-500 hover:shadow" 
                           placeholder="Enter your password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Confirm Password -->
                <label for="password_confirmation">
                    <p class="font-medium text-slate-700 pb-2">Confirm Password</p>
                    <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                           class="w-full py-3 border border-slate-200 rounded-lg px-3 
                                  focus:outline-none focus:border-slate-500 hover:shadow" 
                           placeholder="Confirm your password">
                </label>

                <!-- Submit -->
                <button type="submit"
                        class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 
                               rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                              d="M12 4v16m8-8H4"/>
                    </svg>
                    <span>Register</span>
                </button>

                <!-- Login link -->
                @if (Route::has('login'))
                    <p class="text-center">
                        Already have an account? 
                        <a href="{{ route('login') }}" 
                           class="text-indigo-600 font-medium inline-flex space-x-1 items-center">
                            <span>Login</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" 
                                      d="M11 16l-4-4m0 0l4-4m-4 4h14"/>
                            </svg>
                        </a>
                    </p>
                @endif
            </div>
        </form>
    </div>

</body>
</html>
