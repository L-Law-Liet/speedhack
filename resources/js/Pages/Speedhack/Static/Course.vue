<template>
	<welcome-layout>
		<header-white></header-white>
		<bread :breads="breads"></bread>
		<banner-white :course="course" :facts="facts"></banner-white>
		<course-info :info="info"></course-info>
		<course-facts :facts="facts_course"></course-facts>
		<course-certificate></course-certificate>
		<course-plans :lessons="lessons"></course-plans>
		<banner-free-lesson></banner-free-lesson>
		<comments-block></comments-block>
		<form-request-special></form-request-special>
	</welcome-layout>
</template>
<script>
	import HeaderWhite from '@/Speedhack/Components/Details/HeaderWhite';
	import Bread from '@/Speedhack/Components/Details/Bread';
	import BannerWhite from '@/Speedhack/Components/Details/BannerWhite';
	import CourseInfo from '@/Speedhack/Components/Details/CourseInfo';
	import CourseFacts from '@/Speedhack/Components/Details/CourseFacts';
	import CourseCertificate from '@/Speedhack/Components/Details/CourseCertificate';
	import BannerFreeLesson from '@/Speedhack/Components/Details/BannerFreeLesson';
	import CommentsBlock from '@/Speedhack/Components/Details/CommentsBlock';
	import CoursePlans from '@/Speedhack/Components/Details/CoursePlans';
	import FormRequestSpecial from '@/Speedhack/Components/Details/FormRequestSpecial';

	export default {
	    props: {
	      
	    },
	    components: {
	        HeaderWhite,
	        Bread,
	        BannerWhite,
	        CourseInfo,
	        CourseFacts,
	        CourseCertificate,
	        BannerFreeLesson,
	        CommentsBlock,
	        CoursePlans,
	        FormRequestSpecial
	    },
	    data() {
	        return {
	           breads: [
	           		{
	           			title: "Главная",
	           			link: "/",
	           		},
	           		{
	           			title: "Наши курсы",
	           			link: "/all/courses",
	           		},
           		],
           		course: {
           			title: "Онлайн-обучение General English",
           			subtitle: "Начните онлайн-обучение вместе с нами. Уже 2300 учеников прошли профессиональное обучение.",
           			img: "/images/bg/banner-10.jpg",
           		},
           		facts:[
           			{
	           			title: "2 месяца",
	           			subtitle: "онлайн-продуктивного обучения",
	           		},
	           		{
	           			title: "Обучение",
	           			subtitle: "на реальных данных",
	           		},
	           		{
	           			title: "Язык",
	           			subtitle: "английский, руский",
	           		},
	           		{
	           			title: "Расписание",
	           			subtitle: "гибкое расписание",
	           		},
           		],
           		info:[
           			{
	           			title: "Индивидуальный подход ",
	           			subtitle: "Большинство курсов мы проводим в формате живой трансляции. Вы не просто слушаете лекции, но и общаетесь с преподавателем в режиме реального времени.",
	           			img: "/images/ilustration/c-1.png",
	           		},
	           		{
	           			title: "Домашняя работа с обратной связи ",
	           			subtitle: "Все выполненные вами домашние задания после каждого видеоурока будут проверяться с вашим учителям. Наши учителя верят в хороший результат поэтому всегда поможет.",
	           			img: "/images/ilustration/c-2.png",
	           		},
	           		{
	           			title: "Постоянная поддержка",
	           			subtitle: "Вы всегда сможете обратиться к наставнику и получить ответ на свой вопрос в кратчайшие сроки.",
	           			img: "/images/ilustration/c-3.png",
	           		},
           		],
           		facts_course:[
           			"Учись не выходя из дома",
           			"Доступная цена и акции",
           			"Удобный график обучения",
           			"Уникальное програмное обучение",
           			"Современный метод обучения",
           			"Эффектиная работа с наставноким"
           		],
           		lessons:[
           			{
           				title: "Introduction",
           				count_lessons: 4, 
           				homeworks: 1,
           				lessons: [
           					{
           						title: "Present Simple",
           						min: 60,
           						files: 2,
           					},
           					{
           						title: "Past Simple",
           						min: 60,
           						files: 1,
           					},
           					{
           						title: "Vocabulary ",
           						min: 60,
           						files: 1,
           					},
           				]
           			},
           			{
           				title: "Getting started",
           				count_lessons: 2, 
           				homeworks: 2,
           				lessons: [
           					{
           						title: "Present Simple",
           						min: 60,
           						files: 2,
           					},
           					{
           						title: "Past Simple",
           						min: 60,
           						files: 1,
           					},
           				]
           			},
           		]
	        }
	    },
	    methods: {
		    
		}
	}
</script>
<style scoped>
</style>