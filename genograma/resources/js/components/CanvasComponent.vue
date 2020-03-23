<template>
    <div class="container">
        <div class="myDiagramDiv" id="myDiagramDiv"></div>
    </div>
</template>

<style scoped>
    /* Aca va le stilo del componente */
    .button{
        position: fixed;
        right: 10%;
        top: 10%;
    }

    .myDiagramDiv{
        flex-grow: 1;
        height: 90%;
        border: solid 1px black;
    }

</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

