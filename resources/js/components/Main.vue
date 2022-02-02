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

        <div>
            <select
                class="form-select"
                multiple
                aria-label="multiple select example"
                v-model="categoryQuery"
            >
                <option selected>Open this select menu</option>
                <option
                    v-for="category in categoriesList"
                    :key="category.id"
                    :value="category.id"
                >
                    {{ category.name }}
                </option>
            </select>
            <button @click="getMovies" class="btn btn-success">Invia</button>
        </div>
    </div>
</template>

<script>
import Slider from "./Slider.vue";
import SliderList from "./SliderList.vue";
export default {
    data() {
        return {
            categoryQuery: [],
        };
    },
    components: { Slider, SliderList },
    props: {
        movieList: Array,
        categoriesList: Array,
    },
    methods: {
        getMovies() {
            window.axios
                .get("api/movies", {
                    params: {
                        category: this.categoryQuery.join(),
                    },
                })
                .then((resp) => {
                    console.log(resp.data.data);
                });
        },
    },
    mounted() {},
};
</script>

<style lang="scss" scoped>
.pippo {
    //   height: 200px;
    height: 50vh;
    background-color: black;
}
</style>
