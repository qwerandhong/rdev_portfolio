<template>
     <section class="banner">
        <div class="container">
           <div class="row">
               <div class="col-md-6">
                   <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                        <img src="" class="card-img" alt="">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Web Ticketing</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                    </div>
               </div>
               <div class="col-md-6"></div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    
}
</script>
<style scoped>
.banner{
    position: relative;
    background: url('/images/portfolio-bg.jpg');
    min-height: 100vh;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    justify-content: center;
    display: flex;
    margin: 0;
    align-items: center;
    padding: 150px 0 200px;
}

.container{
    position: relative;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    background: rgba(0, 0, 0, 0.1);
}

@media (max-width: 768px){
    .banner{
        padding: 150px 0;
    }
}
</style>
