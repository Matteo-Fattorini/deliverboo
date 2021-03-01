<template>
      <div class="container">
          <div class="row">
              <div class="col-6 d-flex"
                v-for="(resturant, index) in resturants"
                :key="index">
                  <div class="resturantImage m-0 p-0">
                      <img class='m-0 p-0' :src="resturant.imgUrl" alt="">
                  </div>
                  <div class=" rst-info d-flex flex-column justify-content-center align-items-start">
                      <h1> {{ resturant.name }}</h1>
                      <h5> {{ resturant.indirizzo }}</h5>
                  </div>

              </div>
          </div>
      </div>
    
</template>

<script>
export default {
    name: 'inforestaurant',
    data(){
        return{
              resturants: [
                            { 
                             name: "Pizzeria da Gennaro",
                             indirizzo: "Via Europa, 23 Milano",
                             imgUrl: "img/restourant/pizza-Bufalina.jpg",
                            },
                           ],
        }
    }   
}
</script>

<style lang="scss" scoped>
      

    .container{
        margin-top: 30px;
        margin-bottom: 50px;
        .row{
            .col-6{
                margin:0;
                padding:0;
                .resturantImage {
                    min-width: 200px;
                    height: 200px;
                    overflow: hiden;
                    border-radius: 100%;
                    .img {
                     width: 100%;
                        height: 100%;
                        object-fit: cover;
                        object-position: 50% 50%;
                    }
                }
                .rst-info{
                    margin: 0 0 0 20px;
                    padding:0;

                    h1{
                        font-size: 60px ;
                        font-weight: 900;
                        line-height:60px ;
                    }
                    h5{
                        margin: 0 0 0 8px;
                        font-size: 18px ;
                        font-weight: 400;
                    }
                }
            }
        }
    }



    
    
</style>