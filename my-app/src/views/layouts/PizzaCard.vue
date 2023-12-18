<template>
    <div class="col-3 mt-3">
        <div class="card h-100 text-left">
            <img class="w-100" :src="product.preview_image" alt />
            <div class="card-body">
                <h4 class="card-title">
                    <router-link :to="{name: 'product', params: {id: product.id}}">{{ product.title }}</router-link>
                </h4>
                <strong><del v-if="product.old_price">Р {{ product.old_price }}</del> Р {{product.price}} </strong>
                <p class="card-text">{{product.description}}</p>
            </div>
            <div class="pad-left pb-3 flex-container">
                <button class="btn btn-secondary btn-400" @click="addProductToCart">Добавить</button>
            </div>
        </div>
    </div>
</template>

<script>
import Header from "./Header.vue";
export default {
    props: ['product'],
    components: {
        Header
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

<style scoped>

@media (min-width: 578px) {
    .pad-left {
        padding-left: 1rem;
    }
}



@media (max-width: 578px) {
    .flex-container {
        display: flex;
        justify-content: center;
    }

    .card-title {
        font-size: calc(1rem + .3vw);
    }
    
    .btn {
        font-size: 0.7rem;
    }
}

</style>
