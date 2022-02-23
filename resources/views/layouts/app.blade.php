<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FFFFFF">

    <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
    <link rel="icon" href="{{ asset('/img/eleosfund.svg')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="antialiased">

<div class="fixed top-0 bg-white xl:bg-transparent w-screen" id="Nav">
    <div class="circleContainer hidden xl:block">
        <div class="circleBackground w-[37rem] h-[37rem]"></div>
    </div>

    <nav class="mx-5 flex flex-row justify-between items-center my-2 xl:my-10 xl:mx-28">

        <div class="flex flex-row w-auto items-center h-[6vh] xl:h-[8vh] navLogo">
        <img src="{{ asset('/img/eleosfund.svg') }}" class="h-2/3" alt="logo" />
        <span class="font-medium text-xl xl:text-2xl mx-2">EleosFund</span>
        </div>

        <div>
        <button class="rounded-[50%] text-black p-3 xl:hidden" id="navBtn"><i class="fa-solid fa-bars text-2xl"></i></button>

        <div id="NavLinks" class="text-white font-medium hidden xl:block">
            <a  href="{{ route('about') }}" class="mx-3 hover:text-green-200 hover:underline hover:underline-offset-[8px]">About Us</a>
            <a  href="{{ route('contact') }}" class="mx-3 hover:text-green-200 hover:underline hover:underline-offset-[8px]">Contact Us</a>
            <a  href="{{ route('faqs') }}" class="mx-3 hover:text-green-200 hover:underline hover:underline-offset-[8px]">FAQs</a>
            <a  href="https://www.twitter.com/eleosfund" class="mx-3 hover:text-green-200 hover:underline hover:underline-offset-[8px]" target="_blank" rel="noreferrer"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
        
    </nav>

<div class="hidden xl:hidden" id="navMenuFull">
<div class="w-[100vw] h-[100vh] bg-black opacity-30 absolute z-[-1] bottom-0 top-0 left-0 right-0" id="vignette"></div>
<div class='absolute flex flex-col bg-white drop-shadow-lg w-1/2 h-[100vh] top-0 bottom-0 left-0 px-6 py-4 pt-16 opacity-100 font-light text-xl' id="navMenu">
<a  href="{{ route('about')}}" class="pb-5 mb-5 border-b-2 border-zinc-300">About Us</a>
<a  href="{{ route('about')}}" class="pb-5 mb-5 border-b-2 border-zinc-300">Contact Us</a>
<a  href="{{ route('about')}}" class="pb-5 mb-5 border-b-2 border-zinc-300">FAQs</a>
<a  href="https://www.twitter.com/eleosfund" class="pb-5 mb-5 border-b-2 border-zinc-300" target="_blank" rel="noreferrer"><i class="fa-brands fa-twitter"></i> Twitter</a>
</div>

</div>
</div>


    

    <section class="">
    @yield('content')
    </section>

    <script type="text/javascript">
    const navBtn = document.getElementById('navBtn')
    const nav = document.getElementById('navMenuFull')
    const navMenu = document.getElementById('navMenu')
    const vignette = document.getElementById('vignette')

    navBtn.addEventListener('click', () => {
        if(nav.classList.contains('hidden')){
            nav.classList.remove('hidden')
            navMenu.classList.remove('navSlideOut')
            navMenu.classList.add('navSlideIn')
            navBtn.innerHTML = '<i class="fa-solid fa-xmark text-2xl"></i>'
        } else {
            navMenu.classList.remove('navSlideIn')
            navMenu.classList.add('navSlideOut')
            navBtn.innerHTML = '<i class="fa-solid fa-bars text-2xl">'
                setTimeout(() => {
                    nav.classList.add('hidden')
                }, 400);
        }
        
    })
    vignette.addEventListener('click', () => {
        navMenu.classList.remove('navSlideIn')
        navMenu.classList.add('navSlideOut')
        navBtn.innerHTML = '<i class="fa-solid fa-bars text-2xl">'
            setTimeout(() => {
                nav.classList.add('hidden')
            }, 350);
    })
    </script>

</body>
</html>