<template>
  <section id="resturant-type">
    <div class="container mt-5 mb-5">
      <div class="row m-4">
        <div class="col-12">
          <h1>Seleziona una tipologia di ristorante</h1>
        </div>
      </div>
      <div class="row m-4">
        <div class="col-12">
          <ul class="oval-button">
            <li
              class="notselected"
              v-for="(category, index) in categories"
              :key="index"
            >
              <img class="icon" :src="category.imgUrl" alt="" />
              {{ category.name }}
            </li>
          </ul>
        </div>
      </div>
      <div class="row m-4">
        <div
          class="col-6 d-flex justify-content-between align-items-center mb-3"
          v-for="(resturant, index) in resturants"
          :key="index"
        >
          <div class="d-flex justify-content-start align-items-center">
            <div
              class="d-flex justify-content-center align-items-center listImage m-3"
            >
              <img :src="resturant.imgUrl" alt="" />
            </div>
            <div
              class="d-flex flex-column justify-content-center align-items-start"
            >
              <h4 class="m-0 p-0">{{ resturant.name }}</h4>
              <p class="m-0 p-0">{{ resturant.indirizzo }}</p>
            </div>
          </div>
          <img class="icon" src="img/homepage/icon/menu.png" alt="" />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ResturantSectionHome",
  data() {
    return {
      categories: [
        {
          name: "Vegan",
          imgUrl: "img/homepage/icon/Vegan.png",
        },
        {
          name: "Pizza",
          imgUrl: "img/homepage/icon/Pizza.png",
        },
        {
          name: "Burger",
          imgUrl: "img/homepage/icon/Burger.png",
        },
        {
          name: "Orientale",
          imgUrl: "img/homepage/icon/Orientale.png",
        },
        {
          name: "Italiano",
          imgUrl: "img/homepage/icon/Italiano.png",
        },
        {
          name: "Bbq",
          imgUrl: "img/homepage/icon/Bbq.png",
        },
        {
          name: "Brasiliano",
          imgUrl: "img/homepage/icon/Brasiliano.png",
        },
        {
          name: "Pesce",
          imgUrl: "img/homepage/icon/Pesce.png",
        },
        {
          name: "Carne",
          imgUrl: "img/homepage/icon/Carne.png",
        },
        {
          name: "Fritto",
          imgUrl: "img/homepage/icon/Fritto.png",
        },
        {
          name: "Dessert",
          imgUrl: "img/homepage/icon/Dessert.png",
        },
        {
          name: "Pane",
          imgUrl: "img/homepage/icon/Pane.png",
        },
      ],
      resturants: [
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
          imgUrl: "img/restaurant/pizza-Bufalina.jpg",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
          imgUrl: "img/restaurant/pizza-Bufalina.jpg",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
          imgUrl: "img/restaurant/pizza-Bufalina.jpg",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
          imgUrl: "img/restaurant/pizza-Bufalina.jpg",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
          imgUrl: "img/restaurant/pizza-Bufalina.jpg",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
          imgUrl: "img/restaurant/pizza-Bufalina.jpg",
        },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
ul {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0;
  padding: 0;
  width: 100%;
}
.icon {
  height: 30px;
}
</style>