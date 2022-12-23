<template>
    <div>
        <Header/>
        <PizzaCard v-for="product in products" :key="product.id" :product="product"/>
    </div>

</template>

<script>
import PizzaCard from "../layouts/PizzaCard.vue";
import Header from "../layouts/Header.vue";
export default {
  components: {
      Header,
      PizzaCard
  },
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

</style>
