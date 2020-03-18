Vue.component('workflow-builder', require('./components/WorkflowBuilder/WorkflowBuilder').default);

import Vue from 'vue';
import Routes from './components/routes.js';
import store from './components/store';

const app = new Vue({
    el: '#workflowApp',
    router: Routes,
    store: store,
    render: h => h(App),
});

export default app;
