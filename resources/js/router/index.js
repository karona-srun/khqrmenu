import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';
import SignIn from '../views/auth/SignIn.vue';
import AdminLayout from '../components/AdminLayout.vue';
import Dashboard from '../views/admin/Dashboard.vue';
import StoreList from '../views/store/List.vue';
import CreateStore from '../views/store/Create.vue';
import EditStore from '../views/store/Edit.vue';
import ShowStore from '../views/store/Show.vue';
import NotFound from '../views/NotFound.vue';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
        meta: { requiresAuth: false }, // Example meta field
    },
    {
        path: '/sign-in',
        name: 'SignIn',
        component: SignIn,
        meta: { requiresAuth: false },
    },
    {
        path: '/admin',
        component: AdminLayout,
        meta: { requiresAuth: true },
        children: [
            {
                path: 'dashboard',
                name: 'AdminDashboard',
                component: Dashboard,
                meta: { requiresAuth: true },
            },
        ],
    },
    {
        path: '/store',
        component: AdminLayout,
        // meta: { requiresAuth: true },
        children: [
            {
                path: 'list',
                name: 'StoreList',
                component: StoreList,
                // meta: { requiresAuth: true },
            },
            {
                path: 'create',
                name: 'CreateStore',
                component: CreateStore,
                meta: { requiresAuth: true },
            },
            {
                path: 'edit/:id(\\d+)', // Validate id as a number
                name: 'EditStore',
                component: EditStore,
                meta: { requiresAuth: true },
                props: true,
            },
            {
                path: 'show/:id(\\d+)', // Validate id as a number
                name: 'ShowStore',
                component: ShowStore,
                meta: { requiresAuth: true },
                props: true,
            },
        ],
    },
    {
        path: '/:catchAll(.*)',
        name: 'NotFound',
        component: NotFound,
        meta: { requiresAuth: false },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
