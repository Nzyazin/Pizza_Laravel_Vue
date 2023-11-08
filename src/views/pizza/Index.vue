<template>
        <SiteHeader/>
        <PizzaList/>
</template>

<script>
import SiteHeader from "../components/SiteHeader.vue";
import Pizzas from "../product/Pizza.vue";
import PizzaList from "../product/PizzaList.vue";
export default {
  name: "Home.vue",
  components: {
      Pizzas,
      SiteHeader,
      PizzaList,
  },
    mounted() {
        $(document).trigger('change')
    }
}
</script>

<style scoped>

</style>
