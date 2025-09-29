<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

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
        <h1 class="text-4xl font-medium">Login</h1>
        <p class="text-slate-500">Hi, Welcome back 👋</p>

        <!-- Social login (optional) -->
        <div class="my-5">
            <a href="" 
               class="w-full text-center py-3 my-3 border flex space-x-2 items-center justify-center 
                      border-slate-200 rounded-lg text-slate-700 hover:border-slate-400 
                      hover:text-slate-900 hover:shadow transition duration-150">
                <img src="https://www.svgrepo.com/show/355037/google.svg" class="w-6 h-6" alt=""> 
                <span>Login with Google</span>
            </a>
        </div>

        <!-- Login form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex flex-col space-y-5">
                
                <!-- Email -->
                <label for="email">
                    <p class="font-medium text-slate-700 pb-2">Email address</p>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" 
                           required autofocus autocomplete="username"
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
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                           class="w-full py-3 border border-slate-200 rounded-lg px-3 
                                  focus:outline-none focus:border-slate-500 hover:shadow" 
                           placeholder="Enter your password">
                    @error('password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </label>

                <!-- Remember me + Forgot -->
                <div class="flex flex-row justify-between">
                    <div>
                        <label for="remember">
                            <input type="checkbox" id="remember" name="remember"
                                   class="w-4 h-4 border-slate-200 focus:bg-indigo-600">
                            Remember me
                        </label>
                    </div>
                    <div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:underline">
                                Forgot Password?
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit"
                        class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 
                               rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" 
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" 
                              d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 
                              01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 
                              0 013 3v1"/>
                    </svg>
                    <span>Login</span>
                </button>

                <!-- Register link -->
                @if (Route::has('register'))
                    <p class="text-center">
                        Not registered yet? 
                        <a href="{{ route('register') }}" 
                           class="text-indigo-600 font-medium inline-flex space-x-1 items-center">
                            <span>Register now</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" 
                                      d="M10 6H6a2 2 0 00-2 2v10a2 2 0 
                                      002 2h10a2 2 0 002-2v-4M14 4h6m0 
                                      0v6m0-6L10 14"/>
                            </svg>
                        </a>
                    </p>
                @endif
            </div>
        </form>
    </div>

</body>
</html>
