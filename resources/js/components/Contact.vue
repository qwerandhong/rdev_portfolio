<template>
<div class="contact-body">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <h1> <i class="fas fa-id-card"></i> Contact Me! </h1>
            </div>
            <br>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" v-model="firstName" placeholder="First Name*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" v-model="lastName" placeholder="Last Name*" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" v-model="email" placeholder="Email*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" v-model="subject" placeholder="Subject*" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <textarea class="form-control" v-model="message" placeholder="Message*" rows="5" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <small class="float-left"> (*) indicate required </small>
                        <button :disabled="firstName === '' || lastName === '' || email === '' || subject === '' || message === ''"  
                        class="btn float-right btn-primary" type="submit" @click="sendMessage($event)">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
</template>
<script>
export default {

    data(){
        return {
            firstName: '',
            lastName: '',
            email: '',
            subject: '',
            message: '',
        }
    }, 

    methods: {
        sendMessage: function(e){
            var self = this;
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(this.email)){
                e.preventDefault();
                self.$swal({
                    title: 'Send Message?',
                    text: "Are you sure?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes!'
                }).then((result) => {
                    if (result.value) {
                        self.$axios.post('/api/sendMessage', {firstName: self.firstName, lastName: self.lastName, 
                        email: self.email, subject: self.subject, message: self.message})
                        .then(resp => {
                            if(resp.data === "success"){
                                self.$swal( 'Success',
                                'I will keep in touch with you ASAP :) Thank you!',
                                'success');
                                self.firstName = '';
                                self.lastName = '';
                                self.email = '';
                                self.subject = '';
                                self.message = '';
                            }
                        }).catch(error => {
                            self.$swal( 'Failed',
                                'Something went wrong. Please try again.',
                                'error');
                            console.log(error);
                        });
                    }
                });
                
                
            }
            
        }   
    }
}
</script>
<style scoped>
.contact-body{
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

.card{
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

@media (max-width: 768px){
    .contact-body{
        overflow-y: auto !important;
        height: calc(var(--vh, 1vh) * 120);
    }
    h1{
        font-size: 25px;
    }

    .card{
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 550px;
        padding: 5px;
        background: #fff;
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.2);
    }

    input{
        font-size: 14px;
    }

    button{
        font-size: 14px;
    }

    textarea{
        height: 4em;
        font-size: 14px;
    }
}

@media (max-width: 480px){
    .contact-body{
        overflow-y: auto !important;
        height: calc(var(--vh, 1vh) * 100);
    }
    h1{
        font-size: 20px;
    }
    .card{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        padding: 5px;
        background: #fff;
        box-sizing: border-box;
        border-radius: 10px;
        box-shadow: 0 15px 50px rgba(0,0,0,0.2);
    }

    input{
        font-size: 12px;
    }

    button{
        font-size: 12px;
    }

    textarea{
        height: 3em;
        font-size: 12px;
    }
}
</style>


