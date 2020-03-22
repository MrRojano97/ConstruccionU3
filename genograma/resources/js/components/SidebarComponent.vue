<template>
    <div class="conteiner">
        <div class="row justify-content-md-center">
            <div class="col-3">
                <div class="side-div">
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h3>Acciones </h3>
                        </div>
                        <ul class="list-unstyled components">
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Nueva Persona</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                    <li>
                                        <a @click="openForm()">Hombre <i class="fa fa-square"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="openForm()">Mujer <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="openForm()">Hijo adoptivo legal <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="openForm()">Hijo adoptivo temporal <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a>Mascota <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="openForm()">Género desconocido <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a >Embarazo <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a>Aborto espontáneo <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a>Aborto <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a>Muerte <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a>Mellizos <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a>Gemelos idénticos <i class="fa fa-circle"></i> </a>
                                    </li>
                                </ul>
                                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relaciones Familiares</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu1">
                                    <li>
                                        <a href="#"  @click="relFamiliar('Matrimonio')">Matrimonio     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('Sep-Fact')">Separacion por hecho     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('Sep-Leg')">Separacion legal     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('Divorcio')">Divorcio     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('Engagement')">Compromiso    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('Eng-Coh')">Compromiso con convivencia     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('Eng-Sep')">Compromiso y separacion    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('Nullity')">Nulidad     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Convivencia legal    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Convivencia legal con separacion por hecho     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Convivencia legal con separacion legal    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Relacion comprometida    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Convivencia    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Convivencia y separacion    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Convivencia no sentimental    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Convivencia no sentimental y separacion    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Relación esporádica    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Relación casual    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Relación casual y separacion   <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Amorío    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                </ul>
                                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relacion Emocionales</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu2">

                                    <li>
                                        <a v-on:click="relaciones" href="#">Indiferencia <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">armonía <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Hostilidad <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Violencia <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Abuso <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Manipulación <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Distante y violencia <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Abuso físico <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Control <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Cortada <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Mejores amigos <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Hostilidad cercana <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Violencia cercana <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Abuso emocional <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Celos <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Cortada y reparada <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Amor <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Fundida Hostil <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Fundida violencia <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Abuso sexual <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Admirador <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Conflicto <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Enamorados <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Fundida/fusionada <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Enfocada <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Negligencia <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Limerencia <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Enfocada <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Conexión emocional <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Desconfianza <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Enfocada negativamente <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Desconocidos <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Normal <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                </ul>
                                <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu3">
                                    <li>
                                        <a href="#">Eliminar    <i class="fa fa-trash"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Editar      <i class="fa fa-edit"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">ETC</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Accion</a>
                            </li>
                        </ul>
                    </nav>
                    <div>
                        <!--            <button class="open-button" v-on:click="openForm">Editar</button>-->
                        <div class="form-popup" id="myForm">
                            <form action="#" class="form-container">
                                <h1>Login</h1>

                                <label for="email"><b>Nombre</b></label>
                                <input v-model="nombre" type="text" placeholder="ingrese nombre" name="email" id="email" required>

                                <label for="psw"><b>Apellido</b></label>
                                <input v-model="apellido" type="text" placeholder="Ingrese apellido" name="psw" id="psw" required>

                                <label for="edad"><b>edad</b></label>
                                <input v-model="edad" type="text" placeholder="Ingrese edad" name="edad" id="edad" required>

                                <label for="genero"><b>Genero</b></label>
                                <input v-model="genero" type="text" placeholder="Ingrese género" name="genero" id="genero" required>

                                <button @click="saveData()" type="submit" class="btn">Guardar</button>
                                <button type="submit" class="btn cancel" @click="closeForm()">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9" onload="init()">
                <div id="myDiagramDiv" style="flex-grow: 1;border: solid 1px black;height:630px"></div>
                    <div id="buttons">
                        <button onclick="save()">Save</button>
                        <button onclick="load()">Load</button>
                    </div>
                  <textarea id="mySavedModel" style="width:100%;height:300px">{ "class": "GraphLinksModel",
                "linkFromPortIdProperty": "fromPort",
                "linkToPortIdProperty": "toPort",
                "modelData": {"position":"-398.5 -307.9767441860465"},
                "nodeDataArray": [ 
                {"text":"Start", "figure":"Circle", "fill":"#00AD5F", "key":-1, "loc":"-300 -260"},
                {"text":"End", "figure":"Circle", "fill":"#CE0620", "key":-5, "loc":"-110 -270"}
                ],
                "linkDataArray": [ {"points":[-262.6627906976744,-260,-252.66279069767438,-260,-202.81976744186045,-260,-202.81976744186045,-270,-152.97674418604652,-270,-142.97674418604652,-270], "from":-1, "to":-5, "toPort":"L"} ]}
                    </textarea>
            </div>
        </div>
    </div>
