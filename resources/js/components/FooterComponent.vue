<template>
  <footer>
    <div class="container p-5">
      <div class="row">
        <div class="col-3">
          <ul>
            <li>
              <h5>LAVORA CON NOI</h5>
            </li>
            <li v-for="(link, index) in work" :key="index">
              <a href="#">{{ link }}</a>
            </li>
          </ul>
        </div>
        <div
          class="col-3 d-flex flex-column justify-content-start align-items-start"
        >
          <ul>
            <li>
              <h5>NOTE LEGALI</h5>
            </li>
            <li v-for="(link, index) in legal" :key="index">
              <a href="#">{{ link }}</a>
            </li>
          </ul>
        </div>
        <div
          class="col-3 d-flex flex-column justify-content-start align-items-start"
        >
          <ul>
            <li>
              <h5>AIUTO</h5>
            </li>
            <li v-for="(link, index) in help" :key="index">
              <a href="#">{{ link }}</a>
            </li>
          </ul>
        </div>
        <div
          class="col-3 d-flex flex-column justify-content-start align-items-start"
        >
          <h5>SEGUICI SUI SOCIAL</h5>
          <div class="d-flex justify-content-between align-items-center social">
            <img src="img/homepage/icon/twitter.png" alt="" />
            <img src="img/homepage/icon/Facebook.png" alt="" />
            <img src="img/homepage/icon/Instagram.png" alt="" />
          </div>
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
footer {
  background-color: black;
  color: white;
  .container{
    height: 500px;
  }
  .row{
    padding-top: 50px;
  }

  a {
    color: #fff;
    text-decoration: none;
  }
  a:hover{
    text-decoration: underline;
  }
  img{
    height: 4vh;
  }
  div.social{
    width:50%;
  }
  li{
    line-height:3rem;
  }
}
</style>