<template>
    <section>
        <form  @submit="goToPayment">
    <div class="container cart" v-if="cartActive === true">
      <div class="row">
        <div class="col-12 d-flex">
          <div
            class="cartTitle d-flex justify-content-start align-items-center"
          >
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
          <button class="btn-light" type="submit">
            <span>VAI AL PAGAMENTO </span>
          </button>
        </div>
      </div>
    </div>
  </form>

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
    </section>
  
</template>

<script>
export default {
    name:'Cart',
    props:{
        cart: Array,
        cartActive: Boolean,
    },
    data(){
        return{
            totalPay: 0,
        }
    },
    mounted: function(){
         var data = JSON.parse(this.data);
         this.dishesImport = data.get_dishes;

          //aggiungi quantità dal counter
         this.dishes = this.dishesImport.map((element) => {
         this.elementUpgrade = { ...element, counter: 0 };
         return this.elementUpgrade;
         });

    },

    computed:{


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

    methods:{

        // cancella un ordine se non ci sono ordini chiude il carrello
    deleteOrder: function (delIndex) {
      this.cart.splice(delIndex, 1);
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

    },

}
</script>

<style lang='scss'>

  section{
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
          font-size: 22px;
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
    z-index: 2;
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