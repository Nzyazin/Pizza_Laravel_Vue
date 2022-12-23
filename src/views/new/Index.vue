<template>
    <header>
    </header>
    <h1>Products</h1>
    <div class="container">
        <div class="products">
            <div v-for="product in products"
                 :key="product.title">
                {{ product.title }}
                <img width="180" :src="product.image_url"/>
                <div>Р {{product.price}}</div>
                <button @click="">Add to cart</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "new",
    mounted() {
        this.$store.dispatch('main/getProducts')
    },
    computed: {
        products() {
            return this.$store.state.main.products
        }
    },
    methods: {

    }
}
</script>

<style scoped>
    .products {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
</style>
