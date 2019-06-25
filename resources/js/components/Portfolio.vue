<template>
    <div class="portfolio-details-body">
        <div class="container">
            <div class="box" @click.prevent="">
                <div class="thumb">
                    <img src="/images/logistics.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <i class="fas fa-truck-moving" aria-hidden="true"></i>
                        <h3> Outbound Delivery System</h3>
                        <a href="#" @click.prevent="OutboundDelivery()">Read More.</a>
                    </div>
                </div>
            </div>
            <div class="box" @click.prevent="">
                <div class="thumb">
                    <img src="/images/ticketing.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <i class="fas fa-ticket-alt" aria-hidden="true"></i>
                        <h3> Web Ticketing System </h3>
                        <a href="#" @click.prevent="WebTicketing()">Read More.</a>
                    </div>
                </div>
            </div>
            <div class="box" @click.prevent="">
                <div class="thumb">
                    <img src="/images/accounting.jpg">
                </div>
                <div class="details">
                    <div class="content">
                        <i class="fas fa-money-bill-wave" aria-hidden="true"></i>
                        <h3> Cash Receipt Book Online </h3>
                        <a href="#" @click.prevent="CRBOnline()">Read More.</a>
                    </div>
                </div>
            </div>
            <div class="box" @click.prevent="">
                <div class="thumb">
                    <img src="/images/mini-project.png">
                </div>
                <div class="details">
                    <div class="content">
                        <i class="fas fa-globe" aria-hidden="true"></i>
                        <h3> Mini Projects </h3>
                        <a href="#" @click.prevent="MiniProjects()">Read More.</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            loading: true,
        }
    },

    mounted(){
        let vh = window.innerHeight * 0.01;
		// Then we set the value in the --vh custom property to the root of the document
		document.documentElement.style.setProperty('--vh', `${vh}px`);

		// We listen to the resize event
		window.addEventListener('resize', () => {
            // We execute the same script as before
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
		});
    },

    methods: {
        OutboundDelivery(){
            this.$router.push('/portfolio/outbound-delivery');
        },

        WebTicketing(){
            this.$router.push('/portfolio/web-ticketing');
        },

        CRBOnline(){
            this.$router.push('/portfolio/crb-online');
        },

        MiniProjects(){
            this.$router.push('/portfolio/mini-projects');
        },
    }
}
</script>
<style scoped>
.portfolio-details-body{
    margin: 0;
    padding: 0;
	font-family: sans-serif;
	height: 100vh;
	height: calc(var(--vh, 1vh) * 100);
	width: 100% !important;
    background: #792ae8 !important;
    background-size: auto auto;
    z-index: 1;
}

.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1200px;
    height: 500px;
    display: flex;
    transition: 1s;
}

.container .box{
    position: relative;
    width: 300px;
    height: 500px;
    background: #ccc;
    transition: 0.5s;
}

.container .box:hover{
    transform: scale(1.1);
    z-index: 1;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 1);
}

.container .box .thumb{
    position: absolute;
    width: 100%;
    height: 250px;
    overflow: hidden;
}

.container .box:nth-child(odd) .thumb{
    bottom: 0;
    left: 0;
}
.container .box .thumb img{
    width: 100%;
    height: 100%;
}

.container .box .details{
    position: absolute;
    width: 100%;
    height: 250px;
    overflow: hidden;
    background: #262626;
}

.container .box:nth-child(even) .details{
    bottom: 0;
    left: 0; 
}

.container .box:nth-child(1) .details{
    background: #EF5350;
}

.container .box:nth-child(2) .details{
    background: #5C6BC0;
}

.container .box:nth-child(3) .details{
    background: #66BB6A;
}

.container .box:nth-child(4) .details{
    background: #7E57C2;
}

.container .box .details .content{
    position: absolute;
    top: calc(50% + 16px);
    transform: translateY(-50%);
    width: 100%;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
    transition: 0.5s;
}

.container .box:hover .details .content{
    top: calc(50%);
}

.container .box .details .content .fas{
    font-size: 80px;
    color: #fff;
}

.container .box .details .content h3{
    margin: 0;
    padding: 0;
    padiing: 10px 0;
    color: #fff;
}

.container .box .details .content a{
    display: inline-block;
    padding: 5px 20px;
    color: #fff;
    border: 2px solid #fff;
    text-decoration: none;
    transition: 0.5s;
    border-radius: 20px;
    transform: scale(0);
}

.container .box:hover .details .content a{
    transform: scale(1);
}

.container .box .details .content a:hover{
    background: #fff;
    color: #262626;
}


@media (max-width: 1000px){
    .portfolio-details-body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        height: calc(var(--vh, 1vh) * 100);
        width: 100% !important;
        background: #792ae8 !important;
        background-size: auto auto;
        z-index: 1;
    }

    .container{
        width: 100%;
        height: auto;
        padding: 20px;
        box-sizing: border-box;
        margin: 0;
    }

    .container .box{
        height: 250px;
    }

    .container .box .thumb{
        display: none;
    }
}

@media (max-width: 768px){
    .portfolio-details-body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        height: calc(var(--vh, 1vh) * 180);
        width: 100% !important;
        background: #792ae8 !important;
        background-size: auto auto;
        z-index: 1;
    }

    .container{
        display: initial;
        margin-top: 25%;
        top: 50%;
    }

    .container .box{
        width: 50%;
        height: 250px;
        float: left;
    }
}

@media (max-width: 480px){
    .portfolio-details-body{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        height: calc(var(--vh, 1vh) * 200);
        width: 100% !important;
        background: #792ae8 !important;
        background-size: auto auto;
        z-index: 1;
    }
    .container{
        top: 15%;
        margin: 0;
        left: 0;
        transform: translate(0);
    }

    .container .box{
        width: 100%;
        height: 250px;
        float: none;
    }
}
</style>


