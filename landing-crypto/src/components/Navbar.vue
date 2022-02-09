<template>
    <div id="navbar">
        <div class="logo-div">
            <a href=""><img src="../assets/logo.png" alt="Crypto App Finance"></a>
        </div>
        <div class="navbar-links">
            <ul>
                <li>Press</li>
                <li>Founders</li>
                <li><button id="notified">Get Notified </button></li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Navbar'
}
</script>

<style scoped>
    .logo-div, .navbar-links {
        width: 50%;
        padding: 10px 50px;
    }
    #navbar .logo-div {
        display: flex;
        align-items: center;
    }
    ul {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 0;
    }
    ul li{
        list-style: none;
    }
    #notified {
        padding: 5px;
        background-color: transparent;
        border: 1px solid var(--pink);
        border-radius: 7px;
        color: var(--pink);
    }
</style>