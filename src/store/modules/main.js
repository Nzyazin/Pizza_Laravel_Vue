import axios from "axios";

const state = {
    products: [],
    product: null,
}

const actions = {
    getProducts({commit}) {
        axios.get('http://127.0.0.1:8000/api/products')
            .then(resource => {
                commit('set_products', resource.data)
            })
    },
    getProduct({commit}, productId) {
        axios.get(`http://127.0.0.1:8000/api/products/${productId}`)
            .then(resource => {
                commit('set_product', resource.data)
                console.log(resource.data)
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
