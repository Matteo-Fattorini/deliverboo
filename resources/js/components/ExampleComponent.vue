<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <input
          placeholder="Cosa vuoi mangiare oggi?"
          class="mb-5"
          v-model="query"
          type="text"
        />
        <button @click="autoComplete()">CERCA</button>

        <div v-for="item in restaurants" v-bind:key="item.id" class="card mb-5">
          <h5 class="card-title">Nome Ristorante: {{ item.name }}</h5>

          <div class="card-header">Indirizzo: {{ item.address }}</div>

          <div class="card-body">
            <h3>Tipi di piatto:</h3>
            <div
              v-bind:key="type.id"
              v-for="type in item.get_types"
              class="type"
            >
              {{ type.name }}
            </div>
          </div>
          <div class="card-footer">
            <h3>I nostri piatti:</h3>
            <ul>
              <li v-bind:key="dish.id" v-for="dish in item.get_dishes">
                <a :href="'dishes/' + dish.id">{{ dish.name }}</a>
                <form method="PUT" :action="'dishes/' + dish.id + '/edit'">
                  <button type="submit">EDIT</button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      query: "",

      restaurants: [],
    };
  },
  methods: {
    autoComplete() {
      this.restaurants = [];

      axios
        .get("/api/restaurants", { params: { query: this.query } })
        .then((response) => {
          this.restaurants = response.data;
        });
      console.log(this.restaurants);
    },
  },
};
</script>
