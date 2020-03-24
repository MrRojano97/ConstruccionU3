<template>
   <div id="myDiagramDiv" style="flex-grow: 1; height: 900px; border: solid 1px black"></div>
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
    var $ = go.GraphObject.make;
    export default {
        mounted() {
            console.log('Component mounted.')
        }
        
    }
</script-->
<template>
  <div id="myDiagramDiv" style="flex-grow: 1;border: solid 1px black;height:900px"></div>
</template>


<script>
  
  var $ = go.GraphObject.make;
  // This works because we have overridden the /extensionsTS/tsconfig.json file
  // in the options to the loader: 'ts-loader', in the webpack.config.js  
  export default {
    name: 'Diagram',
    mounted() {
      var myDiagram =
        $(go.Diagram, "myDiagramDiv",  // nombre que se utiliza para referenciar desde el DIV 
            {
                grid: $(go.Panel, "Grid",
                $(go.Shape, "LineH", { stroke: "lightgray", strokeWidth: 0.5 }),
                $(go.Shape, "LineH", { stroke: "gray", strokeWidth: 0.5, interval: 10 }),
                $(go.Shape, "LineV", { stroke: "lightgray", strokeWidth: 0.5 }),
                $(go.Shape, "LineV", { stroke: "gray", strokeWidth: 0.5, interval: 10 })
                )
            });        
    }
  }
</script>

