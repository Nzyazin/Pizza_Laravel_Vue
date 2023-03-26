import axios from "axios";

const state = {
    products: [],
    product: null,
}

const actions = {
    getProducts({commit}) {
        axios.get('http://admin.pizza.local/api/products')
            .then(resource => {
                commit('set_products', resource.data)
            })
    },
    getProduct({commit}, productId) {
        axios.get(`http://admin.pizza.local/api/products/${productId}`)
            .then(resource => {
                commit('set_product', resource.data)
            })
    }
}

const mutations = {
    set_products(state, products) {
        state.products = products
    },
    set_product(state, product) {
        state.product = product
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
