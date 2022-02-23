@extends('layouts.app')

@section('content')
<head>
<title>EleosFund - Fundraising For Startups</title>
    <!-- Primary Meta Tags -->
<meta name="title" content="EleosFund - Fundraising For Startups">
<meta name="description" content="Raise funds to bring that idea to life and build your own startup!">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://eleosfund.com/">
<meta property="og:title" content="EleosFund - Fundraising For Startups">
<meta property="og:description" content="Raise funds to bring that idea to life and build your own startup!">
<meta property="og:image" content="https://eleosfund.com/img/eleosfund.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://eleosfund.com/">
<meta property="twitter:title" content="EleosFund - Fundraising For Startups">
<meta property="twitter:description" content="Raise funds to bring that idea to life and build your own startup!">
<meta property="twitter:image" content="https://eleosfund.com/img/eleosfund.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.css" integrity="sha512-4rPgyv5iG0PZw8E+oRdfN/Gq+yilzt9rQ8Yci2jJ15rAyBmF0HBE4wFjBkoB72cxBeg63uobaj1UcNt/scV93w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<div id="fullpage">
    <center>
     <!-- First section -->
    <div class="section w-[100vw] flex flex-col">
        <h1 class="font-semibold text-2xl xl:text-6xl textMain">Bring Your Idea To Life!</h1>
        <div class="underlineDiv w-4/5 xl:w-2/5 mt-3 mb-3 xl:my-8 rotate-3"></div>
        <span class="textTyped text-green-600 text-xl xl:text-3xl font-medium w-auto"></span>
        <div class="mt-12 flex flex-row justify-evenly">
            <a href="/signup"  class="bg-transparent border-2 border-green-600 text-green-600 py-2 px-4 font-medium">Get Started</a>
            <a href="/signin" class="bg-transparent border-2 border-green-600 text-green-600 py-2 px-4 font-medium">Sign In</a>
        </div>

        <div class="mx-10 mt-24 opacity-70">
            <div class="absolute bottom-[5vh] left-[5vw] bg-green-600 w-12 h-12 rotate-6"></div>
            <div class="absolute right-[2vw] bg-sky-600 w-12 h-12 rotate-6"></div>
            <div class="absolute left-[10vw] top-[15vh] bg-red-600 w-12 h-12 rotate-12"></div>
            <div class="absolute right-[50vw] bottom-[15vh] bg-yellow-600 w-12 h-12 rotate-[30deg] hidden xl:block"></div>
        </div>
    </div>

     <!-- Second section -->
    <div class="section w-[100vw] h-[100vh] flex flex-col xl:flex-row justify-center items-center px-5">
        <div class="w-full xl:w-3/5 flex flex-col xl:flex-row justify-center items-center px-5 xl:text-left">
        <img src="{{ asset('img/idea.svg') }}" alt="Idea"class="xl:w-1/5"/>
        <h1 class="break-words text-2xl xl:text-5xl font-medium xl:mx-10 mt-8 xl:mt-0">You had an <span class="text-green-600">AMAZING</span> idea that could be the next big thing!</h1>
        </div>
    </div>

     <!-- Third section -->
     <div class="section w-[100vw] h-[100vh] flex flex-col xl:flex-row justify-center items-center px-5">
        <div class="w-full xl:w-3/5 flex flex-col xl:flex-row-reverse justify-center items-center px-5 xl:text-right">
            <img src="{{ asset('img/thought.svg') }}" alt="Thought" class="xl:w-1/3"/>
            <h1 class="break-words text-2xl xl:text-5xl font-medium xl:mx-10 mt-8 xl:mt-0">You gave it a <span class="text-green-600">LOT</span> of thought and decided you would make it possible against all odds.</h1>
            </div>
    </div>

     <!-- Fourth section -->
     <div class="section w-[100vw] h-[100vh] flex flex-col xl:flex-row justify-center items-center px-5">
        <div class="w-full xl:w-3/5 flex flex-col xl:flex-row justify-center items-center px-5 xl:text-left">
            <img src="{{ asset('img/plan.svg') }}" alt="Plan" class="xl:w-1/5"/>
            <h1 class="break-words text-2xl xl:text-5xl font-medium xl:mx-10 mt-8 xl:mt-0">You planned it <span class="text-green-600">ALL</span> like the genius you are.</h1>
            </div>
    </div>

       <!-- Fifth section -->
       <div class="section w-[100vw] h-[100vh] flex flex-col xl:flex-row justify-center items-center px-5">

            <h1 class="break-words text-6xl xl:text-7xl font-medium xl:mx-10"><span class="text-green-600">But...</span></h1>

    </div>


      <!-- Sixth section -->
      <div class="section w-[100vw] h-[100vh] flex flex-col xl:flex-row justify-center items-center px-5">
        <div class="w-full xl:w-3/5 flex flex-col xl:flex-row-reverse justify-center items-center px-5 xl:text-right">
            <img src="{{ asset('img/funds.svg') }}" alt="Funds" class="xl:w-1/3"/>
            <h1 class="break-words text-2xl xl:text-5xl font-medium xl:mx-10 mt-8 xl:mt-0">You have <span class="text-red-600">NO</span> funds for bootstrapping :(</h1>
            </div>
    </div>

    <div class="section px-5 h-[100vh]">
        <div class="w-full xl:w-2/5 px-6 py-10 text-left bg-zinc-100 drop-shadow-lg rounded-xl">
            <h1 class="text-2xl xl:text-3xl font-medium">We are here to help you with that</h1>
            <p class="px-5 mt-2">EleosFund connects you with potential investors who are simply interested in being a part of something great like contributing towards this amazing idea you have!</p>

            <h1 class="text-2xl xl:text-3xl font-medium mt-5">What do you owe us?</h1>
            <p class="px-5 mt-2">Well, you do owe us one thing, just kidding. All we want is that you create something truly amazing with the capital 😎</p>
        </div>

        <div class="mt-16 font-light text-xs" id="footer"></div>
        
    </div>

    </center>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.2/fullpage.min.js" integrity="sha512-gSf3NCgs6wWEdztl1e6vUqtRP884ONnCNzCpomdoQ0xXsk06lrxJsR7jX5yM/qAGkPGsps+4bLV5IEjhOZX+gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
var options = {
  strings: ['Dream.', 'Create.', 'Inspire.', 'Empower.', 'Impact Lives!'],
  typeSpeed: 160,
  smartBackspace: true,
  backDelay: 1000,
  loop: true,
  loopCount: Infinity,
  showCursor: false,
  cursorChar: '',
  autoInsertCss: true,

};

var typed = new Typed('.textTyped', options);

new fullpage('#fullpage', {
	//options here
	autoScrolling:true,
	scrollHorizontally: false,
	parallax: true,
	parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},
    slideSelector: '.section',
	scrollingSpeed: 500,
	autoScrolling: true,
    fixedElements: '#Nav',
});

//methods
fullpage_api.setAllowScrolling(true);
</script>

<script src="{{ asset('/js/home.js') }}"></script>

@endsection