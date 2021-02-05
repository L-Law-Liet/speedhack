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

	    		<div class="text-test">Complete the sentences with the given words</div>
	    		<section class="test">
	    			<drags :test="questions" :answers="answers"></drags>
				</section>

				<div class="buttons-wrap">
		    		<button onclick="window.location='/test/three'" class="btn-prev">
		    			<img src="/images/icons/arr-white-test.svg">
		    			Previous
		    		</button>
		    		<button onclick="window.location='/test/five'" class="btn-next">
		    			Next
		    			<img src="/images/icons/arr-black.svg">
		    		</button>
		    	</div>
	    	</section>
    	</section>
    </student-layout>
</template>
<script>
	import Drags from '@/Speedhack/Components/Test/FourDrag';
	import MenuAside from '@/Speedhack/Components/Test/AsideMenu';

	export default {
		components: {
			Drags,
			MenuAside
		},
	    data() {
	        return {
	        	answers: [
		        	{ name: "happen", id: 1, currect: null},
		        	{ name: "afraid", id: 2, currect: null},
		        	{ name: "speak", id: 3, currect: null },
		        	{ name: "problem", id: 8, currect: null }
		      	],
				questions: [
	        		[{ name: "I'm #??# I've got a complaint." ,id: 5, right: 1}],
			       	[{ name: 'Im sorry, but I"ve got a #??# .' ,id: 6, right: 2}],
			        [{ name: "I think there's something  #??# with my order.",id: 7, right: 8}],
	        	],
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
	.test{
		padding-left: 60px;
		padding-right: 60px;
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
