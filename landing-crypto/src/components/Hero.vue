<template>
    <div id="hero">
        <div id="welcome">
            <div>
                <p id="author">by: {{ author }}</p>
                <h1>AI-powered crypto asset investment</h1>
                <div class="welcome-btns">
                    <button id="notified">Get Notified </button>
                    <button id="learn-more">Learn More</button>
                </div>
            </div>
            <div class="articles">
                <div class="article">
                    <hr />
                    <img src="../assets/article_1.png" alt="">
                    <h6>News item about the company</h6>
                    <p>4.13.22</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                </div>
                <div class="article">
                    <hr />
                    <img src="../assets/article_2.png" alt="">
                    <h6>News item about the company</h6>
                    <p>4.13.22</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                </div>
            </div>
        </div>
        <div id="graphic">
            <img src="../assets/graphic.png" alt="" srcset="">
        </div>
    </div>
</template>

<script>
export default {
    name: 'Hero',
    props: {
        author: String
    }
}
</script>

<style scoped>
    .hero {
        display: flex;
    }
    #welcome {
        padding: 50px;
    }
    #welcome, #graphic {
        width: 50%;
    }
    #author {
        text-transform: uppercase;
        color: var(--pink);
    }
    .welcome-btns {
        display: flex;
        justify-content: space-between;
        width: 30%;
    }
    #learn-more {
        padding: 7px;
        border: 1px solid var(--dark1);
        border-radius: 7px;
        background-color: transparent;
    }
    #graphic img {
        width: 80%;
    }
</style>