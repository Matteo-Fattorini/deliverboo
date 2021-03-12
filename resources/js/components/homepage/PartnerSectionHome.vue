<template>
  <section id="becomePartner" class="d-flex flex-column justify-content-end">
    <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col p-5">
          <h1>
            Sei un ristoratore? <br />
            Diventa nostro <br />
            Partner
          </h1>
          <div class="mt-5">
            <a :href="loginlink" class="primary-button">Effettua il login</a>
            <span> - o - </span>
            <a :href="registerlink" class="primary-button">Registrati Subito</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "PartnerSectionHome",
  props:{
    loginlink: String,
    registerlink: String
  }
};
</script>

<style lang="scss" scoped>
#becomePartner {
  height: 70vh;
  background-size: cover;
  background-position: center;
  background-color: rgba(0, 0, 0, 0.6);
  background-blend-mode: multiply;
  h1 {
    color: #fff;
  }
  span {
    color: #fff;
  }
  // div.container{
  //   position:absolute;
  //   bottom: 0;
  // }
}
</style>