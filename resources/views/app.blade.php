<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RanDev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    
</head>
<body>
<div id="app">
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <router-link class="navbar-brand" to="/"><img src="/images/my-icon.png"></router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item active">
                    <router-link class="nav-link" to="/"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/portfolio"><i class="fab fa-readme"></i> Portfolio</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/about"><i class="fas fa-portrait"></i> About</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" to="/contact"><i class="fas fa-phone"></i> Contact</router-link>
                </li>
                </ul>
            </div>
        </nav>
        </div>
    </header>
    <router-view></router-view>
    <!-- <router-view></router-view> -->
</div>
<script src="/js/app.js"></script>
</body>
</html>