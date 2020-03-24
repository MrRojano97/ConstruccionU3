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
                                        <a @click="addHombre()">Hombre <i class="fa fa-square"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addMujer()">Mujer <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addHijoAdoptivo()">Hijo adoptivo legal <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addHijoAdoptivoTemporal()">Hijo adoptivo temporal <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addMascota()">Mascota <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addGeneroDesconocido()">Género desconocido <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a @click="addEmbarazo()">Embarazo <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a@click="addAbortoEspontaneo()">Aborto espontáneo <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a@click="addAborto()">Aborto <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a@click="addMuerte()">Muerte <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a@click="addMellizos()">Mellizos <i class="fa fa-circle"></i> </a>
                                    </li>
                                    <li>
                                        <a@click="addGemelosIdenticos()">Gemelos idénticos <i class="fa fa-circle"></i> </a>
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
                                        <a href="#">Guardar      <i class="fa fa-edit"></i>    </a>
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
                                <h1>Ingresar Datos</h1>

                                <label for="nombre"><b>Nombre</b></label>
                                <input v-model="nombre" type="text" placeholder="Ingrese nombre" name="nombre" id="nombre" required>

                                <label for="psw"><b>Apellido</b></label>
                                <input v-model="apellido" type="text" placeholder="Ingrese apellido" name="psw" id="psw" required>

                                <label for="edad"><b>Edad</b></label>
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
                edad : ""
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
                    )
                });

                /*Template para relacion de Matrimonio*/
                this.myDiagram.linkTemplateMap.add("Matrimonio",
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
                this.myDiagram.linkTemplateMap.add("Sep-Fact",
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
                this.myDiagram.linkTemplateMap.add("Sep-Leg",
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
                this.myDiagram.linkTemplateMap.add("Divorcio",
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
                this.myDiagram.linkTemplateMap.add("Engagement",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    $(go.Shape,
                        { stroke: "blue", strokeDashArray: [5,5], strokeWidth: 2 })
                    )
                );
                /*Template para relacion de Comprometidos y Cohabitacion*/
                this.myDiagram.linkTemplateMap.add("Eng-Coh",
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
                this.myDiagram.linkTemplateMap.add("Eng-Sep",
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
                this.myDiagram.linkTemplateMap.add("Nullity",
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
                 /*Template para relacion de indiferencia*/
                this.myDiagram.linkTemplateMap.add("indiferencia",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
                    { relinkableFrom: true, relinkableTo: true ,reshapable: true },
                    {routing: go.Link.AvoidsNodes, curve: go.Link.JumpOver,},
                    $(go.Shape,
                        { stroke: "black", strokeDashArray: [5,5], strokeWidth: 2 })
                    )
                );
                /*Template para relacion de armonia*/
                this.myDiagram.linkTemplateMap.add("armonia",
                    $(go.Link,
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
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
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
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
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
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
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
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
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
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
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
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
                    { isLayoutPositioned: false, isTreeLink: false, curviness: -50 },
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
                addHombre()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/hombre.png")));
                },
                addMujer()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/mujer.png")));
                },
                addHijoAdoptivo()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/hijo_adoptado.png")));
                },
                addHijoAdoptivoTemporal()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/hijo_adoptivo_temporal.png")));
                },
                addMascota()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/mascota.png")));
                },
                addGeneroDesconocido()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/genero_indefinido.png")));
                },
                addEmbarazo()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/embarazada.png")));
                },
                addAbortoEspontaneo()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/aborto_espontaneo.png")));
                },
                addAborto()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/aborto.png")));
                },
                addMuerte()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/muerte.png")));
                },
                addMellizos()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/gemelos.png")));
                },
                addGemelosIdenticos()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/gemelos_identicos.png")));
                },
                linktest()
                {  


                },
                guardartest()
                {

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
                    this.myDiagram.startTransaction("make new node");
                    this.myDiagram.model.addNodeData({ key: counter });
                    this.myDiagram.commitTransaction("make new node");
                    /* Crear relacion con formato especificado en 'relacion' */
                    this.myDiagram.startTransaction("make new link");
                    this.myDiagram.model.addLinkData({from : counter, to :counter, category:relacion});
                    this.myDiagram.commitTransaction("make new link");
                    counter++;
                }
            }
        }
    
</script>


  