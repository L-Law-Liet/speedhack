require('./bootstrap');

require('moment');

import Vue from 'vue';
import Vuelidate from "vuelidate";
import { InertiaApp } from '@inertiajs/inertia-vue';
import { InertiaForm } from 'laravel-jetstream';
import PortalVue from 'portal-vue';
import LaravelValidator from './plugins/laravel-validator';
import { BootstrapVue } from 'bootstrap-vue';
import VModal from 'vue-js-modal';
import VueTheMask from 'vue-the-mask';

import VuePlyr from 'vue-plyr';
import 'vue-plyr/dist/vue-plyr.css';


Vue.mixin({ methods: { route } });
Vue.use(Vuelidate);
Vue.use(InertiaApp);
Vue.use(InertiaForm);
Vue.use(PortalVue);
Vue.use(BootstrapVue);
Vue.use(VModal);
Vue.use(VueTheMask);
Vue.use(LaravelValidator);

Vue.use(VuePlyr);

const app = document.getElementById('app');
Vue.component('welcome-layout', require('./Layouts/WelcomeLayout.vue').default);
Vue.component('student-layout', require('./Layouts/StudentLayout.vue').default);
Vue.component('teacher-layout', require('./Layouts/TeacherLayout.vue').default);
Vue.component('modal-form', require('./Speedhack/Components/Details/ModalForm').default);
Vue.component('modal-success', require('./Speedhack/Components/Details/ModalSuccess').default);
Vue.component('modal-form-teacher', require('./Speedhack/Components/Details/ModalFormTeacher').default);

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
