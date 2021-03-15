<template>
<div class="col-xs-4 col-sm-4 col-md-2 col-lg-1 mb-2 d-flex justify-content-center align-items-center oval-button">
    <button class="notselected" :value="value" :id="id">
      <img class="icon" :src="categoryImg" alt="" />
      {{ categoryName }}
    </button>
</div>
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