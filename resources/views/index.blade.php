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
<meta property="og:title" content="EleosFund - ">
<meta property="og:description" content="Raise funds to bring that idea to life and build your own startup!">
<meta property="og:image" content="https://eleosfund.com/img/eleosfund.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://eleosfund.com/">
<meta property="twitter:title" content="EleosFund - Fundraising For Startups">
<meta property="twitter:description" content="Raise funds to bring that idea to life and build your own startup!">
<meta property="twitter:image" content="https://eleosfund.com/img/eleosfund.png">
<link rel="stylesheet" type="text/css" href="fullpage.css" />
</head>

<div class="fullpage">
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
</div>


<script type="text/javascript" src="fullpage.js"></script>
<script src="{{ asset('/js/home.js') }}"></script>
@endsection