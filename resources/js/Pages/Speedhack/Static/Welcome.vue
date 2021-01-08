<template>
    <welcome-layout>
        <section class="welcome-banner">
            <div class="container">
                <header-welcome></header-welcome>
                <div class="wrap">
                    <div class="content-banner">
                        <h1 class="title">Онлайн-обучение
                            востребованных уроков</h1>
                        <span class="subtile">Начните онлайн-обучение вместе с нами. Уже 2300 учеников прошли профессиональное обучение.</span>
                        <div class="button-wrap">
                            <a class="btn-main" @click="showFormReguestModal">Начать курс</a>
                            <a @click="showSuccessModal" class="link-main">Посмотреть курсы</a>
                        </div>
                    </div> 
                    <div class="banner-img">
                        <img src="/images/ilustration/banner-1.png">
                    </div>  
                </div>
            </div>
        </section>

        <block-title 
            title="Выбери курсы которые тебе нравится"
            subtitle="Онлайн программы, чтобы изучить один конкретный навык"
        ></block-title>

        <course-block></course-block>
        <tab-course></tab-course>
        <teacher-slider></teacher-slider>
        <news-slider></news-slider>
        <comments-block></comments-block>
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
        }
    },
    mounted() {
        
    },
}
</script>