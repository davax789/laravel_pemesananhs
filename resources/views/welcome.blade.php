<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
        }
        .title {
            font-size: 2rem;
            margin-bottom: 2rem; /* Menambahkan jarak di bawah teks */
        }
        .button {
            padding: 1rem 2rem;
            font-size: 1.25rem;
            font-weight: 600;
            border-radius: 0.375rem;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0.5rem;
        }
        .button i {
            margin-right: 0.5rem;
        }
        .button-login {
            background-color: #FF2D20;
            color: white;
            border: 1px solid transparent;
        }
        .button-register {
            background-color: transparent;
            color: #FF2D20;
            border: 1px solid #FF2D20;
        }
        .button-login:hover, .button-register:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">LOGINO SEK UTOWO DAFTAR</div>

        @if (Route::has('login'))
            <nav class="flex flex-col items-center mt-4">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="button button-login ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="button button-login ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        <i class="fas fa-sign-in-alt"></i> Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="button button-register ring-1 ring-transparent transition focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            <i class="fas fa-user-plus"></i> Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>
</body>
</html>
