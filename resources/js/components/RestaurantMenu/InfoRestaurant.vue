<template>
  <div class="container">
    <div class="row">
      <div class="col-6 info d-flex p-0">
        <div
          class="rst-info d-flex flex-column justify-content-start align-items-start"
        >
          <h1>{{ restaurantData.name }}</h1>
          <h5>{{ restaurantData.address }}</h5>
          <div class="dist"></div>
        </div>
      </div>
      <div
        class="col-6 circle d-flex justify-content-center align-items-center p-0"
      >
        <div class="resturantImage">
          <!--  <img class='m-0 p-0' :src="restaurantData.image_url" alt=""> -->
          <img :src="'/uploads/' + restaurantData.image_url" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "inforestaurant",
  props: {
    data: String,
  },
  data() {
    return {
      restaurantData: [],
    };
  },
  mounted: function () {
    var data = JSON.parse(this.data);
    this.restaurantData = data;
  },
};
</script>

<style lang="scss" scoped>
.container {
  margin-top: 30px;
  margin-bottom: 50px;
  .row {
    .circle {
      margin: 0;
      padding: 0;
      position: absolute;
      top: 140px;
      right: 40px;
      z-index: 2;
      .resturantImage {
        min-width: 450px;
        height: 450px;
        overflow: hidden;
        border-radius: 100%;
        border: 6px solid black;
        img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          object-position: 50% 50%;
        }
      }
    }
    .info {
      .rst-info {
        margin: 20px 0 0 20px;
        padding-right: 0;

        h1 {
          font-size: 50px;
          font-weight: 900;
          line-height: 50px;
        }
        h5 {
          font-size: 18px;
          font-weight: 400;
        }
        .dist {
          margin: 30px 0;
        }
      }
    }
  }
}
</style>