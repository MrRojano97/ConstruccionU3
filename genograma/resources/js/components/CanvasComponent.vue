<template>
    <div class="container">
        <div class="myDiagramDiv" id="myDiagramDiv"></div>
        <div class="button-container">
            <button class="button" @click="guardarDiagrama">Guardar</button>
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
    const baseUrl = "http://127.0.0.1:8000/";
    export default {
        created: function(){
            // esta función se ejecuta al cargar el componente
            // implementar alguna forma de setear los datos del usuario actual.
            // se supone que en la ventana modal se deberían cargar los datos del sujeto

            //this.getUsuarioActual(); //método tentativo
        },
        data:  {
            // Acá debería ir declarado el mapa (o json) que representa el diagrama
            //estos datos corresponden al usuario actual
            nombreUsuarioActual : '',
            apellidoUsuarioActual : '',
            edadUsuarioActual : '',
            generoUsuarioActual : '',
            diagramaUsuarioActual : {}
        },
        methods: {
            guardarDiagrama : function() {
                axios.post(baseUrl+"rutaSujeto", {
                    'nombre' : this.nombreUsuarioActual,
                    'apellido' : this.apellidoUsuarioActual,
                    'edad' : this.edadUsuarioActual,
                    'genero' : this.generoUsuarioActual,
                    'diagrama' : this.diagramaUsuarioActual,
                }).then(response => {
                    console.log("---> RECIBIENDO DESDE GUARDAR DIAGRAMA:" + response);
                });
            },
            setDiagramaActual : function(diagrama){
              this.diagramaUsuarioActual = diagrama;
            },
            getUsuarioActual : function (){
                // Esta función debería ser algo asi:
                // axios.get(baseUrl+"rutaSujeto").then(response => {
                //     this.nombreUsuarioActual = response.nombre;
                //     thislapellidoUsuarioActual = response.apellido;
                //     this.edadUsuarioActual = response.edad;
                //     this.greneroUsuarioActual = response.genero;
                //     this.diagramaUsuarioActual = response.diagrama;
                // });
            }
        }
    }
</script>

