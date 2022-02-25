<template>
    <div id="info">
        <div class="column">
            <div>
                <h4>New items about the company</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa consequatur ullam sunt, voluptatibus commodi quaerat illo ducimus minima laboriosam autem velit praesentium eligendi iure reiciendis similique obcaecati nihil. Iure, consectetur.</p>
            </div>
        </div>
        <div class="column">
            <div>
                <h4>New items about the company</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa consequatur ullam sunt, voluptatibus commodi quaerat illo ducimus minima laboriosam autem velit praesentium eligendi iure reiciendis similique obcaecati nihil. Iure, consectetur.</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Info'
}
</script>

<style scoped>
    #info {
        color: var(--white);
        background-color: var(--dark1);
        display: flex;
    }
    .column {
        padding: 60px;
    }
    .column > div {
        border-left: 3px solid var(--dark3);
        padding-left: 2rem;
    }
    .column h4 {
        font-weight: 600;
        font-size: 18px;
    }
</style>