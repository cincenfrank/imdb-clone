<template>
    <div class="m-4" style="max-height: 500px">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <slider :movieList="movieList"></slider>
                </div>
                <div class="col-4" style="height: 100%">
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

<style></style>
