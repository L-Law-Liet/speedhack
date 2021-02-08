<template>
    <welcome-layout>
        <section class="welcome-banner">
            <div class="container">
                <header-welcome></header-welcome>
                <div class="wrap">
                    <div class="content-banner">
                        <h1 class="title">Узнайте первыми
                            о наших новостях</h1>
                        <span class="subtile">Начните онлайн-обучение вместе с нами. Уже 2300 учеников прошли профессиональное обучение.</span>
                        <div class="button-wrap">
                            <a @click="showFormReguestModal" class="btn-main">Начать курс</a>
                            <a href="/all/courses" class="link-main">Посмотреть курсы</a>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img src="/images/ilustration/banner-3.png">
                    </div>
                </div>
            </div>
        </section>
        <div class="container mg-150">
            <block-title
                title="Наши новости"
                subtitle="Вся наша работа направлена на улучшение качества образования"
            ></block-title>

            <div class="row">
                <template v-for="item in news">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="pg-not">
                            <item-news :news="item"></item-news>
                        </div>
                    </div>
                </template>
            </div>
        </div>
        <form-request></form-request>
    </welcome-layout>
</template>

<script>
import HeaderWelcome from '@/Speedhack/Components/Details/HeaderBanner';
import FormRequest from '@/Speedhack/Components/Details/FormRequest';
import BlockTitle from '@/Speedhack/Components/Details/BlockTitle';
import ItemNews from '@/Speedhack/Components/Details/ItemNews';

export default {
    props: {
      news: Array,
    },
    components: {
        HeaderWelcome,
        FormRequest,
        BlockTitle,
        ItemNews
    },
    data() {
        return {
        }
    },
    methods: {
        showFormReguestModal(){
            this.$modal.show('formReguest');
        },
    }
}
</script>
<style scoped>
    .pg-not .wrap-news-slider-item{
        padding: 0px;
        margin-bottom: 40px;
    }
    .mg-150{
        margin-bottom: 150px;
    }
</style>
