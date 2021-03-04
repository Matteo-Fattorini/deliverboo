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
                <div class="dish d-flex  justify-content-start align-items-center "
                 v-for="(dish, i) in filtered"
                 :key="i">

                     <div class="dishinfo d-flex justify-content-start align-items-center">
                             <div class="dishImg">
                                  <div class="listImage dishImg ">
                                  <img  class="" :src="dish.imgUrl" alt="">
                             </div>
                          </div>
                          <div class="dishtext">
                             <h3>{{dish.name}}</h3>
                             <h5>{{dish.description}}</h5>
                          </div>
                        </div>
                        <div class=" price d-flex justify-content-end align-items-center">
                            <h1>{{dish.price}}€</h1>
                        </div>
                        <div class="counter-box  d-flex   justify-content-end align-items-center ">
                            <div class="counter  d-flex justify-content-between ">
                                <div class=" bt "  @click="changeCounter('-', i)"  >
                                    <span ondragstart="return false" 
                                          onselectstart="return false">
                                          -
                                    </span>
                                </div>
                                <div class=" "> <span> {{ dish.counter }} </span></div>
                                <div class=" bt "  @click="changeCounter('+', i)"  >
                                    <span ondragstart="return false" 
                                          onselectstart="return false">
                                          +
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class=" btn-black d-flex justify-content-center align-items-center"
                        @click='putInCart(i), activeCart()'>
                            <span
                             ondragstart="return false" 
                             onselectstart="return false">
                             ORDINA
                            </span>
                        </div>
                 </div>
            </div>
        </div>
    </div>

    <!-- carrello -->

    <div
      :v-if="cartActive === true"
     v-for="(order,ind) in cart" 
    :key="ind">
       <span>{{order.active}}</span>
       <span>{{order.quantity}}</span>
       <span>{{order.dishName}}</span>
       <span>{{order.dishImgUrl}}</span>
       <span>{{order.totalPrice}}</span>
    
    
    </div>
    
  </section>
    
</template>


<script>

var dishes = [
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
      ];

const dishesCopy = dishes.map((element) => {
  let elementUpgrade = {...element, counter:0,}
  return elementUpgrade;
});

console.log(dishesCopy);

export default {
    name:'TypeMenu',
    data() {
    return {
      cartActive: false,
      categorySelect :'',
      nCounter: [],
      cart: [],
      cartActive:false,
      dishes:[...dishesCopy],
      dCategories :[
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

      
      
    };
  },
  computed:{
      filtered(){
          return this.dishes.filter( e =>{
              return e.category.includes(this.categorySelect)
          })
      },

      
      
    
  },
  
  methods:{


    changeCounter(direction,index){
        console.log(direction +' '+ index)
        this.dishes.forEach((dish,i) =>{
            if( direction == '+' && i === index){
                dish.counter++ ;
            } else if( direction == '-' && i === index){
                if (dish.counter === 0){
                    dish.counter = 0;
                } else {
                    dish.counter-- ;
                }
            }
        })
    },
      
      
    selectCategory(category){
               return this.categorySelect = category,
               console.log('Cosa ci fa qui? Hai voglia di ' + this.categorySelect + ' ? Scegli Deliveboo ;)')
     },


     putInCart(index){
         console.log(this.cart);
         
         console.log(index);
         this.dishes.forEach((dish,i) =>{
             if(index === i  ){
                 this.cart.push(
                     {
                         active: true,
                         quantity: dish.counter,
                         dishName: dish.name,
                         dishImgUrl: dish.imgUrl,
                         dishPrice: dish.price,
                         totalPrice: dish.price * dish.counter, 
                     }
                 );
             }else{
                 //carrello vuoto
             }
         })
      },

      activeCart(){
         console.log(this.cartActive);
         if(this.cart.length != 0){
              this.cartActive = true;
         }else{
              this.cartActive = false;
         }
      },
    


  }
  
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
                    width: 100vw;
                    .dish{
                        padding:20px 0;
                        .dishinfo{
                              width: 50%;
                          .dishImg{
                              width: 100px;
                              height: 100px;
                             }
                          .dishtext{
                               margin:0 15px;
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
                        }
                        .price{
                           width: 10%;
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
                            width: 20%;
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
                            span{
                                color:white;  
                                &:hover{
                                    text-decoration: none;
                                } 
                            }    
                        }
                        
                      }
            }
        }

    }


    
    
 
 


</style>