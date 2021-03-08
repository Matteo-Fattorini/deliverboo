<template>
  <header id="bg">
    <slot name="navbar"></slot>
    <div class="d-flex justify-content-center align-items-center">
      <input class="custom-input" type="text" name="" id="" placeholder="Cosa vuoi mangiare?" />
    </div>
  </header>
</template>

<script>
export default {
  name: "HeaderHome",
};
</script>

<style lang="scss" scoped>
div {
  height: calc(100% - 100px);
}
.custom-input {
  width: 50%;
}
</style>