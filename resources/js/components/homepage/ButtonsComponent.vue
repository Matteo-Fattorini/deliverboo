<template>
  <li class="notselected">
    <img class="icon" :src="categoryImg" alt="" />
    {{ categoryName }}
  </li>
</template>

<script>
export default {
    name: 'ButtonsComponent',
    props: {
        categoryName: String,
        categoryImg: String
    }
};
</script>

<style>
</style>