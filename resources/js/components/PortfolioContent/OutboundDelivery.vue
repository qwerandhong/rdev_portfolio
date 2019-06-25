<template>
<div class="outbound-container">
    <div class="split left">
        <ul>
            <li>
                <input type="radio" checked name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/OutboundDeliverySystem/login.png">
                    <div class="content">
                        <h2>Login</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/OutboundDeliverySystem/mobile-app.png">
                    <div class="content">
                        <h2>Mobile App</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio"  name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/OutboundDeliverySystem/master-trucks.png">
                    <div class="content">
                        <h2>Management</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/OutboundDeliverySystem/viewing.png">
                    <div class="content">
                        <h2>Viewing</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/OutboundDeliverySystem/monitoring.png">
                    <div class="content">
                        <h2>Monitoring</h2>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="split right">
        <div class="content-details">
            <h2> Outbound Delivery System</h2>
            <h5> Description: </h5> 
            <p> A web and android application that used to locate the trucker and logs the timestamp of 
                the delivery for each store. This helps the depot / logistics company to utilize their 
                trucks and fleet management.  </p>
            <h5> Difficulty: </h5>
            <p> I'm having a hard time in building the route/pathways tracker features of the system because 
                 the Google Map and Routing API has a limits on their free services which is not enough on the 
                 system requirements.  </p>
            <h5> My Solution: </h5>
            <p> I find Leaflet API which has a large capacity on routing features and most importantly, 
                it’s free and well documented that suits on the project requirements. </p>

            <h5> Notable Features: </h5>
            <ul>
                <li> Geofencing Technology is used to track the Arrival and Departure of the trucks from the store. </li>
                <li> Tracking of pathways and current location of trucks deployed. </li>
                <li> Web Monitoring for time logs and status of delivery in each store.</li>
                <li> Flexible field selection on report. </li>
                <li> Management for the master files (trucks, stores and users) </li>
            </ul>
            <h5> Technology / Programming Used: </h5>
            <ul>
                <li> Bootstrap 4  </li>
                <li> Google map API with Leaflet routing API</li>
                <li> jQuery, AJAX, JS Confirm, Datatable</li>
                <li> HTML, CSS</li>
                <li> Android </li>
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


