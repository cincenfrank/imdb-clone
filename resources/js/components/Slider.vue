<template>
    <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="carousel"
    >
        <div class="carousel-inner">
            <div
                class="carousel-item"
                :class="i === 1 ? 'active' : ''"
                v-for="(movie, i) in movieList"
                :key="i"
            >
                <img
                    :src="movie.thumb"
                    class="d-block w-100"
                    style="object-fit: cover; object-position: top"
                    alt=""
                />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleControls"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</template>

<script>
export default {
    name: "Slider",
    props: {
        movieList: Array,
    },
};
</script>

<style></style>
