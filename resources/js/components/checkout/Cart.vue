<template>
  <section>
     <div class="container cart">
         <div class="row">
             <div class="col-12 cartTitle" >
                 <h1>Hai Ordinato:</h1>
             </div>
             <div class="col-12 d-flex flex-row flex-wrap">
                <div class="order d-flex" v-for="(order, ind) in cart" :key="ind">
                   <div class="quantity d-flex justify-content-start align-items-center">
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
                          <img :src="'/img/restaurant/' + order.dishImgUrl" alt="cart-img" />
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
                  </div>
                </div>        
             </div>
        </div>
   </section>
</template>

<script>
export default {

data(){
return{
    cart: [],
    total:0,

 }
},
 mounted: function(){

     if (localStorage.getItem('cart')) {
      try {
        this.cart = JSON.parse(localStorage.getItem('cart'));
      } catch(e) {
        localStorage.removeItem('cart');
      }
    }

    if (localStorage.getItem('total')) {
      try {
        this.total = JSON.parse(localStorage.getItem('total'));
      } catch(e) {
        localStorage.removeItem('total');
      }
    }
     console.log(this.cart)

 },
 computed:{

     totalPrice() {
      return new Intl.NumberFormat("it-IT", {
        style: "currency",
        currency: "EUR",
      }).format(this.total);
    },
 },

 methods:{


    saveCart(){
      const parsed = JSON.stringify(this.cart);
      localStorage.setItem('cart', parsed);
    },


 },

}
</script>

<style lang='scss'>
     
.cart{
    min-width: 100vw;
    background-color: black;
    .row {
      padding: 50px 200px;
        .cartTitle {
          width: 50%;
          color: white;
          h1 {
            color: white;
            font-size: 40px;
            font-weight: 900;
          }
        }
        .close {
          width: 50%;
          img {
            height: 40px;
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
                font-size: 18px;
                font-weight: 700;
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
.col-6{
    img{
        margin:30px;
        width: 70%;  
    }
    h1 {
         
         color: black;
         font-size: 50px;
         font-weight: 900;
        }
    button{
            margin-top:30px;
            width: 350px;
            padding: 10px 0;
            background:#B3F5FD;
            color: black;
            border: none;
            border-radius: 20px;
            font-size: 15px;
            font-weight: 600;
    }

}

</style>