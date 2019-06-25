<template>
<div class="outbound-container">
    <div class="split left">
        <ul>
            <li>
                <input type="radio" checked name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/JobFair/JobFair.png">
                    <div class="content">
                        <h2>Job Fair Registration</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/WebPortal/portal.png">
                    <div class="content">
                        <h2>Web Portal</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio"  name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/WebPortal/login.png">
                    <div class="content">
                        <h2>Web Portal - Login</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/E-Canteen/web-cashier.png">
                    <div class="content">
                        <h2>E-Canteen - POS</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/E-Canteen/menu.png">
                    <div class="content">
                        <h2>Menu Of the Day</h2>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="split right">
        <div class="content-details">
            <h2> Mini Projects</h2>
            <h5> (1) Job Fair Registration System: </h5> 
            <p> A simple standalone web page that save the information of the applicants. </p>

            <h5> (2) Web Portal: </h5> 
            <p> A centralized portal for Inbound Online Scheduler sites/applications. It also has an announcement features 
                to notify all users for the all the news and updates of the system.</p>

            <h5> (3) E-Canteen (POS System) </h5>
            <p> A simple web-based POS system that can also monitor and track the inventory of the canteen. 
                It also has "Menu of the Day" page that shows the food to be serve in breakfast, lunch and snacks.</p>
            
            <h5> Technology / Programming Used: </h5>
            <ul>
                <li> Bootstrap 4  </li>
                <li> jQuery, AJAX, JS Confirm, Datatable</li>
                <li> HTML, CSS</li>
                <li> PHP </li>
                <li> Apache, MySQL </li>
            </ul>
        </div>
    </div>
</div>
</template>
<script>
export default {
    mounted(){
    
    }
}
</script>
<style scoped>
.outbound-container{
    margin: 0;
    padding: 0;
    height: 100vh;
}

.content-details{
    justify-content: center;
    margin-top: 8%;
    margin-left: 5%;
    font-family: 'Poppins', sans-serif;
}

.content-details h5, h2{
    font-weight: 700;
}


.left ul{
    margin: 0 0 40px;
    padding: 0;
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: flex-end;
}

.left ul li{
    list-style: none;
    margin: 0 0 40px;
}

.left ul li .slide{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: transform 0.5s;
    transform: rotateY(90deg);
    transform-origin: left;
}

.left ul li input[type="radio"]{
    position: relative;
    z-index: 2;
    height: 20px;
    width: 20px;
}

.left ul li input[type="radio"]:checked ~ .slide {
    transition: transform 0.5s;
    transform: rotateY(0deg);
    transform-origin: left;
}

.left ul li .slide .content{
    position: absolute;
    bottom: 20%;
    left: 10%;
    translate: transform(-50%, -50%);
    background: rgba(0, 0,0, 0.9);
    padding: 5px 5px;
}

.left ul li .slide .content h2{
    margin: 0;
    padding: 0;
    font-size: 30px;   
    color: #fff;
}

@media (max-width: 768px){
    .content-details{
        justify-content: center;
        margin-top: 30%;
        margin-left: 10%;
        font-family: 'Poppins', sans-serif;
    }

    .content-details h2{
        font-weight: 700;
        font-size: 20px;
    }

    .content-details h5{
        font-weight: 700;
        font-size: 15px;
    }

    .content-details p{
        font-size: 12px;
    }

    .left ul li .slide .content{
        position: absolute;
        bottom: 20%;
        left: 10%;
        translate: transform(-50%, -50%);
        background: rgba(0, 0,0, 0.9);
        padding: 5px 5px;
    }

    .left ul li .slide .content h2{
        margin: 0;
        padding: 0;
        font-size: 20px;
        color: #fff;
    }
}

@media (max-width: 480px){
    .content-details{
        justify-content: center;
        margin-top: 30%;
        margin-left: 10%;
        font-family: 'Poppins', sans-serif;
    }

    .content-details h2{
        font-weight: 700;
        font-size: 20px;
    }

    .content-details p{
        font-size: 12px;
    }

    .left ul li .slide .content{
        position: absolute;
        bottom: 20%;
        left: 10%;
        translate: transform(-50%, -50%);
        background: rgba(0, 0,0, 0.9);
        padding: 5px 5px;
    }

    
    .left ul li .slide .content h2{
        margin: 0;
        padding: 0;
        font-size: 20px;
        color: #fff;
    }
}

.left ul li .slide img{
    object-fit: cover;
    position: absolute;
    height: auto;
    width: 100%;
    top: 20%;
    left: 0;
}

.left ul li input[type="radio"]:checked ~ .slide img{
    animation: animate 40s linear infinite;
}

@keyframes animate{
    0%{
        transform: scale(1);
    }
    50%{
        transform: scale(1.5);
    }
    100%{
        transform: scale(1);
    }
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  margin: 0;
  padding: 0;
  height: 100vh;
  position: relative;
  width: 50%;
  background: #000;
  overflow: hidden;
  /* top: 12%; */
  background-color: #E0E0E0;
}

/* Control the right side */
.right {
  right: 0;
  background-color: #e9e2e2;
}

</style>


