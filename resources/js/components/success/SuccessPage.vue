<template>
  <header>
    <slot name="navbar"></slot>
    <div class="d-flex flex-column justify-content-center align-items-center">
      <img src="img/succes/icon/true.png" alt="" />
      <h1>Prepara la tavola!</h1>
      <h1>Il tuo ordine è avvenuto con</h1>
      <h1 class="m-0">SUCCESSO!</h1>
    </div>
  </header>
</template>

<script>
export default {
  name: "SuccessPage",
};
</script>

<style lang="scss" scoped>
* {
  background-repeat: no-repeat;
  background-size: cover;
  background-position:center;
}
div {
  height: calc(100vh - 100px);
  text-align: center;
  img{
    margin-bottom:30px;
  }
}

h1{
  font-weight: 700;
  color: black;
  &:last-child{
    color: green;
    font-weight: 900;
  }
}

@media (max-width: 576px) {
  
}
@media (min-width:577px) and (max-width: 768px) {
  
}
@media (min-width:769px) and (max-width: 992px){
 
}
@media (min-width:993px) and (max-width: 1199px){
 
}
@media (min-width: 1200px) {
 
 }
</style>