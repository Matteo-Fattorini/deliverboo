<template>
  <section id="resturant-type">
    <div class="container mt-5 mb-5">
      <div class="row m-4">
        <div class="col-12">
          <h1>Seleziona una tipologia di ristorante</h1>
        </div>
      </div>
      <div class="row m-4" id="resturants-buttons">
        <div class="col-12">
          <ul class="oval-button">
            <slot name="buttons"></slot>
          </ul>
        </div>
      </div>
      <div class="row m-4">
        <slot name="resturant"></slot>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ResturantSectionHome",
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