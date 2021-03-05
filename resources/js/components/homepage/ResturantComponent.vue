<template>
  <div class="col-6 d-flex justify-content-between align-items-center mb-3">
    <div class="d-flex justify-content-start align-items-center">
      <div
        class="d-flex justify-content-center align-items-center listImage m-3"
      >
        <img :src="resturantImg" alt="" />
      </div>
      <div class="d-flex flex-column justify-content-center align-items-start">
        <h4 class="m-0 p-0">{{ resturantName }}</h4>
        <p class="m-0 p-0">{{ resturantAddress }}</p>
      </div>
    </div>
    <img class="icon" src="img/homepage/icon/menu.png" alt="" />
  </div>
</template>

<script>
export default {
    name:'ResturantComponent',
    props:{
        resturantImg: String,
        resturantName: String,
        resturantAddress: String
    },
};
</script>

<style>
</style>