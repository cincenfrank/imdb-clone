<template>
    <div>
        <h1 v-for="movie in movieList" :key="movie.title">
            {{ movie.title }}
        </h1>
    </div>
</template>

<script>
export default {
    props: {
        movieList: Array,
    },
};
</script>

<style></style>
