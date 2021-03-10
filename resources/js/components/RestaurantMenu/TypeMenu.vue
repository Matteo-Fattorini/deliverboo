<template>
  <div id="menu">
    <div class="container restaurant ">
      <div class="row">
        <div class="col-12">
          <h1>Menù</h1>
        </div>
        <div class="col-12">
          <ul class="oval-button">
            <li
              v-for="(category, index) in genreFiltered"
              :key="index"
              @click="selectCategory(category)"
              :class="{
                selected: category === categorySelect,
                notselected: category != categorySelect,
              }"
            >
              <img class="icon" :src="category.image_url" alt="" />
              <!-- ondragstart="return false" 
                         onselectstart="return false"
                         evita evidenziazione del testo -->
              <span ondragstart="return false" onselectstart="return false">
                {{ category }}
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container menu">
      <div class="row">
        <div class="col-12" v-if="$data.categoryDishes == true">
          <!-- categoria -->
          <h2>Pizza</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 p-0">
          <div
            class="dish d-flex justify-content-start align-items-center"
            v-for="(dish, i) in filtered"
            :key="i"
          >
            <div
              class="dishinfo d-flex justify-content-start align-items-center"
            >
              <div class="dishImg">
                <div class="listImage dishImg">
                  <img class="" :src="dish.image_url" alt="" />
                </div>
              </div>
              <div class="dishtext">
                <h3>{{ dish.name }}</h3>
                <h5>{{ dish.description }}</h5>
              </div>
            </div>
            <div class="price d-flex justify-content-end align-items-center">
              <h1>{{ dish.price }}€</h1>
            </div>
            <div
              class="counter-box d-flex justify-content-end align-items-center"
            >
              <div class="counter d-flex justify-content-between">
                <div class="bt" @click="changeCounter('-', i)">
                  <span ondragstart="return false" onselectstart="return false">
                    -
                  </span>
                </div>
                <div class=" ">
                  <span> {{ dish.counter }} </span>
                </div>
                <div class="bt" @click="changeCounter('+', i)">
                  <span ondragstart="return false" onselectstart="return false">
                    +
                  </span>
                </div>
              </div>
            </div>

            <div
              class="btn-black d-flex justify-content-center align-items-center"
              @click="putInCart(i), activeCart()"
            >
              <img src="/images/cart-white.svg" alt="" />
              <span ondragstart="return false" onselectstart="return false">
                Aggiungi +
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- carrello -->
    <div class="container cart" v-if="cartActive === true">
      <div class="row">
        <div class="col-12 d-flex">
          <div class="cartTitle d-flex justify-content-start align-items-center">
            <h1>Carrello</h1>
          </div>
          <div
            class="close d-flex justify-content-end align-items-start"
            @click="openAndClose()"
          >
            <img src="/images/close_white.png" alt="" />
          </div>
        </div>
        <div class="col-12 d-flex flex-row flex-wrap">
          <div class="order d-flex" v-for="(order, ind) in cart" :key="ind">
            <div
              class="quantity d-flex justify-content-start align-items-center"
            >
              <ul class="oval-white-button">
                <li class="notselected">
                  <img src="" alt="" />
                  <span ondragstart="return false" onselectstart="return false">
                    x{{ order.quantity }}
                  </span>
                </li>
              </ul>
            </div>
            <div class="dishes d-flex justify-content-start align-items-center">
              <div class="dishImg">
                <div class="cartImage">
                  <img :src="order.dishImgUrl" alt="" />
                </div>
              </div>
              <div class="dishtext">
                <h3>{{ order.dishName }}</h3>
                <h6>{{ order.dishPrice }} € x {{ order.quantity }} =</h6>
              </div>
            </div>
            <div class="price d-flex justify-content-end align-items-center">
              <h1>{{ order.totalPrice }} €</h1>
            </div>
            <div class="delete d-flex justify-content-end align-items-center">
              <button @click.stop="deleteOrder(ind)">X</button>
            </div>
          </div>
        </div>
        <div
          class="col-6 d-flex flex-column justify-content-center align-items-start"
        >
          <h1>Totale ordine</h1>
          <h1>{{ totalPrice }}</h1>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
          <!-- @submit="goToPayment" -->
          <button class="btn-light" @click="goToPayment()" >
            <span>VAI AL PAGAMENTO </span>
          </button>
        </div>
      </div>
    </div>
  
    <!-- attiva carrello -->

    <div class="container cartButton">
      <div class="row">
        <div class="col-12 d-flex justify-content-end align-items-center">
          <div
            class="roundedCart d-flex justify-content-center align-items-center"
            @click="openAndClose()"
          >
            <img src="/images/cart.svg" alt="" />
          </div>
        </div>
      </div>
    </div> 
  </div>
