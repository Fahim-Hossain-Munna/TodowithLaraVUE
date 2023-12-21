import { createRouter,createWebHistory } from "vue-router";
import Edit from '../views/Edit.vue';
import Todo from '../views/Todo.vue';

const routes = [
    {
        path: "/",
        component: Todo,
        name: "Todo"
    },
    {
        path: "/edit/:todo",
        component: Edit,
        name: "Edit",
        props: true
    },
];

const router = createRouter({
    history:createWebHistory(),
    routes
});

export default router;
