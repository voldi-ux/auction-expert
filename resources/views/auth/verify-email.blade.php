<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link
            href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            rel="stylesheet"
        />

        <!-- Styles / Scripts -->
        @vite(['resources/js/app.js'])
</head>
<body class="h-screen myBg flex justify-center items-center ">

    @if(session("message"))
        <x-toast type="success" :message="session('message')"/>
    @endif
    <form id="verify" action="{{route('verification.send')}}" method="post">
        @csrf
    </form>
    <div class="p-4 gradient2 text-center">
        <h1 class="text-white text-2xl">
            A verification email was sent to {{auth()->user()->email}}
        </h1>
        <p class="text-lg text-white">
            If you did not receive the email click the button below

        </p>
        <button type="submit" form="verify" href="{{route('verification.send')}}" class="text-blue-500">Resend Email</button>
    </div>
</body>
</html>