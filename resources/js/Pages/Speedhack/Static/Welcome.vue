<template>
    <welcome-layout>
        <section class="welcome-banner">
            <div class="container" ref="infoBox">
                <header-welcome></header-welcome>
                <div class="wrap">
                    <div class="content-banner" >
                        <h1 class="title">Онлайн-обучение
                            востребованных уроков</h1>
                        <span class="subtile">Начните онлайн-обучение вместе с нами. Уже 2300 учеников прошли профессиональное обучение.</span>
                        <div class="button-wrap">
                            <a class="btn-main" @click="showFormReguestModal">Начать курс</a>
                            <a @click="scrollToCourses" class="link-main">Посмотреть курсы</a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img src="/images/ilustration/banner-1.png">
                    </div>
                </div>
            </div>
        </section>

        <block-title
            title="Выбери курсы, которые тебе нравятся"
            subtitle="Онлайн программы, чтобы изучить один конкретный навык"
        ></block-title>

        <course-block :courses="courses"></course-block>
        <tab-course></tab-course>
        <teacher-slider></teacher-slider>
        <news-slider :news="news"></news-slider>
        <comments-block :comments="comments" :avg="avg"></comments-block>
        <form-request></form-request>
    </welcome-layout>
</template>

<script>
import HeaderWelcome from '@/Speedhack/Components/Details/HeaderBanner';
import BlockTitle from '@/Speedhack/Components/Details/BlockTitle';
import CourseBlock from '@/Speedhack/Components/Details/CourseBlock';
import TabCourse from '@/Speedhack/Components/Details/TabCourse';
import TeacherSlider from '@/Speedhack/Components/Details/TeacherSlider';
import NewsSlider from '@/Speedhack/Components/Details/NewsSlider';
import CommentsBlock from '@/Speedhack/Components/Details/CommentsBlock';
import FormRequest from '@/Speedhack/Components/Details/FormRequest';

export default {
    props: {
        courses: Array,
        comments: Array,
        avg: Number,
        news: Array,
    },
    components: {
        HeaderWelcome,
        BlockTitle,
        CourseBlock,
        TabCourse,
        TeacherSlider,
        NewsSlider,
        CommentsBlock,
        FormRequest
    },
    data() {
        return {

        }
    },
    methods: {
        showFormReguestModal(){
            this.$modal.show('formReguest');
        },
        showSuccessModal(){
            this.$modal.show('successModel');
        },
        scrollToCourses() {
            let height = this.$refs.infoBox.clientHeight;
            window.scrollTo({
                top: height,
                behavior: 'smooth'
            });
        }
    },
    mounted() {

    },
}
</script>
