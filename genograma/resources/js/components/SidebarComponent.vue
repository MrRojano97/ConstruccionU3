<template>
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
                            <button @click="openForm()">Hombre <i class="fa fa-square"></i> </button>
                        </li>

                        <li>
                            <a>Mujer <i class="fa fa-circle"></i> </a>
                        </li>
                    </ul>
                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relaciones Familiares</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu1">
                        <li>
                            <a>Madre   <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">Padre   <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">Hermane <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">Tie     <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">Sobrine <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">Abuele  <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">ETC     <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                    </ul>
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relacion Emocionales</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu2">
                        <li>
                            <a href="#">Casade  <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">Amantes <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">Novies  <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">Es complicado   <i class="fa fa-arrow-circle-right"></i>    </a>
                        </li>
                        <li>
                            <a href="#">ETC <i class="fa fa-arrow-circle-right"></i>    </a>
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
</template>

<style scoped>
    .sidenav {
        width: 200px;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
    }

    /* Style the sidenav links and the dropdown button */
    .sidenav a, .dropdown-btn {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 18px;
        font-family: "Lucida Console", Monaco, monospace;
        color: #818181;
        display: block;
        border: none;
        background: none;
        width:100%;
        text-align: left;
        cursor: pointer;
        outline: none;
    }

    /* On mouse-over */
    .sidenav a:hover, .dropdown-btn:hover {
        color: #f1f1f1;
    }

    /* Main content */
    .main {
        margin-left: 200px; /* Same as the width of the sidenav */
        font-size: 20px; /* Increased text to enable scrolling */
        font-family: "Lucida Console", Monaco, monospace;
        padding: 0px 10px;
    }

    /* Add an active class to the active dropdown button */
    .active {
        background-color: green;
        color: white;
    }

    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
    .dropdown-container {
        display: none;
        background-color: #262626;
        padding-left: 8px;
    }

    /* Optional: Style the caret down icon */
    .fa-caret-down {
        float: right;
        padding-right: 8px;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        min-height: 100vh;
    }
    .wrapper {
        display: flex;
        align-items: stretch;
    }
    .h3{
        font-family:"Lucida Console", Monaco, monospace ;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
    }

    #sidebar.active {
        margin-left: -250px;
    }

    #sidebar {
        /* don't forget to add all the previously mentioned styles here too */
        background: #05386b;
        color: #fff;
        transition: all 0.3s;
    }

    #sidebar .sidebar-header {
        padding: 24px;
        background: 1E90FF;
    }

    #sidebar ul.components {
        padding: 20px 0;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        font-family: "Lucida Console", Monaco, monospace;
        display: block;
        color: white;
    }
    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;
    }

    #sidebar ul li.active > a, a[aria-expanded="true"] {
        color: #fff;
        background: #05386b;
    }
    ul ul a {
        font-size: 0.9em !important;
        font-family: "Lucida Console", Monaco, monospace;
        padding-left: 30px !important;
        background: #05386b;
        color:white;
    }

    {box-sizing: border-box;}

    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    .form-popup {
        display: none;
        position: fixed;
        bottom: 0;
        right: 15px;
        border: 3px solid #f1f1f1;
        z-index: 9;
    }

    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }

    .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }

    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        margin-bottom:10px;
        opacity: 0.8;
    }

    .form-container .cancel {
        background-color: red;
    }

    .form-container .btn:hover, .open-button:hover {
        opacity: 1;
    }
</style>

<script>
    export default {
        data (){
            return {
                nombre : "",
                apellido : "",
                genero : "",
                edad : ""
            }
        },
        methods: {
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
