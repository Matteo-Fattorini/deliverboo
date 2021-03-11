<template>
  <div class="container">
    <div class="row m-3">
      <div class="col d-flex justify-content-start align-items-center">
        <div class="resturantImage m-5">
          <img :src="restaurant.image_url" alt="" />
        </div>
        <div>
          <h1>{{ restaurant.name }}</h1>
          <p>{{ restaurant.address }}</p>
        </div>
      </div>
    </div>
    <div class="row m-3">
      <div
        class="col-4 d-flex justify-content-center align-items-center new-dish-button"
      >
        <a :href="createdish">
          <div
            class="d-flex flex-column justify-content-center align-items-center"
          >
            <img src="/img/dashboard/icon/new.png" alt="" />
            <p>Crea un nuovo piatto</p>
          </div>
        </a>
      </div>
      <div
        class="col-4 d-flex flex-column justify-content-center align-items-center orders-button"
      >
        <a :href="orderlist">
          <div
            class="d-flex flex-column justify-content-center align-items-center"
          >
            <img src="/img/dashboard/icon/orders.png" alt="" />
            <p>Visualizza gli ordini</p>
          </div>
        </a>
      </div>
      <div
        class="col-4 d-flex flex-column justify-content-center align-items-center orders-button"
      >
        <a href="/chart">
          <div>
            <img src="/img/dashboard/icon/statistic.png" alt="" />
            <p>Visualizza le statistiche</p>
          </div>
        </a>
      </div>
    </div>
    <div class="row m-3">
      <div class="col">
        <h1>Gestione Menù</h1>
        <input
          class="custom-input"
          type="search"
          name=""
          id=""
          placeholder="Cerca un piatto"
        />
      </div>
    </div>
    <div class="row m-3">
      <div class="col-12">
        <h1>Tutti i piatti</h1>
      </div>
    </div>
    <div class="row m-2" v-for="(dish, index) in dishes" :key="index">
      <div class="col-2 d-flex justify-content-center align-items-center">
        <div>
          <img class="listImage" :src="dish.image_url" alt="" />
        </div>
      </div>
      <div class="col-3 d-flex justify-content-center align-items-center">
        <p>
          <strong>{{ dish.name }}</strong>
        </p>
      </div>
      <div class="col-3 d-flex justify-content-center align-items-center">
        <p>{{ dish.price }}€</p>
      </div>
      <div class="col-4 d-flex justify-content-center align-items-center">
        <ul
          class="list-style-none d-flex justify-content-between align-items-center items-buttons"
        >
          <li class="m-2">
            <a :href="'/dishes/' + dish.id"
              ><img src="/img/dashboard/icon/view-order-click.png" alt=""
            /></a>
          </li>
          <li class="m-2">
            <a :href="'/dishes/' + dish.id + '/edit'"
              ><img src="/img/dashboard/icon/edit-little.png" alt=""
            /></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "DashboardComponent",
  props: {
    restaurantdata: String,
    dishesdata: String,
    createdish: String,
    orderlist: String,
  },
  data() {
    return {
      restaurant: {},
      dishes: {},
    };
  },
  mounted() {
    var restaurantData = JSON.parse(this.restaurantdata);
    this.restaurant = restaurantData;
    console.log(this.restaurant);
    var dishesData = JSON.parse(this.dishesdata);
    this.dishes = dishesData;
    console.log(this.dishes);
  },
};
</script>

<style lang="scss" scoped>
.items-buttons img {
  height: 30px;
}
.custom-input {
  width: 50%;
}
.new-dish-button img,
.orders-button img {
  height: 30px;
  width: auto;
  margin: 0;
}
</style>