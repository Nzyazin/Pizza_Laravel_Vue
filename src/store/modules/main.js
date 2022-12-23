import axios from "axios";

const state = {
    products: []
}

const actions = {
    getProducts({commit}) {
        axios.get('http://127.0.0.1:8000/api/pizza')
            .then(resource => {
                commit('set_products', resource.data.data)
            })
    }
}

const mutations = {
    set_products(state, products) {
        state.products = products
    }
}

const getters = {}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
