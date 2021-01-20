<template>
    <student-layout>
    	<section class="bg-account">
    		<div class="text-test">Complete the sentences with the given words</div>
    		<section class="test">
    			<drags :test="questions" :answers="answers"></drags>
			</section>
    	</section>
    </student-layout>
</template>
<script>
	import Drag from '@/Speedhack/Components/Test/FourDrag';
	import Drags from '@/Speedhack/Components/Test/FourDag2';

	export default {
		components: {
			Drag,
			Drags
	    },
	    data() {
	        return {
	        	answers: [
		        	{ name: "happen", id: 1, currect: false},
		        	{ name: "afraid", id: 2, currect: false},
		        	{ name: "speak", id: 3, currect: false },
		        	{ name: "problem", id: 4, currect: false }
		      	],
				questions: [
	        		[{ name: "I'm #??# I've got a complaint." ,id: 5,}],
			       	[{ name: 'Im sorry, but I"ve got a #??# .' ,id: 6,}],
			        [{ name: "I think there's something  #??# with my order.",id: 7,}],
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
	.test{
		padding-left: 40px;
		padding-right: 40px;
	}
</style>