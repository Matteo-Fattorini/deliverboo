<template>
  <section id="menu">

    <div class="container restaurant">
        <div class="row">
            <div class="col-12">
                <h1> Menù</h1>
            </div>
            <div 
             class="col-12">
                <ul class="oval-button ">
                  <li 
                     v-for="( category, index) in dCategories"
                     :key='index'
                     @click='selectCategory(category.name)'
                     :class="{'selected' : category.name === categorySelect, 'notselected': category.name != categorySelect}"> 
                     
                    <img class="icon" :src="category.imgUrl" alt="" />
                    <!-- ondragstart="return false" 
                         onselectstart="return false"
                         evita evidenziazione del testo -->
                    <span 
                    ondragstart="return false" 
                    onselectstart="return false" >
                     {{ category.name }}
                    </span>
                 </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container menu ">
        <div class="row ">
            <div class="col-12"
            v-if='$data.categoryDishes == true'>
                <!-- categoria -->
                <h2>Pizza</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 p-0">
                <div class="dish d-flex  justify-content-start align-items-center"
                 v-for="(dish, i) in filtered"
                 :key="i">
                        <div class="listImage">
                           <img  class=" img " :src="dish.imgUrl" alt="">
                        </div>
                        <div class="dishtext">
                           <h3>{{dish.name}}</h3>
                           <h5>{{dish.description}}</h5>
                        </div>
                        <div class=" price d-flex justify-content-end align-items-center">
                            <h1>{{dish.price}}€</h1>
                        </div>
                        <div class="counter-box  d-flex   justify-content-end align-items-center ">
                            <div class="counter  d-flex justify-content-between ">
                                <div class=" bt " @click="changeCounter('-')" ><span>-</span></div>
                                <div class=" "><span>{{ $data.ncounter}}</span></div>
                                <div class=" bt " @click="changeCounter('+')" ><span>+</span></div>
                            </div>
                        </div>

                        <div class="btn-black d-flex justify-content-center align-items-center">
                            <a href="">ORDINA</a>
                        </div>
                 </div>
            </div>
        </div>
    </div>
  </section>
    
</template>


<script>
export default {
    name:'TypeMenu',
    data() {
    return {
      ncounter: 0,
      mincounter: 0,
      maxcounter: 10,
      categorySelect:'',
      dCategories:[
          {
              name:"Pizza",
              imgUrl: "img/homepage/icon/Pizza.png",
          },
          {
              name: "Fritto",
              imgUrl: "img/homepage/icon/Fritto.png",
          },
          {
              name: "Dessert",
              imgUrl: "img/homepage/icon/Dessert.png",
          },
      ],

      dishes : [
        {
          name: "Margherita",
          description: "Pomodoro, Mozzarella, basilico, olio EVO",
          price: 6,
          imgUrl: "img/restaurant/pizza-margherita.jpg",
          category: "Pizza",
    
        },
        {
          name: "Margherita",
          description: "Pomodoro, Mozzarella, basilico, olio EVO",
          price: 6,
          imgUrl: "img/restaurant/pizza-margherita.jpg",
          category: "Pizza",
    
        },
        {
          name: "Margherita",
          description: "Pomodoro, Mozzarella, basilico, olio EVO",
          price: 6,
          imgUrl: "img/restaurant/pizza-margherita.jpg",
          category: "Pizza",
    
        },
        {
          name: "Fritto Misto",
          description: "Arancino, Suppli, Frittatina di pasta, Verdure in pastella, pane fritto",
          price: 11,
          imgUrl: "img/restaurant/fritto-misto.jpg",
          category: "Fritto",
    
        },
        {
          name: "Fritto Misto",
          description: "Arancino, Suppli, Frittatina di pasta, Verdure in pastella, pane fritto",
          price: 11,
          imgUrl: "img/restaurant/fritto-misto.jpg",
          category: "Fritto",
    
        },
        {
          name: "Fritto Misto",
          description: "Arancino, Suppli, Frittatina di pasta, Verdure in pastella, pane fritto",
          price: 11,
          imgUrl: "img/restaurant/fritto-misto.jpg",
          category: "Fritto",
    
        },
        {
          name: "Tiramisù",
          description: "Savoiardi, Crema al mascarpone, Caffè, Cacao",
          price: 5,
          imgUrl: "img/restaurant/dessert-tiramisu.jpg",
          category: "Dessert",
          
        },
        {
          name: "Tiramisù",
          description: "Savoiardi, Crema al mascarpone, Caffè, Cacao",
          price: 5,
          imgUrl: "img/restaurant/dessert-tiramisu.jpg",
          category: "Dessert",
          
        },
        {
          name: "Tiramisù",
          description: "Savoiardi, Crema al mascarpone, Caffè, Cacao",
          price: 5,
          imgUrl: "img/restaurant/dessert-tiramisu.jpg",
          category: "Dessert",
          
        },  
      ],
      
    };
  },
  computed:{
      filtered(){
          return this.dishes.filter( e =>{
              return e.category.includes(this.categorySelect)
          })
      }
      
    
  },
  methods:{

      changeCounter(direction){
        
           console.log('changeCounter :' + direction);
          if(direction === '+'){
              this.ncounter++ ;     
             } else if(direction === '-'){
                  this.ncounter--;
          }
      },

      selectCategory(category){
               return this.categorySelect = category,
               console.log(this.categorySelect)
            },
         


      

    
    
         
     
    
   
    

  },
  
}

    

