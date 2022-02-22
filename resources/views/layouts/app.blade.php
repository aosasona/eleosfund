<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FFFFFF">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <link rel="icon" href="{{ asset('/img/eleosfund-white.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="antialiased">
    <div class="circleContainer">
        <div class="circleBackground"></div>
    </div>

    <nav class="mx-5 flex flex-row justify-between items-center my-1 xl:my-10 xl:mx-32">

        <div class="flex flex-row w-1/12 items-center h-[10vh] navLogo">
        <img src="{{ asset('/img/eleosfund.svg') }}" class="h-full" alt="logo" />
        <span class="font-medium text-lg mx-2">EleosFund</span>
        </div>

        <div id="NavLinks" class="text-white font-medium">
            <a  href="#" class="mx-3 hover:text-green-200 hover:underline hover:underline-offset-[8px]">About Us</a>
            <a  href="#" class="mx-3 hover:text-green-200 hover:underline hover:underline-offset-[8px]">Contact Us</a>
            <a  href="#" class="mx-3 hover:text-green-200 hover:underline hover:underline-offset-[8px]">FAQs</a>
        </div>
        
    </nav>

    

    <section>
    @yield('content')
    </section>

</body>
</html>