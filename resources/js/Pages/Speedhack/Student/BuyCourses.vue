<template>
	<student-layout>
    	<section class="bg-account">
    		<div class="title-page"><span>Каталог курсов</span></div>
    		<div class="tab-course tab-course-account">
		  		<b-tabs
		  			active-nav-item-class="active-tab-nav-item">
			    	<b-tab active>
		      		<template #title>
		        		<span class="circle"></span> Английский язык
		      		</template>
			      		<div class="row top-40">
			      			<template v-for="item in courses">
			      				<div class="col-12 col-md-6 col-lg-6 col-xl-4">
			      					<item-course-buy :course="item"></item-course-buy>
					                
					            </div> 
			      			</template>
			        	</div>
	    			</b-tab>

	    			<b-tab>
		      		<template #title>
		        		<span class="circle"></span> Казахский язык
		      		</template>
			      		<div class="row top-40">
			      			<template v-for="item in courses2">
			      				<div class="col-12 col-md-6 col-lg-6 col-xl-4">
			      					<item-course-buy :course="item"></item-course-buy>
					                
					            </div> 
			      			</template>
			        	</div>
	    			</b-tab>
 				</b-tabs>
		  	</div>
    	</section>
    </student-layout>
</template>
<script>
	import ItemCourseBuy from '@/Speedhack/Components/Details/ItemCourseBuy';
	export default {
	    components: {
	    	ItemCourseBuy,
	    	
	    },
	    data() {
	        return {
	        	courses: [
	           		{
	           			text: "",
	           			img: "/images/ilustration/course-1.png",
	           			title: "Английский язык",
	           			price: "19 500",
	           		},
	           		{
	           			text: "",
	           			img: "/images/ilustration/course-2.png",
	           			title: "Казахский язык",
	           			price: "20 500",
	           		},
           		],
           		courses2: [
	           		{
	           			text: "",
	           			img: "/images/ilustration/course-1.png",
	           			title: "Общий",
	           			price: "19 500",
	           		},
	           		{
	           			text: "",
	           			img: "/images/ilustration/course-2.png",
	           			title: "Для экзамена на гос. структуры",
	           			price: "19 500",
	           		},
           		],
	        }
	    }
	}
</script>
<style scoped>
	.bg-account{
		background: #F5F7F8;
		width: calc(100% - 320px);
		width: auto;
    	height: 100%;
    }
	.title-page{
		padding: 30px 60px;
	}
	.title-page span{
		font-size: 24px;
		font-family: "Inter-Bold", sans-serif;
		color: #050A1C;
	}
	.tab-course-account .tab-content{
		margin-left: 60px;
    	margin-right: 60px;
	}
	.tab-wrap{
		border-bottom: 1px solid #E0E3EB;
		display: flex;
		padding-right: 60px;
		padding-left: 60px;
		margin-bottom: 46px;
	}
	.tab-wrap .item{
		padding: 8px 0px;
		font-size: 18px;
		font-family: "Inter", sans-serif;
		color: rgb(123, 131, 139);
		margin-right: 40px;
		margin-bottom: -1px;
	}

	.title-center{
		text-align: center;
		font-family: 'Inter', sans-serif;
		font-weight: bold;
		font-size: 50px;
		line-height: 78px;
		color: #050A1C;
	}
	.wrap-center{
		display: flex;
		justify-content: center;
		margin-top: 80px;
	}
	.circle{
		display: block;
		width: 8px;
		height: 8px;
		background-color: #A339FF;
		border-radius: 50%;
		overflow: hidden;
		margin-right: 8px;
	}
	.top-40{
		margin-top: 40px;
	}

	.tab-course-account .nav-tabs .nav-link{
		display: flex;
		justify-content: left;
		align-items: center;
	}
	.tab-course-account .nav-tabs .nav-link.active, .tab-course-account .nav-tabs .nav-item.show .nav-link{
		background-color: transparent;
	}

	 @media only screen and (max-width: 768px) {
	 	.tab-course-account {
	 		margin-left: 20px;
    		margin-right: 20px;
	 	}
	 	.title-page{
	 		padding: 30px 20px;
	 	}

	 }
</style>