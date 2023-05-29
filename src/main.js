import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import axios from "axios";
import store from './store';
import VueTheMask from 'vue-the-mask';


const app = createApp(App)

app.use(VueTheMask)

app.use(router)
app.config.globalProperties.axios = axios
app.use(store)
app.mount('#app')
