<template>
  <nav>
      <div class="container">
          <div class="row">
              <div class="col-6 d-flex justify-content-between align-items-center">
                  <img src="/images/logo_black.png" alt="">
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                  <ul class="d-flex justify-content-between align-items-center d-flex justify-content-between align-items-center ">
                      <li><a :href="homelink">Home</a></li>
                      <li>Aiuto</li>
                      <li><a :href="loginlink">Login Ristoratori</a></li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
</template>

<script>
export default {
    name:'NavComponent',
    props:{
        homelink: String,
        loginlink: String
    },
}
</script>

<style lang="scss" scoped>
nav{
    .row{
        height: 100px;
    }
    ul{
        width: 60%;
    }
}
</style>