<template>
  <div class="container">
    <div class="row" v-for="order in orders" :key="order.id">
      {{order.id}}
    </div>
  </div>
</template>

<script>
export default {
  name: "OrdersComponent",
  props: {
    ordersarr: String
  },
  data() {
    return {
      orders:[]
    };
  },
  mounted() {
    this.orders = JSON.parse(this.ordersarr);
    console.log(this.orders);
  },
  
  methods: {

  },
};
</script>

<style lang="scss" scoped>

</style>