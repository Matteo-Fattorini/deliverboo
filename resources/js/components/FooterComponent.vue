<template>
  <footer>
    <div class="container  ">
      <div class="row">
        <div
          class="col-3 d-flex flex-column justify-content-start align-items-start  "
        >
          <ul >
            <li>
              <h6>LAVORA CON NOI</h6>
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
        <div class="col-3 d-flex flex-column  justify-content-start align-items-start">
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
    .container{
     height: 500px;
     width: 100vw;
     
     .row{
        padding-top: 50px;
        .col-3{
          padding-left: 15px;
          h6{
              color: white;
              font-weight:600;
            }
          ul{
            margin: 0;
            padding:0;
             h6{
                 color: white;
                 font-weight:600;
               }
            li{
                  }
                  a{
                    color: white;
                    font-weight: 300;
                    font-size:11pt ;
                    line-height: 40px;
                     &:hover{
                     color:#0F84FF;
                     text-decoration-line:none ;
                     }
              }
          }
        }
     }

     
   }
</style>