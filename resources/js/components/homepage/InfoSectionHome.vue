<template>
  <section id="infoSectionHome">
    <div class="container mt-5 mb-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div
          class="col-sm-12 col-lg-6 d-flex justify-content-center align-items-center"
        >
          <img src="img/homepage/logo_dev_2.png" alt="" />
        </div>
        <div
          class="col-sm-12 col-lg-6 d-flex flex-column justify-content-center align-items-center text-center"
        >
          <h1>E' ora di mangiare. Prenota con Deliveboo.</h1>
          <p>
            La fame ti ha preso di sprovvista? Con pochi click puoi ordinare
            direttamente dai tuoi ristoranti preferiti. <br />
            Il cibo arriverà direttamente a casa tua!
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
  outline: none !important;
  &:hover {
    outline: none !important;
  }
}
@media (max-width: 576px) {
  img {
    height: 200px;
  }
}
@media (min-width:577px) and (max-width: 768px) {
  img {
    height: 250px;
  }
}
@media (min-width:769px) and (max-width: 992px){
  img{
    height: 300px;
  }
}
@media (min-width: 1200px) {
  img{
    height: 350px;
  }
 }
</style>