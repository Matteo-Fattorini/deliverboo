<template>

     <div class="container">
         <div class="row">
             <div class="col-6" >
                 <h1>ciao</h1>
                 <div v-for="(order,index) in cartImport" :key="index">
                     <h1>{{order.quantity}}</h1>
                     <h1>{{order.dishName}}</h1>
                     <h1>{{order.dishPrice}}</h1>
                     <h1>{{order.dishTotalPrice}}</h1>


                 </div>

             </div>
         </div>
     </div>
</template>

<script>
export default {

data(){
return{
    cartImport: localStorage.getItem('storedData'),

 }
},
 mounted: function(){
     console.log(cartImport)

 },
}
</script>

<style>

</style>