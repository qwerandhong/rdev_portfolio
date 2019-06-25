import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from './components/Home.vue'
import Portfolio from './components/Portfolio.vue'
import About from './components/About.vue'
import Contact from './components/Contact.vue'
import OutboundDelivery from './components/PortfolioContent/OutboundDelivery.vue'
import WebTicketing from './components/PortfolioContent/WebTicketing.vue'
import CashReceiptBook from './components/PortfolioContent/CashReceiptBook.vue'
import MiniProjects from './components/PortfolioContent/MiniProjects.vue'


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
    },
    {
        path: '/portfolio/outbound-delivery',
        name: 'outbound-delivery',
        component: OutboundDelivery
    },
    {
        path: '/portfolio/web-ticketing',
        name: 'web-ticketing',
        component: WebTicketing
    },
    {
        path: '/portfolio/crb-online',
        name: 'crb-online',
        component: CashReceiptBook
    },
    {
        path: '/portfolio/mini-projects',
        name: 'mini-projects',
        component: MiniProjects
    },
    // {
    //     path: '/linkedin',
    //     // beforeEnter() {
    //     //     location.href = 'https://www.linkedin.com/in/rando-dalawis-964a23117/'
    //     // }
    // },

];
const router =  new VueRouter({
    mode: 'history',
    routes,
    linkActiveClass: "active",
});

export default router;