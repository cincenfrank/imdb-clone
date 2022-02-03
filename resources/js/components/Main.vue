<template>
  <div class="mt-4">
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

    <div class="container mt-5 d-flex w-100">
      <div class="w-25">
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
      </div>
      <div class="d-flex justify-content-center align-items-center px-5">
        <button @click="getMovies" class="btn btn-success">Invia</button>
      </div>
    </div>

    <div class="container py-5">
      <div
        v-if="onLoad"
        class="py-4 d-flex justify-content-center align-items-center"
      >
        <div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
      <div class="row row-cols-4 g-3">
        <div v-for="movie in movieFilteredList" :key="movie.id" class="col">
          <div class="card h-100">
            <img :src="movie.cover_path" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">{{ movie.title }}</h5>
              <p class="card-text">{{ movie.description.slice(0, 50) }}...</p>
              <a href="#" class="btn btn-primary">More info</a>
            </div>
          </div>
        </div>
      </div>
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
      movieFilteredList: [],
      onLoad: false,
    };
  },
  components: { Slider, SliderList },
  props: {
    movieList: Array,
    categoriesList: Array,
  },
  methods: {
    getMovies() {
      this.movieFilteredList = [];
      this.onLoad = true;
      window.axios
        .get("api/movies", {
          params: {
            category: this.categoryQuery.join(),
          },
        })
        .then((resp) => {
          this.onLoad = false;
          //   console.log(resp.data.data);
          this.movieFilteredList = resp.data.data;
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
