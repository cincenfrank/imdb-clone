<template>
  <div class="m-4">
    <div class="container pippo">
      <div class="row h-100">
        <div class="col-8 h-100">
          <slider :movieList="movieList"></slider>
        </div>
        <div class="col-4 h-100">
          <slider-list :movieList="movieList"></slider-list>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Slider from "./Slider.vue";
import SliderList from "./SliderList.vue";
export default {
  components: { Slider, SliderList },
  props: {
    movieList: Array,
  },
};
</script>

<style lang="scss" scoped>
.pippo {
  //   height: 200px;
  height: 50vh;
  background-color: black;
}
</style>
