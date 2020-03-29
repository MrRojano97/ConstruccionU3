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
                                        <a @click="openForm('Hombre')">Hombre <i class="fa fa-square"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="openForm('Mujer')">Mujer <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="openForm('AdopLegal')">Hijo adoptivo legal <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="openForm('AdopTemporal')">Hijo adoptivo temporal <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addSujeto('Mascota')">Mascota <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="openForm('Desconocido')">Género desconocido <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addSujeto('Embarazo')">Embarazo <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addSujeto('Espontaneo')">Aborto espontáneo <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addSujeto('Aborto')">Aborto <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addSujeto('Muerte')"> Muerte  <i class="fa fa-circle"></i>    </a>
                                    </li>
                                    <li>
                                        <a @click="addSujeto('Mellizos')"> Mellizos <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a  @click="addSujeto('Identicos')">Gemelos idénticos <i class="fa fa-circle"></i> </a>
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
                                        <a href="#" @click="relFamiliar('Leg-Coh')">Convivencia legal    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('LCoh-Sep')">Convivencia legal con separacion por hecho     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('LCoh-LSep')">Convivencia legal con separacion legal    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Relacion comprometida    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('Coh')">Convivencia    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>    
                                        <a href="#" @click="relFamiliar('Coh-Sep')">Convivencia y separacion    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('NSen-Coh')" >Convivencia no sentimental    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" >Convivencia no sentimental y separacion    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#"  @click="relFamiliar('1Noche')">Relación esporádica    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                     <li>
                                        <a href="#" @click="relFamiliar('Casual')" >Relación casual    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Relación casual y separacion   <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#"  @click="relFamiliar('Amorio')">Amorío    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                </ul>
                                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relacion Emocionales</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu2">

                                    <li>
                                        <a href="#" @click="relFamiliar('indiferencia')">Indiferencia <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('armonia')">armonía <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('hostilidad')">Hostilidad <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('violencia')">Violencia <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('abuso')">Abuso <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('manipulacion')">Manipulación <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('distante')">Distante <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#" @click="relFamiliar('amistad')">Amistad <i class="fa fa-arrow-circle-right"></i>    </a>
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
                                        <a @click="guardarDiagrama()">Guardar      <i class="fa fa-edit"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Eliminar    <i class="fa fa-trash"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Editar      <i class="fa fa-edit"></i>    </a>
                                    </li>
                                    <li>
                                        <a >ETC</a>
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
                                <h1>Ingresar Datos de {{Sujeto}}</h1>

                                <label for="nombre"><b>Nombre</b></label>
                                <input v-model="nombre" type="text" placeholder="Ingrese nombre" name="nombre" id="nombre" required>

                                <label for="psw"><b>Apellido</b></label>
                                <input v-model="apellido" type="text" placeholder="Ingrese apellido" name="psw" id="psw" required>

                                <label for="edad"><b>Edad</b></label>
                                <input v-model="edad" type="text" placeholder="Ingrese edad" name="edad" id="edad" required>

                                <button @click="saveData(Sujeto), closeForm()" type="submit" class="btn">Guardar</button>
                                <button type="submit" class="btn cancel" @click="closeForm()">Cancelar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-9" onload="init()">
                <div id="myDiagramDiv" style="flex-grow: 1;border: solid 1px black;height:1000px"></div>
                    
            </div>
        </div>
    </div>
</template>



