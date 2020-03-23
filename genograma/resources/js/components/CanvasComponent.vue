<template>
    <div class="container">
        <div class="myDiagramDiv" id="myDiagramDiv"></div>
        <div class="button-container">
            <button class="button" @click="guardarDiagrama()">Guardar</button>
        </div>
    </div>
</template>

<style scoped>
    /* Aca va le stilo del componente */
    .myDivDiagram{
        z-index: -1;
    }

    .button-container{
        position: absolute;
        left: 5%;
        bottom: 10%;
    }

    .button{
        height: 40px;
        width: 100px;
        color: white;
        border: none;
        box-shadow: 1px 1px 2px 3px #0f1110;
        background-color: #05386b;
        border-radius: 5px;
    }

    .myDiagramDiv{
        flex-grow: 1;
        height: 100%;
        border: solid 1px black;
    }

</style>
<script>
    export default {
        data (){
            return {
                // Acá debería ir declarado el mapa (o json) que representa el diagrama
            }
        },
        methods: {
            guardarDiagrama() {
                console.log("guardando diagrama!");
                //TODO: implementar aquí llamado a ruta para guardar el diagrama
            },
        }
    }
</script>

