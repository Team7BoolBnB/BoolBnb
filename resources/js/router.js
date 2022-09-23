import VueRouter from "vue-router";
import Vue from "vue";
import Home from "./view/Home.vue"
import AdvancedSearch from "./view/AdvancedSearch.vue"
Vue.use(VueRouter);

const routes = [
    {
        path: "/" ,component: Home,name: "home.index",
        path: "/advanced-search" , component: AdvancedSearch ,name: "home.index",
        /*  path: "/accommodation/:{id}" ,component: Home,name: "home.index", */

    }
]


const router= new VueRouter({
    routes,
    mode:"history"
})

export default router