</script>

<style lang="scss" scoped>

    .restaurant{
        margin-top: 15px;
        margin-bottom: 15px;
        .row{
            .col-12{
                    h1{
                        margin-bottom: 30px;
                        font-size: 50px ;
                        font-weight: 900;
                        line-height:50px ;
                    }
                    
                }
            }
    }
    .menu{
        margin-top: 25px;
        margin-bottom: 25px;
        .row{
            .col-12{
                    margin:20px 0px;
                    .dish{
                        
                        padding:20px 0;
                        .dishImage{
                            width: 10%;
                        }

                        .dishtext{
                        margin:0 15px;
                        width: 30%;
                           h3{
                            font-size:30px;
                            font-weight: 700;
                            margin-bottom: 0;
                           }
                           h5{
                            font-size:15px;
                            font-weight: 400;
                            color: #5F5C5C;
                           }
                        }
                        .price{
                           width: 15%;
                           margin:0 15px;
                           h1{
                               font-size:30px;
                                font-weight: 900;
                                color:#2DCCBC;
                            }
                        }
                        .counter-box{
                            margin: 0 50px;
                            height: 40px;
                            width: 25%;
                            border:1px solid black;
                            border-radius: 30px;
                            &:hover{
                                border: none;
                            }

                            .counter{
                                width: 100%;
                            
                               
    
                                div{
                                     width: 70px;
                                     text-align: center;
                                     span{
                                         height: 30px;
                                         font-size: 30px;
                                         font-weight: 500;
                                         line-height: 40px;
                                     }
                                }
                                .bt{ 
                                      height: 40px;
                                      border: none;
                                      line-height: 40px;
                                      text-align: center;
                                      &:hover{
                                          background-color:#b3f5fd ;
                                          line-height: 40px;
                                      }
                                      &:hover:first-child{
                                          border-top-left-radius: 30px;
                                          border-bottom-left-radius: 30px;
                                      }

                                      &:hover:last-child{
                                         border-top-right-radius: 30px;
                                         border-bottom-right-radius: 30px;
    
                                     }
                                     span{
                                         height: 30px;
                                         font-size: 20px;
                                         font-weight: 400;
                                         }
                                    }

                            }
                        }
                        .btn-black {
                            background-color: black;
                            height: 40px;
                            width: 20%;
                            border-radius: 30px;
                            a{
                                color:white
                            }
    
                        }
                }
            }
        }
    }
    
    
 
 


</style>