<template>
<div class="portfolio-body">
     <div class="container">
		<div class="column active" @click="">
			<div class="content">
				<h1>1</h1>
				<div class="box">
					<h2>Outbound Delivery System</h2>
					<p>A web and android app that used for fleet management by locating the 
					location/pathways of the trucker and the timestamp logs for each store delivery.</p>
					<button class="btn btn-sm btn-primary" @click.prevent="openDetails('OutboundDelivery')">View More </button>
				</div>
			</div>
			<div class="bg bg1"></div>
		</div>
		<div class="column" @click="">
			<div class="content">
				<h1>2</h1>
				<div class="box">
					<h2>Web Ticketing System</h2>
					<p>Web App that enables to track the number of catered services and 
					requests of each departments of the company.</p>
					<button class="btn btn-sm btn-success" @click.prevent="openDetails('WebTicketing')">View More </button>
				</div>
			</div>
			<div class="bg bg2"></div>
		</div>
		<div class="column" @click="">
			<div class="content">
				<h1>3</h1>
				<div class="box">
					<h2>Cash Receipt Book Online</h2>
					<p>A web based application that tracks the cash, online deposit, cash-on-delivery, 
						client check, accounts receivable, gift certificate and credit card payments of company store branches. 
						</p>
					<button class="btn btn-sm btn-primary" @click.prevent="openDetails('CRBOnline')">View More </button>
				</div>
			</div>
			<div class="bg bg3"></div>
		</div>
		<div class="column" @click="">
			<div class="content">
				<h1>4</h1>
				<div class="box">
					<h2>Offline Job Fair Registration</h2>
					<p>An offline web based application which enables to save student 
						information that is later used for recruitment.  
						It has a capability to generate those saved information into excel format.</p>
					<button class="btn btn-sm btn-success" @click.prevent="openDetails('JobRegistration')">View More </button>
				</div>
			</div>
			<div class="bg bg4"></div>
		</div>
	</div>
</div>
</template>
<script>
export default {
    mounted(){
		
		//FOR mobile
        $(document).on('mouseover click', '.container .column', function(){
        	$(this).addClass('active').siblings().removeClass('active');
        });

	},
	
	methods: {
		openDetails(div_id){
			console.log(div_id);
			this.$router.push('/portfolio-details');
		}
	}
}
</script>
<style scoped>
.portfolio-body{
    margin: 0 !important;
	padding: 0 !important;
	width: 100% !important;
}

.container
{
	font-family: sans-serif;
	width: 100% !important;
	height: 100vh;
	overflow: hidden;
}
.container .column
{
	width: 25% !important;
	height: 100% !important;
	float: left;
	border-right: 2px solid rgba(0,0,0,.5);
	box-sizing: border-box;
	z-index: 1;
}
.container .column:last-child
{
	border-right: none;
}
.container .column .content
{
	position: relative;
	height: 100% !important;
}
.container .column .content h1
{
	position: absolute;
	top: 50% !important;
	transform: translateY(-50%);
	width: 100% !important;
	background: rgba(0,0,0,.1);
	text-align: center;
	margin: 0;
	padding: 0;
	color: rgba(255,255,255,.2);
	font-size: 15em;
	border-top: 2px solid rgba(0,0,0,.5);
	border-bottom: 2px solid rgba(0,0,0,.5);
}
.container .column .content .box
{
	position: absolute;
	top: 50%;
	transform: translateY(100%);
	box-sizing: border-box;
	padding: 40px;
	background: rgba(255,255,255,1);
	text-align: center;
	transition: 0.5s;
	opacity: 0;
}
.container .column.active .content .box
{
	opacity: 1;
	transform: translateY(-50%);
}
.container .column .content .box h2
{
	margin: 0;
	padding: 0;
	font-size: 20px;
	color: #262626;
}
.container .column .content .box p
{
	color: #262626;
	font-size: 13px;
}
.container .column .bg
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	pointer-events: none;
	z-index: -1;
}
.container .column.active .bg.bg1
{
	background: url('/images/logistics.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	transition: 0.5s;
}
.container .column.active .bg.bg2
{
	background: url('/images/ticketing.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	transition: 0.5s;
}
.container .column.active .bg.bg3
{
	background: url('/images/accounting.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	transition: 0.5s;
}
.container .column.active .bg.bg4
{
	background: url('/images/recruitment.jpg');
	background-size: cover;
	background-attachment: fixed;
	background-position: center;
	transition: 0.5s;
}

@media (max-width: 768px){
    .banner{
        padding: 0;
	}
	
	.portfolio-body{
		margin: 0 !important;
		padding: 0 !important;
		width: 100% !important;
	}

	.container
	{
		font-family: sans-serif;
		width: 100% !important;
		height: 100vh;
		overflow: hidden;
	}
	.container .column
	{
		width: 25% !important;
		height: 100% !important;
		float: left;
		border-right: 2px solid rgba(0,0,0,.5);
		box-sizing: border-box;
		z-index: 1;
	}
	.container .column:last-child
	{
		border-right: none;
	}
	.container .column .content
	{
		position: relative;
		height: 100% !important;
	}
	.container .column .content h1
	{
		position: absolute;
		top: 50% !important;
		transform: translateY(-50%);
		width: 100% !important;
		background: rgba(0,0,0,.1);
		text-align: center;
		margin: 0;
		padding: 0;
		color: rgba(255,255,255,.2);
		font-size: 15em;
		border-top: 2px solid rgba(0,0,0,.5);
		border-bottom: 2px solid rgba(0,0,0,.5);
	}
	.container .column .content .box
	{
		position: absolute;
		top: 50%;
		transform: translateY(100%);
		box-sizing: border-box;
		padding: 0 0 5px 0;
		background: rgba(255,255,255,1);
		text-align: center;
		transition: 0.5s;
		opacity: 0;
	}
	.container .column.active .content .box
	{
		opacity: 1;
		transform: translateY(-50%);
	}
	.container .column .content .box h2
	{
		margin: 0;
		padding: 0;
		font-size: 15px;
		color: #262626;
	}
	.container .column .content .box p
	{
		color: #262626;
		font-size: 10px;
	}
	.container .column .bg
	{
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		pointer-events: none;
		z-index: -1;
	}
	.container .column.active .bg.bg1
	{
		background: url('/images/logistics.jpg');
		background-size: cover;
		background-attachment: fixed;
		background-position: center;
		transition: 0.5s
	}
	.container .column.active .bg.bg2
	{
		background: url('/images/ticketing.jpg');
		background-size: cover;
		background-attachment: fixed;
		background-position: center;
		transition: 0.5s
	}
	.container .column.active .bg.bg3
	{
		background: url('/images/accounting.jpg');
		background-size: cover;
		background-attachment: fixed;
		background-position: center;
		transition: 0.5s
	}
	.container .column.active .bg.bg4
	{
		background: url('/images/recruitment.jpg');
		background-size: cover;
		background-attachment: fixed;
		background-position: center;
		transition: 0.5s
	}

}
</style>
