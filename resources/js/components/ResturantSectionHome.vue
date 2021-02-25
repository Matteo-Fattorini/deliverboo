<template>
  <section id="resturant-type">
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-12">
          <h1>Seleziona una tipologia di ristorante</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul>
            <li
              class="oval-button"
              v-for="(category, index) in categories"
              :key="index"
            >
              {{ category }}
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-6 d-flex justify-content-around align-items-center" v-for="(resturant, index) in resturants" :key="index">
            <div>
              <h4>{{ resturant.name }}</h4>
              <p>{{ resturant.indirizzo }}</p>
            </div>
            <span>Menù</span>
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
        "Vegan",
        "Pizza",
        "Burger",
        "Orientale",
        "Italiano",
        "Bbq",
        "Brasiliano",
        "Pesce",
        "Carne",
        "Fritto",
        "Dessert",
        "Pane",
      ],
      resturants: [
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
        },
        {
          name: "Pizzeria da Gennaro",
          indirizzo: "Via Europa, 23 Milano",
        },
      ],
    };
  },
};
</script>

<style scoped>
ul {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0;
  padding: 0;
  width: 100%;
}
</style>