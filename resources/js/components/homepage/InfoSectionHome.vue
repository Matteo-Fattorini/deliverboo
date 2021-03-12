<template>
  <section id="infoSectionHome">
    <div class="container mt-5 mb-5 ">
      <div class="row d-flex justify-content-center align-items-center">
        <div
          class="col-6 d-flex justify-align-content-center align-items-center"
        >
          <img src="img/homepage/logo_dev_2.png" alt="" />
        </div>
        <div
          class="col-6 d-flex flex-column justify-content-center align-items-center"
        >
          <h1>E' ora di mangiare. Prenota con Deliveboo.</h1>
          <p>
            La fame ti ha preso di sprovvista? Con pochi click puoi ordinare direttamente dai tuoi ristoranti preferiti. <br> Il cibo arriverà direttamente a casa tua!
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "InfoSectionHome",
};
</script>

<style lang="scss" scoped>
#infoSectionHome {
  height: 60vh;
}
img {
  height: 300px;
  outline:none;
}
</style>