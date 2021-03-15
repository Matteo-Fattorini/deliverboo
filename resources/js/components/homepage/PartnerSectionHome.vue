<template>
  <section id="becomePartner" class="d-flex flex-column justify-content-end">
    <div class="container mt-5 mb-5 d-flex justify-content-start align-items-center" >
      <div class="row ">
        <div v-if="auth != 1"  class="col-12 p-5">
          <h1>
            Sei un ristoratore? <br />
            Diventa nostro partner
          </h1>
          <div class="mt-5">
            
            <a :href="loginlink" class="primary-button">Effettua il login</a>
            <span> - o - </span>
            <a :href="registerlink" class="primary-button">Registrati Subito</a>
            
          </div>
        </div>
        <div v-else class="col-12 p-5">
          <h1>
            Il tuo ristorante è online. <br />
            Inizia a vendere subito!
          </h1>
          <div class="mt-5">
            
            <a :href="dashboardlink" class="primary-button">La tua dashboard</a>
            
            
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
    registerlink: String,
    dashboardlink: String,
    auth: Number,
  }
};
</script>

<style lang="scss" scoped>
#becomePartner {
  height: 70vh;
  position:relative;
  background-size: cover;
  background-position: center;
  background-color: rgba(0, 0, 0, 0.6);
  background-blend-mode: multiply;
  h1 {
    color: #fff;
  }
  .container{
    height: 100%;
  }
  // #centerMe{
  //   position:absolute;
  //   top: 50%;
  //   transform: translateY(-50%);
  // }
  span {
    color: #fff;
  }
  // div.container{
  //   position:absolute;
  //   bottom: 0;
  // }
}
</style>