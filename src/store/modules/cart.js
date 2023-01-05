const state = {
    cart: []
}

const actions = {
    addProductCart({commit}, {product, quantity}) {
        commit('add_to_cart', {product, quantity})
    },
    increaseCart({commit}, {product, quantity}) {
        commit('increase_cart', {product, quantity})
    }
}

const mutations = {
    add_to_cart(state, {product, quantity}) {
        let productCart = state.cart.find(item => {
            return item.product.id === product.id
        })
        if (productCart) {
            productCart.quantity += quantity
            return
        }
        state.cart.push({
            product,
            quantity
        })
    },
    increase_cart(state, {product, quantity}) {
        let productCart = state.cart.find(item => {
            return item.product.id
        })
        if (productCart) {
            productCart.quantity += quantity
            return
        }
        state.cart.push({
            product,
            quantity
        })
    }
}

const getters = {
    cartItemCount(state) {
        let total = 0;

        state.cart.forEach(item => {
            total += item.quantity
        })

        return total
    },
    cartPrice(state) {
        let total = 0;

        state.cart.forEach(item => {
            total += item.product.price * item.quantity
        })

        return total
    }
}

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
