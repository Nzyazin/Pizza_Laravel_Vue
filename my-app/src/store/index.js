import Vuex from 'vuex';

import main from './modules/main.js';
import cart from './modules/cart.js';
export default new Vuex.Store({
    modules: {
        main,
        cart
    }
})
