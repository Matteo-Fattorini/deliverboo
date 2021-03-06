<template>
      <div class="container">
          <div class="row">
              <div class="col-4 d-flex m.0 p-0 ">
                  <div class=" rst-info d-flex flex-column justify-content-start align-items-start">
                      <h1> {{ resturants.name }}</h1>
                      <h5> {{ resturants.indirizzo }}</h5>
                      <div class="dist"></div>
                  </div>
                  
              </div>
              <div class="col-8 d-flex justify-content-center align-items-center ">
                  <div class="resturantImage m-0 p-0">
                     <img class='m-0 p-0' :src="resturants.imgUrl" alt="">
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
              resturants: { 
                             name : "Pizzeria da Gennaro",
                             indirizzo: "Via Europa, 23 Milano",
                             imgUrl: "img/restaurant/pizza-Bufalina.jpg",
                           },
        }
    },
    
}
</script>

<style lang="scss" scoped>
      

    .container{
        margin-top: 30px;
        margin-bottom: 50px;
        .row{
            .col-8{
                margin:0;
                padding:0;
                position: absolute;
                top:140px;
                right:0;
                z-index:2;
                .resturantImage {
                    min-width: 450px;
                    height: 450px;
                    overflow: hidden;
                    border-radius: 100%;
                    border:6px solid black;
                    img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        object-position: 50% 50%;
                    }
                }
            }
            .col-4{
                .rst-info{
                    margin: 20px 0 0 20px;
                    padding:0;
                    

                    h1{
                        font-size: 50px ;
                        font-weight: 900;
                        line-height:50px ;
                    }
                    h5{
                        
                        font-size: 18px ;
                        font-weight: 400;
                    }
                    .dist{
                        margin:30px 0;
                    }
                }
            
            }
        }
    }



    
    
</style>