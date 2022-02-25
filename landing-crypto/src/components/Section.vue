<template>
    <div id="section" class="container">
        <div class="text">
            <div class="column">
                <h1>AI-powered crypto asset investment</h1>
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa consequatur ullam sunt, voluptatibus commodi quaerat illo ducimus minima laboriosam autem velit praesentium eligendi iure reiciendis similique obcaecati nihil. Iure, consectetur."</p>
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa consequatur ullam sunt, voluptatibus commodi quaerat illo ducimus minima laboriosam autem velit praesentium eligendi iure reiciendis similique obcaecati nihil. Iure, consectetur."</p>

                <button id="notified">Get Notified </button>
            </div>
            <div class="column">
                <div>
                    <h4>Quote</h4>
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa consequatur ullam sunt, voluptatibus commodi quaerat illo ducimus minima laboriosam autem velit praesentium eligendi iure reiciendis similique obcaecati nihil. Iure, consectetur."</p>
                </div>
            </div>
        </div>
        <div class="image">
            <img src="../assets/section-image.png" alt="Section image">
        </div>
    </div>
</template>

<script>
// import bgImg from '../assets/section-image.png'

export default {
    name: 'Section',
    // props: {
    //     img: String
    // }, 
    // data() {
    //     return {
    //         fondo: bgImg
    //     }
    // },
}
</script>

<style scoped>
    .container {
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        padding: 70px;
        overflow: hidden;
        background: var(--white);
    }
    .text .column:last-child {
        margin-top: 80px;
    }
    .column > div {
        border-left: 3px solid var(--dark3);
        padding-left: 2rem;
    }
    h1 {
        font-weight: 300;
        font-size:  56px;
    }
</style>