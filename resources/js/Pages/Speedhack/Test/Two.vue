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

	    	<div class="text-test">Match the questions and answers</div>
	    	<drag :first_column="lists_1" :secound_column="lists_2"></drag>
	    	<div class="buttons-wrap">
	    		<button class="btn-prev">
	    			<img src="/images/icons/arr-white-test.svg">
	    			Previous
	    		</button>
	    		<button class="btn-next">
	    			Next
	    			<img src="/images/icons/arr-black.svg">
	    		</button>
	    	</div>
    	</section>
    	</section>
    </student-layout>
</template>
<script>
	import Drag from '@/Speedhack/Components/Test/TwoDrag';
	import MenuAside from '@/Speedhack/Components/Test/AsideMenu';

	export default {
		components: {
			Drag,
			MenuAside
	    },
	    data() {
	        return {
	        	lists_1: [
	        		{ name: "What does she do?", id: 0 },
			        { name: "Are they politicians?", id: 1 },
			        { name: "Is she a housewife ?", id: 2 },
			        { name: "What do you do?", id: 3 },
			        { name: "Do they study at university?", id: 4 },
	        	],

	        	lists_2: [
	        		{ name: "She's a hairdresser.", id: 0 },
			        { name: "No, they're doctors.", id: 1 },
			        { name: "No, she's a journalist.", id: 2 },
			        { name: "I'm a lawyer.", id: 3 },
			        { name: "No, they're doctors.", id: 4 },
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
		margin-right: 60px;
		margin-bottom: -1px;
	}
	.tab-wrap .item.active{
		color: #003ECB;
		border-bottom: 1px solid #003ECB;
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
		.wrap-test{
			padding: 0px 20px;
		}
		.bg-account{
			padding-bottom: 100px;
			flex-direction: column;
		}
		
	}
</style>