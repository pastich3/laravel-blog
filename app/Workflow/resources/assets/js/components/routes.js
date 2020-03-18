import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

const router = new VueRouter({
	mode: 'history',
	routes: [
        {
            path: '/workflowBuilder/{workflowSlug}',
            component: require('./WorkflowBuilder/WorkflowBuilder').default,
        },
    ]
});
export default router;