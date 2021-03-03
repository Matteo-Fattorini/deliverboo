<template>
  <header>
    <slot name="navbar"></slot>
    <div class="d-flex justify-content-center align-items-center">
      <input type="text" name="" id="" placeholder="Cosa vuoi mangiare?" />
    </div>
  </header>
</template>

<script>
export default {
  name: "HeaderHome",
};
</script>

<style lang="scss" scoped>
header {
  height: 100vh;
  background-repeat: no-repeat;
  background-size: cover;
}
div {
  height: calc(100% - 100px);
}
</style>