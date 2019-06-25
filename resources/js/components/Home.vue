<template>
<div class="home-body">
    <section class="banner">
        <div class="container">
            <div class="row">
                <h1> Hi! I'm Rando. </h1>
            </div>
            <div class="row">
                <h5> WEB / ANDROID Developer </h5>
            </div>
            <div class="row">
                <button class="btn btn-lg btn-danger"  @click.prevent="viewPortfolio()"><i class="fab fa-readme"></i> View Portfolio </button> &nbsp  
                <a class="btn btn-lg btn-secondary text-white" href="/images/Web Dev - CV only.pdf" target="_blank"> <i class="fas fa-id-card"></i> View Resume </a>
            </div>
        </div>
    </section>
</div>
</template>
<script>
    export default {
      methods: {
          viewPortfolio(){
              this.$router.push('/portfolio');
          }
      }
    }
</script>
<style scoped>
.home-body{
    background: url('/images/bg.jpg') no-repeat center center fixed;     
    background-size: 100% auto;
    margin: 0;
    padding: 0;
    z-index: 1;
}

@media screen and (max-width:800px) {
  .home-body {
    background-size: cover;
    background-attachment:fixed }
}

.banner{
    position: relative;
    min-height: 100vh;
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

nav li:hover,
 nav li.router-link-active,
 nav li.router-link-exact-active {
   background-color: indianred;
   cursor: pointer;
 }
</style>
