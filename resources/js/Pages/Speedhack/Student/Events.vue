<template>
    <student-layout>
    	<section class="bg-account">
	    	<div class="block-wrap">
	    		<div class="week-slider-wrap">
	    		<button class="arrow-slider left" @click="showPrev" v-if="activeClass == 2"><img src="/images/icons/chevron-left-left.svg"></button>
	    		<div class="week week-slider">
	    		
	    		<VueSlickCarousel  ref="carousel" v-bind="settings" @afterChange="currentSlider($event)">
		    		<template v-for="(item, index) in calendars">
		    			<div class="day" :class="{'active': activeClass == index}" @click="changeDate(index)">
		    				<div class="day_week">
                            	<h5> {{ item.full | day_mine }}</h5> <span>{{ item.full | week_mine }}</span>
                        	</div>
                        	<span>{{ item.full |  month_mine}}</span>
		    			</div>
		    		</template>
		    	</VueSlickCarousel>
		    	
		    	</div>
		    	<button class="arrow-slider right" @click="showNext" v-if="activeClass !== 29"><img src="/images/icons/chevron-left-right.svg"></button>
		    	</div>
	    	</div>	
    	</section>
    </student-layout>
</template>
<script>
	import VueSlickCarousel from 'vue-slick-carousel';
	import 'vue-slick-carousel/dist/vue-slick-carousel.css';
	// optional style for arrows & dots
	import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css';
	import moment from 'moment';

	export default {
		components: {
      		VueSlickCarousel,
    	},
	    props: {
	    	calendars: Array,
	    },
	    data() {
        return {
        	activeClass: 0,
	           	settings:{
	           	 	"dots": false,
				  	"focusOnSelect": true,
				  	"arrows": true,
				  	"infinite": false,
				  	"speed": 500,
				  	"slidesToShow": 7,
				  	"slidesToScroll": 1,
				},
			}
		},
	    filters: {
			month_mine: function (value) {
			  	if (!value) return '';
			   	return  moment(value).locale("ru").format('MMMM');
			},
			day_mine: function (value) {
			  	if (!value) return '';
			   	return  moment(value).locale("ru").format('DD');
			},
			week_mine: function (value) {
			  	if (!value) return '';
			  	let str = moment(value).locale("ru").format('llll');
			  	str = str.substr(0, 2)
			   	return  str;
			},
		},
		methods: {
      	showNext() {
        	this.$refs.carousel.next();
        },
      	showPrev() {
        	this.$refs.carousel.prev();
        },
        changeDate(inx){
        	this.activeClass = inx;
        },
        currentSlider(event){
	    	this.activeDots = event;
	    }
    	}
	}
</script>

<style scoped>
	.bg-account{
		background: #F5F7F8;
		width: 100%;
    	height: 100%;
    	padding: 50px;
	}

	.block-wrap{
		background-color: #fff;
		box-shadow: 0px 4px 16px rgba(110, 120, 130, 0.12);
   		border-radius: 8px;
   		padding: 50px 80px;
	}

	.day {
	    width: 100%;
	    border-left: 1px solid #DFDFDF;
	    padding: 22px 21px;
	    margin-left: -1px;

	 /*   border-top: 1px solid #DFDFDF;
	    border-bottom: 1px solid #DFDFDF;*/
	}
	.week{
		border: 1px solid #DFDFDF;
		border-radius: 8px;
		 overflow: hidden;
	}

	.day.active {
	    background: #003ECB;
    }
	.day_week {
	    display: flex;
	    justify-content: space-between;
	}
	.day .day_week h5 {
	   	font-family: "Inter-Bold", sans-serif;
	    font-size: 30px;
	    color: #050A1C;
	}
	.day span {
	   	font-family: "Inter", sans-serif;
	   	font-weight: 500;
	    font-size: 18px;
	   	color: #050A1C;
	}

	.day.active .day_week h5{
		color: #fff;
	}


	.day .day_week span {
		font-family: "Inter", sans-serif;
	    font-weight: 500;
	    font-size: 18px;
	    line-height: 158.52%;
	    color: #050A1C;
	}
	.day.active span{
		color: #fff;
	}

	.week-slider-wrap{
		position: relative;
		padding-left: 35px;
		padding-right: 35px;
		margin-left: -35px;
		margin-right: -35px;
	}
	.arrow-slider{
		position: absolute;
		padding-left: 0px;
		z-index: 20px;
		top: 50%;
		transform: translateY(-50%);
	}
	.arrow-slider.left{
		left: 0px;
	}
	.arrow-slider.right{
		right: 0px;
	}
</style>