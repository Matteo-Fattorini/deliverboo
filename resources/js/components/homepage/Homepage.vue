<template>
  <div>
      <HeaderHome :style="bgHeader">

      </HeaderHome>
      <ResturantSectionHome></ResturantSectionHome>
      <PartnerSectionHome :style="bgPartner"></PartnerSectionHome>
      <InfoSectionHome></InfoSectionHome>
  </div>
</template>

<script>
import HeaderHome from './HeaderHome';

import ResturantSectionHome from './ResturantSectionHome'
import PartnerSectionHome from './PartnerSectionHome'
import InfoSectionHome from './InfoSectionHome';
export default {
    name: 'Homepage',
    components:{
        HeaderHome,
        InfoSectionHome,
        ResturantSectionHome,
        PartnerSectionHome

    },
    props:{
        bgHeader: String,
        bgPartner: String
    }
};
</script>

<style>
</style>