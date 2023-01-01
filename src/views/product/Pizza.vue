<template>
    <Header/>
    <div>{{product}}</div>
    <div class="row mt-5" v-if="product">
        <div class="col-4">
            <img :src="product.image" class="w-100" alt=""/>
        </div>
        <div class="col-8">
            <h1>{{ product.title }}</h1>
            <h3>{{ product.price }}</h3>

            <input type="text" class="text-center col-1 mr-2 p-1" />
            <button class="btn btn-primary" @click="">Добавить</button>

            <p class="mt-4">{{ product.description }}</p>
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
    }
}
</script>
