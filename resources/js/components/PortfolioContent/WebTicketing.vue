<template>
<div class="outbound-container">
    <div class="split left">
        <ul>
            <li>
                <input type="radio" checked name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/WebTicketingSystem/login.png">
                    <div class="content">
                        <h2>Login</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/WebTicketingSystem/request-central.png">
                    <div class="content">
                        <h2>Request Central</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/WebTicketingSystem/categories.png">
                    <div class="content">
                        <h2>Request Categories</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio"  name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/WebTicketingSystem/messaging.png">
                    <div class="content">
                        <h2>Messaging</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/WebTicketingSystem/ticket-manager.png">
                    <div class="content">
                        <h2>Ticket Manager</h2>
                    </div>
                </div>
            </li>
            <li>
                <input type="radio" name="slide">
                <div class="slide">
                    <img src="/images/project-screenshot/WebTicketingSystem/dashboard.png">
                    <div class="content">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="split right">
        <div class="content-details">
            <h2> Web Ticketing System</h2>
            <h5> Description: </h5> 
            <p> Online ticketing of concerns/request for each department. This system is composed of three roles 
                which are the ticket requestor, ticket manager and administrator.  For the record, this system helps 
                each department to easily track the number of catered services and requests. This also helps the 
                company to utilize their team work load since the ticket can be assigned to each of 
                the member of the department.  </p>
            <h5> Difficulty: </h5>
            <p> This project is the first application I built using the Laravel and VUE JS framework. 
                So having a hard time to digest the process of each department as well as to learn and apply the framework.  </p>
            <h5> My Solution: </h5>
            <p> I just double my effort on studying the process and at the same time learning the essentials of the framework I used.  
                I do believe that learning these frameworks just add up in my arsenals on the IT field.  </p>

            <h5> Notable Features: </h5>
            <ul>
                <li> Responsive to Mobile Browser </li>
                <li> Messaging </li>
                <li> Fully functional application with (3) user roles/permission. </li>
                <li> Management for the master files (users, user access) </li>
            </ul>
            <h5> Technology / Programming Used: </h5>
            <ul>
                <li> Bootstrap 4  </li>
                <li> VUE JS and LARAVEL framework</li>
                <li> Axios</li>
                <li> HTML, CSS</li>
                <li> SweetAlert JS</li>
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


