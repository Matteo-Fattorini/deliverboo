<template>
  <footer>
    <div class="container mt-5">
      <div class="row">
        <div
          class="col-3 d-flex flex-column justify-content-center align-items-start"
        >
          <ul>
            <li>
              <h5>LAVORA CON NOI</h5>
            </li>
            <li v-for="(link, index) in work" :key="index">
              <a href="#">{{ link }}</a>
            </li>
          </ul>
        </div>
        <div class="col-3 d-flex flex-column">
          <ul>
            <li>
              <h6>NOTE LEGALI</h6>
            </li>
            <li v-for="(link, index) in legal" :key="index">
              <a href="#">{{ link }}</a>
            </li>
          </ul>
        </div>
        <div class="col-3 d-flex flex-column">
          <ul>
            <li>
              <h6>AIUTO</h6>
            </li>
            <li v-for="(link, index) in help" :key="index">
              <a href="#">{{ link }}</a>
            </li>
          </ul>
        </div>
        <div class="col-3 d-flex flex-column">
          <h6>SEGUICI SUI SOCIAL</h6>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "FooterComponent",
  data() {
    return {
      work: ["Diventa Raider", "Diventa nostro Partner", "Lavora con noi"],
      legal: ["Termini & Condizioni", "Informativa sulla Privacy", "Cookies"],
      help: ["Contatti", "FAQ", "Tipi di cucina", "Mappa del sito"],
    };
  },
};
</script>

<style lang="scss" scoped>
</style>