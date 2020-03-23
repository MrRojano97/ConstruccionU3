

<template>
    <div id="modal"> 
    <body>Como estamos locooooooo </body>
    <transition name="fade" appear>
        <div class="modal-overlay " v-if="showModal"></div>
    </transition>
    <transition name="slide" appear>
    <div class="modal" v-if="showModal">
        <h1>Bienvenido, ¿qué desea hacer?</h1>
    <button class="button" @click="showModal = false">
        Nuevo
    </button>
    <button class="button" @click="showModal = false">
        Cargar
    </button>
    </div>
    </transition>
    </div>

</template>

<script>
    export default {
        name: "modal",
        data() {
            return {
                showModal: true
            }
        },
        mounted() {
            console.log("Wena cabros")
        }
    }
</script>

<style>


    body {
        font-family: 'monserrat', sans-serif,
    }

    #modal {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;

        width: 100vw;
        height: 100vh;
        overflow-x: hidden;

    }

    .button {
        appearance: none;
        outline: none;
        border: none;
        background: none;
        cursor: pointer;
        padding: 15px 25px;
        display: inline-block;

        color: #FFF;
        font-size: 18px
        font-weight: 700;
        
        box-shadow: 3px 3px rgba(0, 0, 0, 0.4);
        transition: 0.4s ease-out;
        
        &:hover {
            box-shadow: 6px 6px rgba(0, 0, 0, 0.6);
        }
    }

    .modal-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 98;
        background-color: rgba(0, 0, 0, 0.3);
    }

    .modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 99;
        
        width: 100%;
        max-width: 400px;
        background-color: #FFF;
        border-radius: 16px;
        
        padding: 25px;
    
    h1 {
    color: #222;
    font-size: 32px;
    font-weight: 900;
    margin-bottom: 15px;
    }
    
    p {
    color: #666;
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 15px;
    }
    }

    .fade-enter-active,
    .fade-leave-active {
        transition: opacity .5s;
    }

    .fade-enter,
    .fade-leave-to {
        opacity: 0;
    }

    .slide-enter-active,
    .slide-leave-active {
        transition: transform .5s;
    }

    .slide-enter,
    .slide-leave-to {
        transform: translateY(-50%) translateX(100vw);
    }
</style>
