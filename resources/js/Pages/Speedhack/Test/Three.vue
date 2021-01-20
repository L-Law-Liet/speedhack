<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="text-test">Match the questions and answers</div>
    		<div class="example"> <i>Example:</i> <b>Do</b> you drink black tea? </div>
    		<section class="test">
    			<template v-for="(item, key) in lists">
	    			<div class="wrap-test-item"> <span> {{ key + 1 }}. </span> <drag :test="item"></drag></div>
	    		</template>
    		</section>
    	</section>
    </student-layout>
</template>
<script>
	import Drag from '@/Speedhack/Components/Test/ThreeDrag';

	export default {
		components: {
			Drag
	    },
	    data() {
	        return {
	        	lists: [
	        		{ text: "#??# your sister work in a school?"},
			       	{ text: '"Does Jim live near here?" "No, he? #??# .'},
			        { text: "What #??# your parents do?"},
	        	],
			}
	    }
	}
</script>
<style scoped>
	.test{
		padding-left: 40px;
		padding-right: 40px;
	}
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
	.example{
		background: #EEFADE;
		border-radius: 8px;
		padding: 16px;
		margin-left: 40px;
		margin-right: 100px;
		font-family: 'Inter', sans-serif;
		font-size: 18px;
		color: #050A1C;
		margin-bottom: 30px;
	}
	.wrap-test-item{
		display: flex;
	}
	.example i{
		font-style: italic;
	}
	.example b{
		display: inline-block;
		padding: 2px 11px;
		background: #D5F0B0;
		border-radius: 8px; 
		margin-right: 16px;
		margin-left: 30px;
	}
</style>