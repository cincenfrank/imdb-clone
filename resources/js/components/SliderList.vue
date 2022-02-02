<template>
  <ul class="h-100 overflow-auto p-0">
    <li class="card h-25 bg-dark" v-for="(movie, i) in movieList" :key="i">
      <div class="row g-0 h-100">
        <div class="col-md-4 h-100">
          <img
            :src="movie.thumb"
            class="img-fluid rounded-start h-100"
            alt="..."
          />
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">{{ movie.title }}</h5>
            <!-- <p class="card-text">{{ movie.description }}</p> -->
            <!-- <p class="card-text">
                            <small class="text-muted"
                                >Last updated 3 mins ago</small
                            >
                        </p> -->
          </div>
        </div>
      </div>
    </li>
  </ul>
</template>

<script>
export default {
  name: "SliderList",
  props: {
    movieList: Array,
  },
};
</script>

<style></style>