<script>
    var counter = 0;
    var $ = go.GraphObject.make;
    var myDiagram;
    export default {
        name: 'Diagram',
        data (){
            return {
                nombre : "",
                apellido : "",
                genero : "",
                edad : "",
                Sujeto: ""
            }
        },
        mounted() {

            this.myDiagram =  $(go.Diagram, "myDiagramDiv",  // nombre que se utiliza para referenciar desde el DIV
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

            //

                function makePort(name, spot, output, input) {
                // the port is basically just a small transparent square
                return $(go.Shape, "Circle",
                {
                    fromLinkable: output, toLinkable: input,
                    fill: null,  // not seen, by default; set to a translucent gray by showSmallPorts, defined below
                    stroke: null,
                    desiredSize: new go.Size(7, 7),
                    alignment: spot,  // align the port on the main Shape
                    alignmentFocus: spot,  // just inside the Shape
                    portId: name,  // declare this object to be a "port"
                    fromSpot: spot, toSpot: spot,  // declare where links may connect at this port
                    cursor: "pointer"  // show a different cursor to indicate potential link point
                });
            }

            var nodeSelectionAdornmentTemplate =
                $(go.Adornment, "Auto",
                $(go.Shape, { fill: null, stroke: "deepskyblue", strokeWidth: 1.5, strokeDashArray: [4, 2] }),
                $(go.Placeholder)
                );

            var nodeResizeAdornmentTemplate =
                $(go.Adornment, "Spot",
                { locationSpot: go.Spot.Right },
                $(go.Placeholder),
                $(go.Shape, { alignment: go.Spot.TopLeft, cursor: "nw-resize", desiredSize: new go.Size(6, 6), fill: "lightblue", stroke: "deepskyblue" }),
                $(go.Shape, { alignment: go.Spot.Top, cursor: "n-resize", desiredSize: new go.Size(6, 6), fill: "lightblue", stroke: "deepskyblue" }),
                $(go.Shape, { alignment: go.Spot.TopRight, cursor: "ne-resize", desiredSize: new go.Size(6, 6), fill: "lightblue", stroke: "deepskyblue" }),

                $(go.Shape, { alignment: go.Spot.Left, cursor: "w-resize", desiredSize: new go.Size(6, 6), fill: "lightblue", stroke: "deepskyblue" }),
                $(go.Shape, { alignment: go.Spot.Right, cursor: "e-resize", desiredSize: new go.Size(6, 6), fill: "lightblue", stroke: "deepskyblue" }),

                $(go.Shape, { alignment: go.Spot.BottomLeft, cursor: "se-resize", desiredSize: new go.Size(6, 6), fill: "lightblue", stroke: "deepskyblue" }),
                $(go.Shape, { alignment: go.Spot.Bottom, cursor: "s-resize", desiredSize: new go.Size(6, 6), fill: "lightblue", stroke: "deepskyblue" }),
                $(go.Shape, { alignment: go.Spot.BottomRight, cursor: "sw-resize", desiredSize: new go.Size(6, 6), fill: "lightblue", stroke: "deepskyblue" })
                );

            var nodeRotateAdornmentTemplate =
                $(go.Adornment,
                { locationSpot: go.Spot.Center, locationObjectName: "CIRCLE" },
                $(go.Shape, "Circle", { name: "CIRCLE", cursor: "pointer", desiredSize: new go.Size(7, 7), fill: "lightblue", stroke: "deepskyblue" }),
                $(go.Shape, { geometryString: "M3.5 7 L3.5 30", isGeometryPositioned: true, stroke: "deepskyblue", strokeWidth: 1.5, strokeDashArray: [4, 2] })
                );

            this.myDiagram.nodeTemplateMap.add( "Hombre",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/hombre.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false ,
                    editable: true},

                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));

            this.myDiagram.nodeTemplateMap.add( "Mujer",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/mujer.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true },
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "AdopLegal",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/hijo_adoptado.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false ,
                    editable: true},
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "AdopTemporal",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/hijo_adoptivo_temporal.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false ,
                    editable: true},
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "Mascota",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/mascota.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true},
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "Desconocido",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/genero_indefinido.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true },
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "Embarazo",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/embarazada.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true},
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "Espontaneo",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/aborto_espontaneo.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true },
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "Aborto",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/aborto.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true },
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "Muerte",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/muerte.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true},
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "Mellizos",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/gemelos.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true },
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));
            this.myDiagram.nodeTemplateMap.add( "Identicos",
                $(go.Node, "Spot",
                { locationSpot: go.Spot.Center },
                new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
                { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
                { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
                { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
                new go.Binding("angle").makeTwoWay(),
                // the main object is a Panel that surrounds a TextBlock with a Shape
                $(go.Picture, "imagenes/gemelos_identicos.png"
                ),
                $(go.TextBlock,
                    { margin: new go.Margin(3, 0, 0, 0),
                    maxSize: new go.Size(100, 30),
                    isMultiline: false,
                    editable: true },
                    new go.Binding("text")),
                // four small named ports, one on each side:
                makePort("T", go.Spot.Top, true, true),
                makePort("L", go.Spot.Left, true, true),
                makePort("R", go.Spot.Right, true, true),
                makePort("B", go.Spot.Bottom, true, true),
                { // handle mouse enter/leave events to show/hide the ports
                    mouseEnter: function(e, node) { showSmallPorts(node, true); },
                    mouseLeave: function(e, node) { showSmallPorts(node, false); }
                }
            ));

            function showSmallPorts(node, show) {
                node.ports.each(function(port) {
                if (port.portId !== "") {  // don't change the default port, which is the big shape
                    port.fill = show ? "rgba(0,0,0,.3)" : null;
                }
                });
            }

            var linkSelectionAdornmentTemplate =
                $(go.Adornment, "Link",
                $(go.Shape,
                    // isPanelMain declares that this Shape shares the Link.geometry
                    { isPanelMain: true, fill: null, stroke: "deepskyblue", strokeWidth: 0 })  // use selection object's strokeWidth
                );

            var headSelectionAdornmentTemplate = 
                $(go.Adornment, "Arrowhead",
                $(go.Shape,
                { isPanelMain: true, fill: null, stroke: "deepskyblue", strokeWidth: 0 }) 
            );

            //RELACIONES FAMILIARES 

            /*Template para relacion de Matrimonio*/
            this.myDiagram.linkTemplateMap.add("Matrimonio",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true, reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                /*Forma del Link */
                new go.Binding("points").makeTwoWay(),      
                $(go.Shape,
                    { stroke: "black", strokeWidth: 2 }),
                ),
            );
            /*Template para relacion de Separacion por Hecho*/
            this.myDiagram.linkTemplateMap.add("Sep-Fact",
                $(go.Link,
                    { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
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
            this.myDiagram.linkTemplateMap.add("Sep-Leg",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "red", strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "OpenTriangleBottom", stroke: "red", strokeWidth: 3, scale: 1.3 }),
                )
            );
            /*Template para relacion de Divorcio*/
            this.myDiagram.linkTemplateMap.add("Divorcio",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "red", strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "DoubleForwardSlash", stroke: "red", strokeWidth: 3, scale: 2 }),
                )
            );
            /*Template para relacion de Compromiso*/
            this.myDiagram.linkTemplateMap.add("Engagement",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue", strokeDashArray: [5,2 ], strokeWidth: 2 })
                )
            );
            /*Template para relacion de Comprometidos y Cohabitacion*/
            this.myDiagram.linkTemplateMap.add("Eng-Coh",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue",  strokeDashArray: [5,2],strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "BigEndArrow", stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                )
            );
            /*Template para relacion de Comprometidos pero Separados*/
            this.myDiagram.linkTemplateMap.add("Eng-Sep",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue",  strokeDashArray: [5,2],strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "OpenTriangleTop",stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                )
            );
            /*Template para relacion de Nulidad*/
            this.myDiagram.linkTemplateMap.add("Nullity",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "red",strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "TripleForwardSlash", stroke: "red", strokeWidth: 3, scale: 1.3 }),
                )
            );

            /*Template para relacion de Cohabitacion Legal (1) */

            this.myDiagram.linkTemplateMap.add("Leg-Coh",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue",  strokeDashArray: [3,2],strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "BigEndArrow", stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                )
            );

            /*Template para relacion de Cohabitacion Legal y Separacion por hecho (4)*/
            this.myDiagram.linkTemplateMap.add("LCoh-Sep",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue",  strokeDashArray: [5,2],strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "OpenTriangleTop",stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                )
            );  

            /*Template para relacion de Cohabitacion Legal y Separacino Oficial Legal (6) */

            this.myDiagram.linkTemplateMap.add("LCoh-LSep",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue",  strokeDashArray: [5,2],strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "OpenTriangleBottom",stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                )
            );

            /*Template para relacion de Comprometidos (commited relationship) (9)*/




            /*Template  para relacion de Cohabitacion (2)*/
            this.myDiagram.linkTemplateMap.add("Coh",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue",  strokeDashArray: [2,1],strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "BigEndArrow", stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                )
            );

            /*Template para relacion de Cohabitacion y separacion  (5)*/

            this.myDiagram.linkTemplateMap.add("Coh-Sep",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue",  strokeDashArray: [2,2],strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "OpenTriangleTop",stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                )
            );

            /*Template para relacion de Cohabitacion No Sentimental(7) */

            this.myDiagram.linkTemplateMap.add("NSen-Coh",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue",  strokeDashArray: [2,4],strokeWidth: 2 }),
                $(go.Shape,
                    { toArrow: "BigEndArrow", stroke: "blue", strokeWidth: 3, scale: 1.3 }),
                )
            );
            
            /*Template para relacion Casual/Saliendo (3)*/

            this.myDiagram.linkTemplateMap.add("Casual",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue", strokeDashArray: [1,1], strokeWidth: 2 })
                )
            );
            

            /*Template para relacion de Una Noche (8)*/

            this.myDiagram.linkTemplateMap.add("1Noche",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "blue", strokeDashArray: [2,2], strokeWidth: 3 })
                )
            );

            /*Template para relacion de Amorio (10)*/

            this.myDiagram.linkTemplateMap.add("Amorio",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "DeepPink", strokeDashArray: [2,2], strokeWidth: 3 })
                )
            );


            //RELACIONES EMOCIONALES

            /*Template para relacion de indiferencia*/
            this.myDiagram.linkTemplateMap.add("indiferencia",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                $(go.Shape,
                    { stroke: "black", strokeDashArray: [5,5], strokeWidth: 2 })
                )
            );
            /*Template para relacion de armonia*/
            this.myDiagram.linkTemplateMap.add("armonia",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                /*Forma del Link */
                $(go.Shape,
                    { stroke: "green", strokeWidth: 2 }),
                )
            );
            /*Template para relacion de hostil*/
            this.myDiagram.linkTemplateMap.add("hostilidad",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                /*Forma del Link */
                $(go.Shape,
                    { stroke: "red", strokeWidth: 2 }),
                    $(go.Shape,  // the arrowhead
                    { toArrow: "StretchedDiamond", stroke: "red", fill:"white", strokeWidth: 3 }),
                $(go.Shape,  // the arrowhead
                    {fromArrow: "Diamond", stroke: "red", fill:"white",  strokeWidth: 3 }),
                )
            );
            /*Template para relacion de violencia*/
            this.myDiagram.linkTemplateMap.add("violencia",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                /*Forma del Link */
                $(go.Shape,
                    { stroke: "red", strokeWidth: 3 }),
                $(go.Shape,  // the arrowhead
                    { toArrow: "StretchedDiamond", stroke: "red", fill:"red",strokeWidth: 4 }),
                $(go.Shape,  // the arrowhead
                    {fromArrow: "Diamond", stroke: "red", fill:"red",strokeWidth: 4 })
                )
            );
            /*Template para relacion de abuso*/
            this.myDiagram.linkTemplateMap.add("abuso",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                /*Forma del Link */
                $(go.Shape,
                    { stroke: "blue", strokeWidth: 2 }),
                $(go.Shape,  // the arrowhead
                    { toArrow: "Standard", stroke: "blue", fill:null }),
                    $(go.Shape,  // the arrowhead
                    {fromArrow: "PlusCircle", stroke: "blue", fill:"blue",strokeWidth: 3 }),
                )
            );
            /*Template para relacion de manipulacion*/
            this.myDiagram.linkTemplateMap.add("manipulacion",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                /*Forma del Link */
                $(go.Shape,
                    new go.Binding("fromArrow", "fromArrow"),
                    { stroke: "red",  strokeWidth: 2 }),
                $(go.Shape,  // the arrowhead
                    {fromArrow: "x", stroke: "red", fill:null,strokeWidth: 3 }),
                    $(go.Shape,  // the arrowhead
                    { toArrow: "OpenTriangle", stroke: "red", fill:null,strokeWidth: 3 })
                )
            );
            /*Template para relacion de distante*/
            this.myDiagram.linkTemplateMap.add("distante",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                /*Forma del Link */
                $(go.Shape,
                    { stroke: "black",strokeDashArray: [5,5], strokeWidth: 4 }),
                )
            );
            /*Template para relacion de amistad*/
            this.myDiagram.linkTemplateMap.add("amistad",
                $(go.Link,
                { selectable : true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
                { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                /*Forma del Link */
                $(go.Shape,
                    { stroke: "green", strokeWidth: 2 }),
                $(go.Shape,  // the arrowhead
                    {fromArrow: "BackwardHalfTriangleTop", stroke: "green", strokeWidth: 3 }),
                    $(go.Shape,  // the arrowhead
                    { toArrow: "HalfTriangleBottom", stroke: "green", strokeWidth: 3 }),
                )
            );

                
            },    
            methods: {
                relaciones(){
                    alert('al presionar llega aqui');
                },
                linktest()
                {  

                },
                guardartest()
                {

                },
                openForm(Sujeto) {
                    this.Sujeto = Sujeto;
                    document.getElementById("myForm").style.display = "block";
                },
                closeForm() {
                    document.getElementById("myForm").style.display = "none";
                },
               saveData(Sujeto) {
                    var sujeto = {
                        nombre : this.nombre,
                        apellido : this.apellido,
                        edad : this.edad,
                    }
                    this.addSujeto2(Sujeto,this.nombre,this.apellido,this.edad);
                    /*
                    console.log("NUEVO SUJETO PARA GUARDAR:");
                    console.log(sujeto);
                    */
                    this.nombre = "";
                    this.apellido = "";
                    this.edad = "";

                    
                    
                },
                addSujeto2(sujeto,nombre,apellido,edad){
                    this.myDiagram.startTransaction("make new node");
                    this.myDiagram.model.addNodeData({ text: nombre+" "+apellido+", "+edad, category : sujeto});
                    this.myDiagram.commitTransaction("make new node");
                },
                addSujeto(sujeto){
                    this.myDiagram.startTransaction("make new node");
                    this.myDiagram.model.addNodeData({ text: "sujeto", category : sujeto});
                    this.myDiagram.commitTransaction("make new node");
                },
                relFamiliar(relacion){
                    /*Crear nodo base para relacion*/
                    this.myDiagram.startTransaction("make new node");
                    this.myDiagram.model.addNodeData({ key: counter });
                    this.myDiagram.commitTransaction("make new node");
                    /* Crear relacion con formato especificado en 'relacion' */
                    this.myDiagram.startTransaction("make new link");
                    this.myDiagram.model.addLinkData({from : counter, to :counter, category:relacion});
                    this.myDiagram.commitTransaction("make new link");
                    counter++;
                },
                guardarDiagrama(){
                    var sujeto = {
                        nombre: 'test3',
                        apellido: 'testeo3', 
                        genero: 'M', 
                        edad: '2', 
                        archivoJson: this.myDiagram.model.toJson()
                    } 
                    const nuevoSujeto = sujeto;
                    axios.post('/rutaSujeto', nuevoSujeto)
                        .then((res) =>{
                        })
                }
            }
        }
    
</script>


  
  