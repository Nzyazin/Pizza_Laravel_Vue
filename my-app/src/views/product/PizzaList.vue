<template>
    <div class="d-flex align-items-stretch flex-wrap">
        <pizza-card v-for="product in products" :key="product.id" :product="product"/>
    </div>
</template>

<script>
import PizzaCard from "../layouts/PizzaCard.vue";
export default {
    components: {
        PizzaCard
    },
    mounted() {
        this.$store.dispatch('main/getProducts')
    },
    computed: {
        products() {
            return this.$store.state.main.products
        }
    }
};
</script>
