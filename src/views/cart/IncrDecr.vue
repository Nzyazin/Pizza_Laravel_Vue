<template>
    <tr>
        <td>
            <div class="thumb-box"> <a href="shop-details-1.html" class="thumb">
                <img :src="product.product.preview_image" :alt="product.product.title">
            </a> <a href="shop-details-1.html" class="title">
                <h5> {{ product.product.title }} </h5>
            </a> </div>
        </td>
        <td>Р {{ product.product.price }}</td>
        <td class="qty">
            <div class="qtySelector text-center">
                <span @click="decreaseToCart" class="decreaseQty"><i class="flaticon-minus"></i> </span>
                <div class="qtyValue" style="margin: 0 auto;">{{ product.quantity }}</div>
                <span @click="increaseToCart" class="increaseQty"> <i class="flaticon-plus"></i> </span> </div>
        </td>
        <td class="sub-total">Р {{ product.product.price * product.quantity }}</td>
        <td>
            <div @click="removeToProduct" class="remove"> <i class="flaticon-cross"></i> </div>
        </td>
    </tr>
</template>

<script>
import Header from "../layouts/Header.vue";
export default {
    props: ['product'],
    components: {
        Header
    },
    methods: {
        increaseToCart() {
            this.$store.dispatch('cart/increaseCart', {
                product: this.product,
            })
        },
        decreaseToCart() {
            this.$store.dispatch('cart/decreaseCart', {
                product: this.product,
                quantity: 1,
            })
        },
        removeToProduct() {
            this.$store.dispatch('cart/removeProduct', this.product)
        },
    }
}
</script>

<style scoped>

</style>
