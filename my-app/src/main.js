import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from "axios";
import store from './store';
import VueTheMask from 'vue-the-mask';
import "@/assets/css/style.css";
import "@/assets/css/bootstrap.5.1.1.min.css";
import "@/assets/js/main.js";
import "@/assets/fonts/flaticon.css";
import $ from 'jquery';
window.$ = $;


const app = createApp(App)

app.use(VueTheMask)
app.use(router)
app.config.globalProperties.axios = axios
app.use(store)
app.mount('#app')