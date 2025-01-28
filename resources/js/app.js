import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import vuetify from './plugins/vuetify';

import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'bootstrap';

// Import Popper.js (comes with Bootstrap 5 but ensure it's loaded)
import '@popperjs/core';
const app = createApp(App);

app.use(router).use(vuetify);
app.mount('#app');
