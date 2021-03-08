<template>
  <div>
    <header>
      <div id="bg">
        <NavComponent :homelink="homelink" :loginlink="loginlink"></NavComponent>
        <div class="d-flex justify-content-center align-items-center">
          <input
            v-model="query"
            class="custom-input"
            type="text"
            name=""
            id=""
            placeholder="Cosa vuoi mangiare?"
          />
          <button @click="search()">Cerca</button>
        </div>
      </div>
    </header>
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
        v-for="(restaurant, index) in restaurants"
        :key="index"
        :resturantName="restaurant.name"
        :resturantImg="restaurant.image_url"
        :resturantAddress="restaurant.address"
        :link="'/restaurant/' + restaurant.id"
      />
    </ResturantSectionHome>
  </div>
</template>
<script>
import NavComponent from "./../NavComponent.vue";
import ResturantSectionHome from "./ResturantSectionHome.vue";
import ButtonsComponent from "./ButtonsComponent.vue";
import ResturantComponent from "./ResturantComponent.vue";
export default {
  name: "JoinComponent",
  components: {
    ResturantSectionHome,
    NavComponent,
    ButtonsComponent,
    ResturantComponent,
  },
  props:{
    homelink: String,
    loginlink: String
  },
  data() {
    return {
      query: "",
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
      restaurants: [],
    };
  },
  methods: {
    search() {
      this.restaurants = [];
      console.log(this.query);
      axios
        .get("/api/restaurants", {
          params: {
            query: this.query,
          },
        })
        .then((response) => {
          const array = response.data;
          this.restaurants = array;
        });
      console.log(this.restaurants);
    },
  },
};
</script>

<style lang="scss" scoped>
div {
  height: calc(100% - 100px);
}
.custom-input {
  width: 50%;
}

</style>


