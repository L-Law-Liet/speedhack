<template>
    <student-layout>
    	<!-- <aside>
    		Aside
    	</aside> -->
    	<div class="text-test">Put  the words in the correct order to make sentences</div>
    	<div class="wrap-test">
    		<template v-for="(item, index) in lists">
	    		<div class="wrap-item"> <b>{{ index + 1 }}.</b> <drag :test="item"></drag></div>
	    	</template>
    	</div>

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
    </student-layout>
</template>
<script>
	import Drag from '@/Speedhack/Components/Test/OneDrag';

	export default {
		components: {
			Drag
	    },
	    data() {
	        return {
	        	lists: [
	        		[
	        			{ name: "Do", id: 0 },
				        { name: "drink", id: 1 },
				        { name: "black", id: 2 }
	        		],
	        		[
	        			{ name: "drink", id: 3 },
				        { name: "Do", id: 4 },
				        { name: "black", id: 5 }
	        		],
			        [
	        			{ name: "Asel", id: 6 },
				        { name: "Aida", id: 7 },
				        { name: "Dina", id: 8 }
	        		],
		      	],
	        }
	    }
	}
</script>
<style scoped>
	.wrap-test{
		padding-left: 40px;
		padding-right: 40px;
	}
	.wrap-item{
		display: flex;
		margin-bottom: 16px;
		align-items: center;
	}
	.wrap-item b{
		font-family: 'Inter', sans-serif;
		color: #050A1C;
		font-size: 18px;
		margin-right: 16px;
		font-weight: normal;
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