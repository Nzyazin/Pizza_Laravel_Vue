<template>
    <Header/>
    <div class="row mt-5" v-if="product">
        <div class="col-4">
            <img :src="product.preview_image" class="w-100" alt=""/>
        </div>
        <div class="col-8">
            <h1>{{ product.title }}</h1>
            <h3>{{ product.price }}</h3>
            <p class="mt-4">{{ product.description }}</p>
            <button class="btn btn-primary marg-bot-21" @click="addProductToCart">Добавить</button>
            
        </div>
    </div>
</template>

<script>
import Header from "../layouts/Header.vue";
export default {
    components: {
        Header
    },
    props: ["id"],
    mounted() {
        this.$store.dispatch('main/getProduct', this.id)
    },
    computed: {
        product() {
            return this.$store.state.main.product;
        }
    },
    methods: {
        addProductToCart() {
            this.$store.dispatch('cart/addProductCart', {
                product: this.product,
                quantity: 1,
            })
        }
    }
}
</script>

<style>
.marg-bot-21 {
    margin-bottom: 21px;
}
</style>
