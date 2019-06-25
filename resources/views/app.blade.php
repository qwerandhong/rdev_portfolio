<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RanDev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- important -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    
</head>
<body>
<div id="app">
<!-- <vue-particles color="#dedede"></vue-particles> -->
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <router-link class="navbar-brand" to="/"><img src="/images/my-icon.png"></router-link>
            <button id="navbarToggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                <i class="fas fa-bars"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto">
              
                <router-link tag="li" class="nav-link nav-item" to="/"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></router-link>
        
                <router-link tag="li" class="nav-link nav-item" to="/portfolio"><i class="fab fa-readme"></i> Portfolio</router-link>
                
                <router-link tag="li" class="nav-link nav-item" to="/about"><i class="fas fa-portrait"></i> About</router-link>

                <router-link tag="li" class="nav-link nav-item" to="/contact"><i class="fas fa-phone"></i> Contact</router-link>
                </ul>
            </div>
        </nav>
        </div>
    </header>
    
    <router-view></router-view>
</div>
<script src="/js/app.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.nav-link').on('click', function(){
        $('.navbar-collapse').collapse('hide');
    });
});
</script>
</body>
</html>