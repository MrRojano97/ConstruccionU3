<template>
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Acciones </h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Nueva Persona</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Hombre</a>
                    </li>
                    <li>
                        <a href="#">Mujer</a>
                    </li>
                    <li>
                        <a href="#">Elle</a>
                    </li>
                </ul>
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relaciones Familiares</a>
                <ul class="collapse list-unstyled" id="homeSubmenu1">
                    <li>
                        <a href="#">Madre</a>
                    </li>
                    <li>
                        <a href="#">Padre</a>
                    </li>
                    <li>
                        <a href="#">Hermane</a>
                    </li>
                    <li>
                        <a href="#">Tie</a>
                    </li>
                    <li>
                        <a href="#">Sobrine</a>
                    </li>
                    <li>
                        <a href="#">Abuele</a>
                    </li>
                    <li>
                        <a href="#">ETC</a>
                    </li>
                </ul>
                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Relacion Emocionales</a>
                <ul class="collapse list-unstyled" id="homeSubmenu2">
                    <li>
                        <a href="#">Casade</a>
                    </li>
                    <li>
                        <a href="#">Amantes</a>
                    </li>
                    <li>
                        <a href="#">Novies</a>
                    </li>
                    <li>
                        <a href="#">Es complicado</a>
                    </li>
                    <li>
                        <a href="#">ETC</a>
                    </li>
                </ul>
                <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Operaciones</a>
                <ul class="collapse list-unstyled" id="homeSubmenu3">
                    <li>
                        <a href="#">Eliminar</a>
                    </li>
                    <li>
                        <a href="#">Editar</a>
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
</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>