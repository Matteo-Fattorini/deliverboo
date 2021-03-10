<template>
  <li>
    <button class="notselected" :value="value" :id="id">
      <img class="icon" :src="categoryImg" alt="" />
      {{ categoryName }}
    </button>
  </li>
</template>

<script>
export default {
  name: "ButtonsComponent",
  props: {
    categoryName: String,
    categoryImg: String,
    value: String,
    id: Number,
  },
  data(){
    return{
      ciao: false
    }
  },
  methods:{
    change(){
      this.ciao != this.ciao
      console.log(this.ciao);
    }
  }
};
</script>

<style>
</style>