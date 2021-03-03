<template>
  <nav>
      <div class="container">
          <div class="row">
              <div class="col-6 d-flex justify-content-between align-items-center">
                  <img src="img/logo/logo_black.png" alt="">
              </div>
              <div class="col-6 d-flex justify-content-end align-items-center">
                  <ul class="d-flex justify-content-between align-items-center d-flex justify-content-between align-items-center m-0 p-0">
                      <li>Home</li>
                      <li>Aiuto</li>
                      <li>Login Ristoratori</li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
</template>

<script>
export default {
    name:'NavComponent'
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