</template>



<script>
    var counter = 0;
    var $ = go.GraphObject.make;
    export default {
        name: 'Diagram',
        mounted() {
            this.$myDiagram =  $(go.Diagram, "myDiagramDiv",  // nombre que se utiliza para referenciar desde el DIV
                {
                    grid: $(go.Panel, "Grid",
                    $(go.Shape, "LineH", { stroke: "lightgray", strokeWidth: 0.5 }),
                    $(go.Shape, "LineH", { stroke: "gray", strokeWidth: 0.5, interval: 10 }),
                    $(go.Shape, "LineV", { stroke: "lightgray", strokeWidth: 0.5 }),
                    $(go.Shape, "LineV", { stroke: "gray", strokeWidth: 0.5, interval: 10 })
                    ),
                    "draggingTool.dragsLink": true,
                    "draggingTool.isGridSnapEnabled": true,
                    "linkingTool.isUnconnectedLinkValid": true,
                    "linkingTool.portGravity": 20,
                    "relinkingTool.isUnconnectedLinkValid": true,
                    "relinkingTool.portGravity": 20,
                    "relinkingTool.fromHandleArchetype":
                    $(go.Shape, "Diamond", { segmentIndex: 0, cursor: "pointer", desiredSize: new go.Size(8, 8), fill: "tomato", stroke: "darkred" }),
                    "relinkingTool.toHandleArchetype":
                    $(go.Shape, "Diamond", { segmentIndex: -1, cursor: "pointer", desiredSize: new go.Size(8, 8), fill: "darkred", stroke: "tomato" }),
                    "linkReshapingTool.handleArchetype":
                    $(go.Shape, "Diamond", { desiredSize: new go.Size(7, 7), fill: "lightblue", stroke: "deepskyblue" }),
                    "rotatingTool.handleAngle": 270,
                    "rotatingTool.handleDistance": 30,
                    "rotatingTool.snapAngleMultiple": 15,
                    "rotatingTool.snapAngleEpsilon": 15,
                    "undoManager.isEnabled": true
                });
                function makePort(name, spot, output, input) {
                    // the port is basically just a small transparent square
                    return $(go.Shape, "Circle",
                    {
                        fill: null,  // not seen, by default; set to a translucent gray by showSmallPorts, defined below
                        stroke: null,
                        desiredSize: new go.Size(7, 7),
                        alignment: spot,  // align the port on the main Shape
                        alignmentFocus: spot,  // just inside the Shape
                        portId: name,  // declare this object to be a "port"
                        fromSpot: spot, toSpot: spot,  // declare where links may connect at this port
                        fromLinkable: output, toLinkable: input,  // declare whether the user may draw links to/from here
                        cursor: "pointer"  // show a different cursor to indicate potential link point
                    });
                }
                /*Template para relacion de Matrimonio*/
                this.$myDiagram.linkTemplateMap.add("Matrimonio",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    /*Forma del Link */
                    $(go.Shape,
                        { stroke: "black", strokeWidth: 2 }),
                    )
                );
                /*Template para relacion de Separacion por Hecho*/
                this.$myDiagram.linkTemplateMap.add("Sep-Fact",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    /*Forma del Link */
                    $(go.Shape,
                        { stroke: "red", strokeWidth: 2 }),
                    /*Forma del la punta de flecha */
                    $(go.Shape,
                        { toArrow: "OpenTriangleTop", stroke: "red", strokeWidth: 3, scale: 1.3 }),
                    )
                );
                /*Template para relacion de Separacion Legal*/
                this.$myDiagram.linkTemplateMap.add("Sep-Leg",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    $(go.Shape,
                        { stroke: "red", strokeWidth: 2 }),
                    $(go.Shape,
                        { toArrow: "OpenTriangleBottom", stroke: "red", strokeWidth: 3, scale: 1.3 }),
                    )
                );
                /*Template para relacion de Divorcio*/
                this.$myDiagram.linkTemplateMap.add("Divorcio",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    $(go.Shape,
                        { stroke: "red", strokeWidth: 2 }),
                    $(go.Shape,
                        { toArrow: "DoubleForwardSlash", stroke: "red", strokeWidth: 3, scale: 2 }),
                    )
                );
                /*Template para relacion de Compromiso*/
                this.$myDiagram.linkTemplateMap.add("Engagement",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    $(go.Shape,
                        { stroke: "blue", strokeDashArray: [5,5], strokeWidth: 2 })
                    )
                );
                /*Template para relacion de Comprometidos y Cohabitacion*/
                this.$myDiagram.linkTemplateMap.add("Eng-Coh",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    $(go.Shape,
                        { stroke: "blue",  strokeDashArray: [5,5],strokeWidth: 2 }),
                    $(go.Shape,
                        { toArrow: "BigEndArrow", stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                    )
                );
                /*Template para relacion de Comprometidos pero Separados*/
                this.$myDiagram.linkTemplateMap.add("Eng-Sep",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    $(go.Shape,
                        { stroke: "blue",  strokeDashArray: [5,5],strokeWidth: 2 }),
                    $(go.Shape,
                        { toArrow: "OpenTriangleTop",stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                    )
                );
                /*Template para relacion de Nulidad*/ 
                this.$myDiagram.linkTemplateMap.add("Nullity",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    $(go.Shape,
                        { stroke: "red",  strokeDashArray: [5,5],strokeWidth: 2 }),
                    $(go.Shape,
                        { toArrow: "TripleForwardSlash", stroke: "red", strokeWidth: 3, scale: 1.3 }),
                    )
                );
                            

                // save a model to and load a model from Json text, displayed below the Diagram
                function save() {
                var str = this.$myDiagram.model.toJson();
                document.getElementById("mySavedModel").value = str;
                }
                function load() {
                var str = document.getElementById("mySavedModel").value;
                this.$myDiagram.model = go.Model.fromJson(str);
                this.$myDiagram.model.undoManager.isEnabled = true;
                }
                load();

        },
        data (){
            return {
                nombre : "",
                apellido : "",
                genero : "",
                edad : ""
            }
        },
        methods: {
            relaciones(){
                alert('al presionar llega aqui');


            },
            openForm() {
                document.getElementById("myForm").style.display = "block";
            },
            closeForm() {
                document.getElementById("myForm").style.display = "none";
            },
            saveData() {
                var sujeto = {
                    nombre : this.nombre,
                    apellido : this.apellido,
                    edad : this.edad,
                    genero : this.genero
                }
                console.log("NUEVO SUJETO PARA GUARDAR:");
                console.log(sujeto);
                this.nombre = "";
                this.apellido = "";
                this.edad = "";
                this.enero = "";
            },
            relFamiliar(relacion){
                /*Crear nodo base para relacion*/
                this.$myDiagram.startTransaction("make new node");
                this.$myDiagram.model.addNodeData({ key: counter });
                this.$myDiagram.commitTransaction("make new node");     
                /* Crear relacion con formato especificado en 'relacion' */
                this.$myDiagram.startTransaction("make new link");
                this.$myDiagram.model.addLinkData({from : counter, to :counter, category:relacion});
                this.$myDiagram.commitTransaction("make new link");
                counter++;

            } 
        }
    }
</script>
