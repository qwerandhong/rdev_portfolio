<template>
<div class="about-body">
    <div class="container-about" @click="">
        <div class="circle"></div>
            <h1 class="type"></h1>
            <p> I’m a web/android developer which is currently residing in Quezon City, Philippines. 
                I graduated at the Mapua Institute of Technology with BS degree in Computer Science specialized in
                Oracle Database Management. I have a high sense of responsibility on self-development and 
                keen interest in technology, mobile/web applications, and UI/UX. 
                Now, I have 2+ years experienced as a developer and continuously improving my skills by
                building a creative &amp; innovative applications. </p>
            <hr>
            <center>
            <button @click.prevent="linkedIN()" id="linkedIn" class="anchor btn btn-sm"><i class="fab fa-linkedin"></i></button> 
            <button @click.prevent="gitHub()" class="anchor btn btn-sm"><i class="fab fa-github"></i></button> 
            
            </center>
    </div>
</div>
</template>
<script>
export default {
    mounted(){
        new Typed(".type", {
            strings: ["Hello World!", "I'm Rando Dalawis", "Web / Android Developer"],
            smartBackspace: true, // Default value
            typeSpeed: 60,
            backSpeed: 60,
            loop: true,
        });
        $('.typed-cursor').hide();
        let vh = window.innerHeight * 0.01;
        // Then we set the value in the --vh custom property to the root of the document
        document.documentElement.style.setProperty('--vh', `${vh}px`);
        
    },

    methods: {
        linkedIN(){
            window.open('https://www.linkedin.com/in/rando-dalawis-964a23117/', '_blank');
        },

        gitHub(){
            window.open('https://github.com/qwerandhong', '_blank');
        }
    }
}
</script>
<style scoped>
.fab{
    font-size: 25px;
}

.about-body{
    margin: 0 !important;
	padding: 0 !important;
	width: 100% !important;
    font-family: sans-serif !important;
    height: 100vh;
    height: calc(var(--vh, 1vh) * 100);
    overflow: hidden;
    position: absolute;
    background: linear-gradient(90deg, #3f51b5, #00bcd4);
    animation: animate 20s linear infinite;
}

.about-body:before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    border-top: 100vh solid transparent;
    border-left: 100vh solid #fff;
    opacity: 0.1;
}

.about-body:after{
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    border-top: 100vh solid transparent;
    border-right: 100vh solid #fff;
    opacity: 0.1;
}

@keyframes animate{
    0%{
        filter: hue-rotate(0deg);
    }
    50%{
        filter: hue-rotate(360deg);
    }
    100%{
        filter: hue-rotate(0deg);
    }
}

.container-about{
    cursor: pointer;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 650px;
    padding: 30px;
    background: #fff;
    box-sizing: border-box;
    border-radius: 10px;
    box-shadow: 0 15px 50px rgba(0,0,0,0.2);
}

.container-about:before,
.container-about:after{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    background: #fff;
    transition: 0.5s;
    z-index: -1;
}

.container-about:hover:before{
    transform: rotate(20deg);
}
.container-about:hover:after{
    transform: rotate(10deg);
}

.container-about h1{
    width: 100%;
    text-align: center;
    margin: 0 0 5px 0;
    font-family: sans-serif;
    text-shadow: 0 2px 5px rgba(0,0,0,0.5);
}

.circle{
    width: 200px;
    height: 200px;
    background: url('/images/me.png') center;
    border-radius: 50%;
    float: left;
    shape-outside: circle();
    margin: 70px 30px 30px 0;
}

@media (max-width: 768px){
    .about-body{
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        font-family: sans-serif !important;
        height: calc(var(--vh, 1vh) * 120);
        overflow: hidden;
        position: absolute;
        background: linear-gradient(90deg, #3f51b5, #00bcd4);
        animation: animate 20s linear infinite;
    }


    .container-about{
        cursor: pointer;
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 520px;
        background: #fff;
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.2);
        margin-bottom: 20px;
    }

    .container-about h1{
        width: 100%;
        text-align: center;
        margin: 0;
        font-family: sans-serif;
        font-size: 18px;
        text-shadow: 0 2px 5px rgba(0,0,0,0.5);
    }

    .circle{
        width: 100px;
        height: 100px;
        background: url('/images/me2.png') center;
        border-radius: 50%;
        float: left;
        shape-outside: circle();
        margin: 30px 10px 10px 0;
    }
}

@media (max-width: 480px){
    .about-body{
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        font-family: sans-serif !important;
        height: calc(var(--vh, 1vh) * 100);
        overflow: hidden;
        position: absolute;
        background: linear-gradient(90deg, #3f51b5, #00bcd4);
        animation: animate 20s linear infinite;
    }

    .container-about{
        cursor: pointer;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        background: #fff;
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.2);
    }

    .container-about h1{
        width: 100%;
        text-align: center;
        margin: 0;
        font-family: sans-serif;
        font-size: 18px;
        text-shadow: 0 2px 5px rgba(0,0,0,0.5);
    }

    .circle{
        width: 100px;
        height: 100px;
        background: url('/images/me2.png') center;
        border-radius: 50%;
        float: left;
        shape-outside: circle();
        margin: 30px 10px 10px 0;
    }

}
</style>


