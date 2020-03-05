import VueRouter from "vue-router";
import Home from "./pages/Home";
import Register from "./pages/Register";
import Login from "./pages/Login";
import Dashboard from "./pages/user/Dashboard";
import CreatePackage from "./pages/user/CreatePackage";

const routes = [
    {
        path: "/",
        name: "home",
        component: Home,
        meta: {
            auth: undefined
        }
    },
    {
        path: "/register",
        name: "register",
        component: Register,
        meta: {
            auth: false
        }
    },
    {
        path: "/login",
        name: "login",
        component: Login,
        meta: {
            auth: false
        }
    },
    {
        path: "/dashboard",
        name: "dashboard",
        component: Dashboard,
        meta: {
            auth: true
        }
    },
    {
        path: "/package/create",
        name: "package.create",
        component: CreatePackage,
        meta: {
            auth: true
        }
    }
];
const router = new VueRouter({
    history: true,
    mode: "history",
    routes
});
export default router;
