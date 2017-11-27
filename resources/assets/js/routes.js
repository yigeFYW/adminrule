import VueRouter from 'vue-router'

let routes = [
    {
        path:"/",
        component:require("./components/IndexComm"),
        children:[
            {
                path:'login',
                name:"login",
                component:require("./components/Login")
            },
            {
                path:'about',
                name:"about",
                component:require("./components/About")
            },
            {
                path:'/',
                name:"index",
                component:require("./components/Home")
            },
        ]
    }
];

export default new VueRouter({
    mode:'history',
    routes
})

