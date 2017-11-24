import VueRouter from 'vue-router'

let routes = [
    {
        path:"/",
        component:require("./components/Home")
    },
    {
        path:"/about",
        component:require("./components/About")
    },
    {
        path:"/login",
        component:require("./components/Login")
    }
];

export default new VueRouter({

    mode:'history',
    routes
})

