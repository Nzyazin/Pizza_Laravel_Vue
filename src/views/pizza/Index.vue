<template>
        <Header/>
        <PizzaList/>
</template>

<script>
import Header from "../layouts/Header.vue";
import Pizzas from "../product/Pizza.vue";
import PizzaList from "../product/PizzaList.vue";
export default {
  name: "Home.vue",
  components: {
      Pizzas,
      Header,
      PizzaList,
  },
    mounted() {
        $(document).trigger('change')
    }
}
</script>

<style scoped>

</style>
