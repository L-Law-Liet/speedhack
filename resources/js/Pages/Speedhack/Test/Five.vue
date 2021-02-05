<template>
	<student-layout>
    	<section class="bg-account">
    		<menu-aside></menu-aside>
    		<section class="content-wrap">
	    		<div class="account-title">
	    			<img src="/images/icons/arrow-left-blue.svg"><span>Present Simple - Homework</span>
	    		</div>

	    		<section class="tab-wrap">
	    			<div class="item active">Homework</div>
	    			<div class="item">Grammar</div>
	    		</section>

	    		<div class="text-test">Read the first phrase and choose the correct response</div>

	    		<section class="test">
		            <div class="item">
		                <p class="title"><b class="key"> 1. </b> Do you mind if I smoke here?</p>
		                <div class="custom-control custom-radio error">
		                    <input class="custom-control-input input_one"  id="no" type="radio" name="one" value="">
		                    <label class="answer_label custom-control-label" for="no">No, I don't</label><br>
		                </div>
		                <div class="custom-control custom-radio">
		                    <input class="custom-control-input input_one"  id="no2" type="radio" name="one" value="">
		                    <label class="answer_label custom-control-label" for="no2">I mind</label><br>
		                </div>
		                <div class="custom-control custom-radio">
		                    <input class="custom-control-input input_one" id="no3" type="radio" name="one" value="">
		                    <label class="answer_label custom-control-label" for="no3">Yes, please</label>
		                </div>
		            </div>

		           <!--  <div class="item">
		                <p class="title"><b class="key"> 2. </b> Do you mind if I smoke here?</p>
		                <div class="custom-control custom-radio">
		                    <input class="custom-control-input input_one" type="radio" name="two" value="">
		                    <label class="answer_label custom-control-label">No, I don't</label><br>
		                </div>
		                <div class="custom-control custom-radio">
		                    <input class="custom-control-input input_one" type="radio" name="two" value="">
		                    <label class="answer_label custom-control-label">I mind</label><br>
		                </div>
		                <div class="custom-control custom-radio">
		                    <input class="custom-control-input input_one" type="radio" name="two" value="">
		                    <label class="answer_label custom-control-label">Yes, please</label>
		                </div>
		            </div> -->
        		</section>

	    		<div class="buttons-wrap">
		    		<button onclick="window.location='/test/four'" class="btn-prev">
		    			<img src="/images/icons/arr-white-test.svg">
		    			Previous
		    		</button>
		    		<button onclick="window.location='/result'" class="btn-next">
		    			Next
		    			<img src="/images/icons/arr-black.svg">
		    		</button>
		    	</div>
	    	</section>
    	</section>
    </student-layout>
</template>
<script>
	import MenuAside from '@/Speedhack/Components/Test/AsideMenu';

	export default {
		components: {
			MenuAside
		},
	    data() {
	        return {

			}
	    }
	}
</script>
<style scoped>
	.account-title{
		font-family: "Inter-Bold", sans-serif;
		padding: 30px 20px;
		font-weight: 600;
		color: #050A1C;
		font-size: 28px;
	}
	.account-title img{
		margin-right: 16px;
	}
	.bg-account{
		background: #F5F7F8;
		width: 100%;
    	height: 100%;
    	display: flex;
	}

	.content-wrap{
		width: 100%;
	}

	.tab-wrap{
		border-bottom: 1px solid #E0E3EB;
		display: flex;
		padding-right: 60px;
		padding-left: 60px;
		margin-bottom: 26px;
	}
	.tab-wrap .item{
		padding: 8px 0px;
		font-size: 18px;
		font-family: "Inter", sans-serif;
		color: rgb(123, 131, 139);
		margin-right: 40px;
		margin-bottom: -1px;
	}
	.tab-wrap .item.active{
		color: #003ECB;
		border-bottom: 1px solid #003ECB;
	}
	.text-test{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 24px;
		color: #003ECB;
		margin-left: 60px;
		margin-bottom: 20px;
	}

	.buttons-wrap{
		display: flex;
		align-items: flex-end;
		justify-content: flex-end;
    	padding-right: 60px;
    	font-size: 14px;
    	color: #fff;
	}
	.btn-prev img{
		margin-right: 10px;
	}
	.btn-prev{
		background-color: #F2994A;
		border-radius:  12px;
		margin-right: 24px;
		padding: 6px 20px;
		color: #fff;

	}
	.btn-next img{
		margin-left: 10px;
	}
	.btn-next{
		background-color: rgba(208, 208, 208, 0.56);
		border-radius:  12px;
		margin-left: 24px;
		padding: 6px 20px;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 118px;
	}
	.test{
		padding-right: 60px;
		padding-left: 60px;
		margin-bottom: 60px;
	}
	.test .item{
		margin-bottom: 10px;
	}
	.title {
	    font-family: "Inter", sans-serif;
	    font-size: 18px;
	    color: #050A1C;
	}
	.title .key{
		margin-right: 16px;
	}

	.answer_label {
	    font-family: "Inter", sans-serif;
	    font-size: 18px;
	    color:  #7B838B;
	    line-height: 24px;
	    margin-bottom: 12px;
	}

	.custom-control-input:checked ~ .custom-control-label::before {
	    color: #fff;
	    border-color: #3BA972;
	    background-color: #3BA972;
	}
	.custom-control-input:checked ~ .custom-control-label{
		color: #050A1C;
	}
	.custom-control{
		margin-left: 35px;
	}
	.custom-radio.error .custom-control-label::before{
		border-color: red;
	}
	.custom-radio.error .custom-control-input:checked ~ .custom-control-label[data-v-644b22e2]::before{
		border-color: #3BA972;
	}
	@media only screen and (max-width: 768px) {
		.tab-wrap{
			padding-right: 20px;
    		padding-left: 20px;
		}
		.tab-wrap .item:last-child{
			margin: 0px;
		}
		.text-test{
			margin-right: 20px;
			margin-left: 20px;
		}
		.test{
			padding-right: 20px;
    		padding-left: 20px;
		}
		.buttons-wrap{
			padding-right: 20px;
    		padding-left: 20px;
    		justify-content: center;
    		margin-bottom: 100px;
		}
		.bg-account{
   			flex-direction: column;
   		}
	}
</style>