</template>


<script>
export default {
  name: "TypeMenu",
  props: {
    data: String,
    auth: Boolean,
  },
  data() {
    return {
      cartActive: false,
      categorySelect: "",
      nCounter: [],
      cart: [],
      totalPay: 0,
      restaurantData: [],
      dishesImport:[],
      dishes: [],
      genreList:[],
      genreName:[],
      action: "{{ URL::to('/checkout')}}",
      
      
    };
  },

  mounted: function () {

    var data = JSON.parse(this.data);
    this.dishesImport = data.get_dishes;

    //aggiungi quantità dal counter
    this.dishes = this.dishesImport.map((element) => {
      this.elementUpgrade = { ...element, counter: 0 };
      return this.elementUpgrade;
    });

    this.genreList =  this.dishesImport.map((element)=>{
      this.genre = element.get_genre;
      return  this.genre;
     }),

     this.genreName = this.genreList.map((e)=>{
       this.name = e.name;
       return this.name;
     })








     console.log(this.dishesImport);
     console.log('piatti');
     console.log(this.dishes);
     console.log('generi');
     console.log(this.genreList);
     console.log('generi nomi');
     console.log(this.genreName);
     console.log('generi filtrati');
     console.log(this.dCategories);
  },
    

  computed: {

    genreFiltered(){
      return this.genreName.filter((v,i,a)=> a.indexOf(v) === i);
    },
    
    filtered() {
      return this.dishes.filter((e) => {
        return e.get_genre.name.includes(this.categorySelect);
      });
    },

    //calcola il totale del pagamento del carrello

    totalPrice() {
      const total = this.cart.reduce(
        (total, order) => total + order.totalPrice,
        0
      );
      return new Intl.NumberFormat("it-IT", {
        style: "currency",
        currency: "EUR",
      }).format(total);
    },
  },

  methods: {
    check() {
      console.log(this.restaurantData);
    },
    //contatore
    changeCounter(direction, index) {
      this.filtered.forEach((dish, i) => {
        if (direction == "+" && i === index) {
          dish.counter++;
        } else if (direction == "-" && i === index) {
          if (dish.counter === 0) {
            dish.counter = 0;
          } else {
            dish.counter--;
          }
        }
      });
    },

    //ritona una categoria
    selectCategory(category) {
      return (
        (this.categorySelect = category),
        console.log(
          "Cosa ci fa qui? Hai voglia di " +
            this.categorySelect +
            " ? Scegli Deliveboo ;)"
        )
      );
    },

    // inserimento e cancellazione ordini nel carrello
    putInCart(index) {
      this.filtered.forEach((dish, i) => {
        if (index === i && dish.counter != 0) {
          this.cart.push({
            quantity: dish.counter,
            dishName: dish.name,
            dishImgUrl: dish.image_url,
            dishPrice: dish.price,
            totalPrice: parseFloat(dish.price) * dish.counter,
          });
          this.saveCart();
          console.log(this.cart);
        } else {
          //carrello vuoto
        }
      });
    },

    // cancella un ordine se non ci sono ordini chiude il carrello
    deleteOrder: function (delIndex) {
      this.cart.splice(delIndex, 1);
      this.saveCart();
      if (this.cart.length != 0) {
        this.cartActive = true;
      } else {
        this.cartActive = false;
      }
    },

    // attivare o disattivare carrello

    // attivazione per riempimento
    activeCart() {
      if (this.cart.length != 0) {
        this.cartActive = true;
      } else {
        this.cartActive = false;
      }
    },

    // attivazione e disattivazione per click
    openAndClose() {
      if (this.cartActive === false) {
        this.cartActive = true;
      } else if (this.cartActive === true) {
        this.cartActive = false;
      }
    },

    //salva dati per il pagamento
    saveCart(){
      const parsed = JSON.stringify(this.cart);
      localStorage.setItem('cart', parsed);
    },


    // vai al pagamento
    goToPayment() {
      this.saveCart();
      location.replace("/checkout");


      


      //   console.log('sono dati', data)
      //   axios.get('/checkout', data)
      //       .then(function (result ) {
      //            console.log(result.data.response);
      //            location.replace('/checkout');
      //       })
  
  //     axios.post("/checkout", {
  //           cart: this.cart,
  //       })
  //     .then((response) => {
  //        console.log(response);

  //        location.replace("/checkout");
         
  //     })
  //     .catch(function(error){
  //           console.log(error);
  //     });
    },
    
  },

  

  //   props:{
  //       dishesImport : Object,
  //       dCategory: Object,
  //   }
};
</script>

