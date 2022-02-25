<template>
    <footer>
        <div class="row">
            <div class="column">
                <img src="../assets/logo.png" alt="Droplet">
                <p>Crypto App</p>
                <div class="social-logos">
                    <img src="../assets/social/facebook.png" alt="Facebook Droplet">
                    <img src="../assets/social/twitter.png" alt="Twitter Droplet">
                    <img src="../assets/social/instagram.png" alt="Instagram Droplet">
                    <img src="../assets/social/tiktok.png" alt="Tiktok Droplet">
                </div>
            </div>
            <div class="column">
                <ul class="about">
                    <li><h5>About</h5></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Legal</a></li>
                </ul>
            </div>
            <div class="column">
                <ul class="about">
                    <li><h5>Crypto</h5></li>
                    <li><a href="#">Ethereum</a></li>
                    <li><a href="#">Lear</a></li>
                    <li><a href="#">Earn</a></li>
                </ul>
            </div>
            <div class="column">
                <ul class="about">
                    <li><h5>Contact</h5></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="column">
                <ul class="about">
                    <li><h5>Social</h5></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="column">© Copyright 2022 Droplet > Madelin Flores</div>
            <div class="column">Launching August 2022</div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer'
}
</script>

<style scoped>
a {
    text-decoration: none;
    color: var(--dark1);
}
footer .row:first-child {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    width: 100%;
}
footer .row:first-child .column:first-child {
    grid-column: 1/3;
}
footer .row:last-child {
    display: flex;
    width: 100%;
    margin-top: 100px;
}
footer .row:last-child .column {
    width: 50%;
}
footer .row:last-child .column:last-child {
    text-align: end;
}
.about li h5 {
    text-transform: uppercase;
}
.about li {
    margin: 1rem 0;
}
</style>