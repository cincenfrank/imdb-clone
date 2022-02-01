<template>
  <div class="row">
    <div class="col-8">
      <div class="position-relative">
        <img
          class="w-100"
          src="https://media-assets.wired.it/photos/61923d5e7036f65827e0cb93/16:9/w_1280,c_limit/Drive-locandina-inglese-1024x640.jpeg"
          alt=""
        />

        <CarouselCard class="position-absolute bottom-based"> </CarouselCard>
        <button class="position-absolute carousel-button left">Prev.</button>
        <button class="position-absolute carousel-button right">Next</button>
      </div>
    </div>
    <div class="col-4">
      <div class="row h-100 flex-column justify-content-between">
        <h4>Up Next</h4>

        <CarouselCard> </CarouselCard>
        <CarouselCard> </CarouselCard>
        <CarouselCard> </CarouselCard>

        <p class="text-left">Browse Trailers ></p>
      </div>
    </div>
  </div>
</template>

<script>
import CarouselCard from "./CarouselCard.vue";
export default {
  components: { CarouselCard },
  name: "MovieCarousel",
};
</script>

<style>
</style>