<template>
    <student-layout>
    	<section class="bg-account">
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
    </student-layout>
</template>
<script>
	import Drag from '@/Speedhack/Components/Test/TwoDrag';

	export default {
		components: {
			Drag
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
	.bg-account{
		background: #F5F7F8;
		width: 100%;
    	height: 100%;
	}
	.text-test{
		font-family: 'Inter', sans-serif;
		font-weight: 500;
		font-size: 24px;
		color: #003ECB;
		margin-left: 40px;
		margin-bottom: 20px;
	}
	.buttons-wrap{
		display: flex;
		align-items: flex-end;
		justify-content: flex-end;
    	padding-right: 40px;
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
</style>