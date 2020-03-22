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
                                        <a@click="addEmbarazo()">Embarazo <i class="fa fa-circle"></i> </a>
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
                                        <a href="#">Matrimonio     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Separacion por hecho     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Separacion legal     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Divorcio     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Compromiso    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Compromiso con convivencia     <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Compromiso y separacion    <i class="fa fa-arrow-circle-right"></i>    </a>
                                    </li>
                                    <li>
                                        <a href="#">Nulidad     <i class="fa fa-arrow-circle-right"></i>    </a>
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
                        <button @click="addImagen()">Save</button>
                        <button onclick="load()">Load</button>
                    </div>
                  <textarea id="mySavedModel" style="width:100%;height:300px">{ "class": "go.GraphLinksModel",
                    "nodeDataArray": [
                        { "key": 1, "text": "Node 1", "fill": "blueviolet", "loc": "100 100" },
                        { "key": 2, "text": "Node 2", "fill": "orange", "loc": "400 100" }
                    ],
                    "linkDataArray": [  ]
                    }
                    </textarea>
            </div>
        </div>
    </div>
</template>



<script>
    var $ = go.GraphObject.make;
    var myDiagram;

    export default {
        
        name: 'Diagram',
        mounted(){
            this.myDiagram =
                $(go.Diagram, "myDiagramDiv",  // nombre que se utiliza para referenciar desde el DIV
                    {
                        grid: $(go.Panel, "Grid",
                        $(go.Shape, "LineH", { stroke: "lightgray", strokeWidth: 0.5 }),
                        $(go.Shape, "LineH", { stroke: "gray", strokeWidth: 0.5, interval: 10 }),
                        $(go.Shape, "LineV", { stroke: "lightgray", strokeWidth: 0.5 }),
                        $(go.Shape, "LineV", { stroke: "gray", strokeWidth: 0.5, interval: 10 })
                        )
                    });
                
                

            },
            data(){
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
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/hombre.png")));
                },
                addHijoAdoptivoTemporal()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/hombre.png")));
                },
                addMascota()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/mascota.png")));
                },
                addGeneroDesconocido()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/genero_desconocido.png")));
                },
                addEmbarazo()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/embarazo.png")));
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
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/hombre.png")));
                },
                addGemelosIdenticos()
                {
                    this.myDiagram.add($(go.Part,$(go.Picture, "imagenes/hombre.png")));
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
                }
        }
    }
</script>

