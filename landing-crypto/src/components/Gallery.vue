<template>
    <div class="photos">
        <div class="photo-card-grid">
            <img src="../assets/gallery/Rectangle 17.png" alt="">
            <img src="../assets/gallery/Rectangle 18.png" alt="">
            <img src="../assets/gallery/Rectangle 19.png" alt="">
        </div>
        <div class="photo-card-simple"><img src="../assets/gallery/large_quote.png" alt=""></div>
        <div class="photo-card-simple"><img src="../assets/gallery/large_quote.png" alt=""></div>
        <div class="photo-card-grid">
            <img src="../assets/gallery/Rectangle 20.png" alt="">
            <img src="../assets/gallery/Rectangle 21.png" alt="">
            <img src="../assets/gallery/Rectangle 22.png" alt="">
        </div>
    </div>
</template>

<script>
export default {
    name: 'Gallery'
}
</script>

<style scoped>
.photos {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1em;
}
.photo-card-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}
</style>