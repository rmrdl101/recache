// import './bootstrap';

import { createApp } from 'vue';
import Dashboard from './Pages/Dashboard.vue';

const app = createApp({});
app.component('dashboard', Dashboard);
app.mount('#app');
