import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './components/Home.vue'
import Portfolio from './components/Portfolio.vue'
import About from './components/About.vue'
import Contact from './components/Contact.vue'

Vue.use(VueRouter);

let routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/portfolio',
        name: 'portfolio',
        component: Portfolio
    },
    {
        path: '/about',
        name: 'About',
        component: About
    },
    {
        path: '/contact',
        name: 'contact',
        component: Contact
    }

];
const router =  new VueRouter({
    mode: 'history',
    routes,
    activeLink: 'active'
});

export default router;