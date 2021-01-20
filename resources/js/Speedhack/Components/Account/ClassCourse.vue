<template>
	<section class="class-carousel-wrap">
		<VueSlickCarousel  ref="carousel" v-bind="settings">
			<template v-for="item in lessons">
				<div class="carousel-item">
					<div class="title-lesson"> <span>{{ item.title }}</span></div>
					<ul class="lesson-wrap">
						<template v-for="(i, index) in item.lessons">
							<li class="item">
								<span class="title"> <b>{{ index + 1 }}. </b> <img src="/images/icons/reading-book.svg"> {{ i.title }} </span>
								<div class="conent-wrap">
									<div class="img"><img :src="i.img"></div>
									<p class="text">
										{{ i.text }}
									</p>
									
								</div>
							</li>
						</template>
					</ul>
				</div>
			</template>
		</VueSlickCarousel>
	</section>
</template>
<script>
	import VueSlickCarousel from 'vue-slick-carousel';
	import 'vue-slick-carousel/dist/vue-slick-carousel.css';
	// optional style for arrows & dots
	import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css';

export default {
    props: {
    
    },
	components: {
      	VueSlickCarousel,
    },
    data() {
        return {
        	activeDots: 0,
           	settings:{
           	 	"dots": false,
			  	"focusOnSelect": true,
			  	"arrows": true,
			  	"infinite": false,
			  	"speed": 500,
			  	"slidesToShow": 1,
			  	"slidesToScroll": 1,
			},
			lessons:[
				{
					title: "Happy families day!",
					lessons: [
						{
							title: 'Read and translate this text.',
							text: 'I am Zhilin Andrey. Andrey is my name and Zhilin is my surname. I am seventeen years old. I want to tell you a few words about my family. My family is not large. I have got mother, father and grandmother. There are four of us in the family.First of all some words about my parents. My mother is a teacher of biology. She works in a school. She likes her profession. She is a good-looking woman with brown hair. She is 44 but she looks much younger. My father is programmer. He is forty-six. My father often sings and when we are at home and have some free time I play guitar and we sing together. He is also handy with many things. When he was small he liked to take everything to pieces. My grandmother told me a story that once my father tried to repair their kitchen clock but without success. They had to give it to a repairman. But it happened a long time ago. Now he can fix almost everything. My parents have been married for 18 years. They have much in common, but they have different views on music, books, and',
							img:"/images/course/course-1.jpg",
						},
						{
							title: '2 Read and translate this text.',
							text: 'I am Zhilin Andrey. Andrey is my name and Zhilin is my surname. I am seventeen years old. I want to tell you a few words about my family. My family is not large. I have got mother, father and grandmother. There are four of us in the family.First of all some words about my parents. My mother is a teacher of biology. She works in a school. She likes her profession. She is a good-looking woman with brown hair. She is 44 but she looks much younger.',
							img:"/images/course/course-2.jpg",
						},
					]
				},
				{
					title: "2 Happy families day!",
					lessons: [
						{
							title: 'Read and translate this text.',
							text: 'I am Zhilin Andrey. Andrey is my name and Zhilin is my surname. I am seventeen years old. I want to tell you a few words about my family. My family is not large. I have got mother, father and grandmother. There are four of us in the family.First of all some words about my parents. My mother is a teacher of biology. She works in a school. She likes her profession. She is a good-looking woman with brown hair. She is 44 but she looks much younger. My father is programmer. He is forty-six. My father often sings and when we are at home and have some free time I play guitar and we sing together. He is also handy with many things. When he was small he liked to take everything to pieces. My grandmother told me a story that once my father tried to repair their kitchen clock but without success. They had to give it to a repairman. But it happened a long time ago. Now he can fix almost everything. My parents have been married for 18 years. They have much in common, but they have different views on music, books, and',
							img:"/images/course/course-1.jpg",
						},
						{
							title: '2 Read and translate this text.',
							text: 'I am Zhilin Andrey. Andrey is my name and Zhilin is my surname. I am seventeen years old. I want to tell you a few words about my family. My family is not large. I have got mother, father and grandmother. There are four of us in the family.First of all some words about my parents. My mother is a teacher of biology. She works in a school. She likes her profession. She is a good-looking woman with brown hair. She is 44 but she looks much younger.',
							img:"/images/course/course-2.jpg",
						},
					]
				},
			]
        }
    },
   
}

</script>
<style scoped>
	.class-carousel-wrap{
		padding-top: 38px;
		width: 100%;
	}
	.carousel-item{
		height: 570px;
		overflow-y: auto;
		width: 100%;
		background-color: #fff;
		border-radius: 8px;
	}

	.carousel-item .title-lesson{
		background: #F2994A;
		border-radius: 8px;
		border-bottom-left-radius: 0px;
		display: inline-flex;
		/*-webkit-transform: skew(30deg);
	    -moz-transform: skew(30deg);
	    -o-transform: skew(30deg);
	    transform: skew(30deg);*/
	    /*border-top: 100px solid red;
		border-right: 50px solid transparent;*/
		
	}

	.carousel-item .title-lesson span{
		font-family: "Inter", sans-serif;
		font-style: normal;
		font-weight: 600;
		font-size: 18px;
		color: #FFFFFF;
		padding: 20px;
		padding-right: 40px;
	}

	.lesson-wrap{
		padding: 16px 24px;
	}

	.lesson-wrap li{
		font-family: "Inter", sans-serif;
		font-size: 18px;
		line-height: 22px;
		color: #050A1C;
		margin-bottom: 20px;
	}

	.lesson-wrap li .title{
		font-family: "Inter-Bold", sans-serif;
		font-size: 18px;
		color: #050A1C;
		margin-bottom: 8px;
		display: flex;
		align-items: center;
	}
	.lesson-wrap li .title b{
		color: #F2994A;
		font-size: 26px;
	}
	.lesson-wrap li .title img{
		margin-left: 8px;
		margin-right: 8px;
	}
	.lesson-wrap li .conent-wrap .img{
		float: right;
		width:170px;
		height:170px;
		margin-left:15px;
		border-radius: 5px;
	}
	.lesson-wrap li .conent-wrap .img img{
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	
</style>



