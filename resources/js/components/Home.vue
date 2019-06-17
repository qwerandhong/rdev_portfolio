<template>
    <section class="banner">
        <div class="container">
            <div class="row">
                <h1> Hi! I'm Rando. </h1>
            </div>
            <div class="row">
                <h5> WEB / ANDROID Developer </h5>
            </div>
            <div class="row">
                <button class="btn btn-lg btn-danger"><i class="fab fa-readme"></i> View Portfolio </button>  
                <button class="btn btn-lg btn-secondary"> <i class="fas fa-id-card"></i> View Resume </button>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped>
.banner{
    position: relative;
    background: url('/images/bg.jpg');
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 250px 0 200px;
    justify-content: center;
}

.banner h1{
    padding: 0;
    font-weight: 1000;
    font-size: 4.8em;
    color: #fff;
    text-transform: uppercase;
}

.banner h5{
    padding: 0;
    font-weight: 1000;
    color: #fff;
    text-transform: uppercase;
}

.banner button{
    color: #fff;
    padding: 5px 15px;
}

@media (max-width: 768px){
    .banner{
        padding: 200px 0;
    }

    .banner h1{
    padding: 0;
    font-weight: 1000;
    font-size: 4.8em;
    color: #fff;
    text-transform: uppercase;
}

.banner h5{
    padding: 0;
    font-weight: 1000;
    color: #fff;
    text-transform: uppercase;
}

}
</style>