<style lang="scss" scoped>
#menu {
  .restaurant {
    margin-top: 15px;
    margin-bottom: 15px;
    .row {
      .col-12 {
        h1 {
          margin-bottom: 30px;
          font-size: 50px;
          font-weight: 900;
          line-height: 50px;
        }
      }
    }
  }
  .menu {
    margin-top: 25px;
    margin-bottom: 25px;
    .row {
      .col-12 {
        margin: 20px 0px;
        width: 100vw;
        .dish {
          padding: 20px 0;
          .dishinfo {
            width: 50%;
            .dishImg {
              width: 100px;
              height: 100px;
            }
            .dishtext {
              margin: 0 15px;
              h3 {
                font-size: 30px;
                font-weight: 700;
                margin-bottom: 0;
              }
              h5 {
                font-size: 15px;
                font-weight: 400;
                color: #5f5c5c;
              }
            }
          }
          .price {
            width: 10%;
            margin: 0 15px;
            h1 {
              font-size: 30px;
              font-weight: 900;
              color: #2dccbc;
            }
          }
          .counter-box {
            margin: 0 50px;
            height: 40px;
            width: 20%;
            border: 1px solid black;
            border-radius: 30px;
            &:hover {
              border: none;
            }

            .counter {
              width: 100%;

              div {
                width: 70px;
                text-align: center;
                span {
                  height: 30px;
                  font-size: 30px;
                  font-weight: 500;
                  line-height: 40px;
                }
              }
              .bt {
                height: 40px;
                border: none;
                line-height: 40px;
                text-align: center;
                &:hover {
                  background-color: #b3f5fd;
                  line-height: 40px;
                }
                &:hover:first-child {
                  border-top-left-radius: 30px;
                  border-bottom-left-radius: 30px;
                }

                &:hover:last-child {
                  border-top-right-radius: 30px;
                  border-bottom-right-radius: 30px;
                }
                span {
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
            span {
              color: white;
              font-weight: 900;
              font-size: 15px;
              line-height: 40px;
              &:hover {
                text-decoration: none;
              }
            }
            img {
              height: 15px;
              margin-right: 5px;
            }
          }
        }
      }
    }
  }
  .cart {
    box-sizing: border-box;
    min-width: 100vw;
    height: 45vh;
    background-color: black;
    position: fixed;
    bottom: 0;
    overflow-y: scroll;
    z-index: 3;
    .row {
      padding: 50px 200px;
      .col-12 {
        .cartTitle {
          width: 50%;
          h1 {
            color: white;
            font-size: 40px;
            font-weight: 900;
          }
        }
        .close {
          width: 50%;
          img {
            height: 30px;
          }
        }
        .order {
          padding: 30px 0px;
          border-bottom: 1px solid white;
          flex-basis: 47%;
          &:nth-child(n) {
            margin-right: 20px;
          }

          .dishes {
            width: 50%;
            .dishtext {
              margin-left: 30px;
              h3 {
                color: white;
                font-size: 22px;
                font-weight: 900;
              }
              h6 {
                color: white;
                font-size: 15px;
                font-weight: 300;
              }
            }
          }
        }

        .price {
          width: 30%;
          margin: 0 10px;
          h1 {
            color: #2fbcae;
            font-size: 30px;
            font-weight: 200;
            line-height: 30px;
          }
        }
        .delete {
          button {
            margin-left: 15px;
            background: none;
            color: white;
            border: none;
            font-size: 22px;
            font-weight: 400;
          }
        }
      }
    }

    .col-6 {
      margin: 30px 0;
      h1 {
        color: white;
        font-size: 40px;
        font-weight: 900;
      }
      .btn-light {
        background-color: #b3f5fd;
        border: none;
        height: 40px;
        border-radius: 30px;
        padding: 0 85px;
        &:hover {
          background-color: white;
        }
        span {
          color: black;
          font-weight: 900;
          font-size: 18px;
          line-height: 30px;
          &:hover {
            text-decoration: none;
          }
        }
      }
    }
  }
  .cartButton {
    box-sizing: border-box;
    min-width: 100vw;
    position: fixed;
    top: 20px;
    right: 10px;
    z-index: -1;
    .row {
      .col-12 {
        .roundedCart {
          height: 60px;
          width: 60px;
          border: 4px solid black;
          border-radius: 50%;
          background-color: white;
          img {
            height: 30px;
            width: 30px;
          }
          &:hover {
            background-color: #b3f5fd;
            border: none;
          }
        }
      }
    }
  }
}
</style>