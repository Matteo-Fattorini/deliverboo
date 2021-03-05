<template>
  <div>
    <HeaderHome>
      <NavComponent slot="navbar"></NavComponent>
    </HeaderHome>
    <ResturantSectionHome>
      <ButtonsComponent
        slot="buttons"
        v-for="(category, index) in categories"
        :key="index"
        :categoryName="category.name"
        :categoryImg="category.imgUrl"
      />
      <ResturantComponent
        slot="resturant"
        v-for="(resturant, index) in resturants"
        :key="index"
        :resturantName="resturant.name"
        :resturantImg="resturant.imgUrl"
        :resturantAddress="resturant.indirizzo"
      />
    </ResturantSectionHome>
  </div>
</template>
<script>
import HeaderHome from "./HeaderHome.vue";
import NavComponent from "./../NavComponent.vue";
import ResturantSectionHome from "./ResturantSectionHome.vue";
import ButtonsComponent from "./ButtonsComponent.vue";
import ResturantComponent from "./ResturantComponent.vue";
export default {
  name: "JoinComponent",
  components: {
    HeaderHome,
    ResturantSectionHome,
    NavComponent,
    ButtonsComponent,
    ResturantComponent,
  },
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
  methods:{
      search(){
          
      }
  }
};
</script>

<style lang="scss" scoped>
</style>


