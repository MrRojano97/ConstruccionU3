<template>
<div>
<div id="botonDetalles">
    <details>
   		<summary role="button">
    		 Relacion de un Nodo
    	</summary>
		<div>
    		<table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">Relacion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ignacia</td>
                    <td>Barrios</td>
                    <td>25</td>
                    <td>Matrimonio</td>
                </tr>


            </tbody>
            </table>
    	</div>
	</details>
</div>
<div id="botonDetalles">
    <details>
   		<summary role="button">
    		 Relacion entre 2 Nodos
    	</summary>
		<div>
    		<table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Relacion</th>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Emilio</td>
                    <td>amistad</td>
                    <td>3</td>
                    <td>Nicole</td>
                </tr>


            </tbody>
            </table>
    	</div>
	</details>
</div>
<div id="botonDetalles">
    <details>
   		<summary role="button">
    		 Tipos de Nodos
    	</summary>
		<div>
    		<table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Genero</th>
                <th scope="col">Edad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>4</td>
                    <td>Juan</td>
                    <td>Ramirez</td>
                    <td>Hombre</td>
                    <td>22</td>
                </tr>


            </tbody>
            </table>
    	</div>
	</details>
</div>
</div>

</template>
<style lang="scss" >
// Colors
$grey-light: #f0f4f9;
$grey: darken($grey-light, 20%);
$blue: #05386b;
$orange: #05386b;

// Defaults
$box-shadow: 0 15px 35px rgba(50, 50, 93, .1), 0 5px 15px rgba(0, 0, 0, .07);
$border-radius: .3em;

@keyframes expand {
  0%    {opacity: 0; max-height: 0; }
  100%  {opacity: 1; max-height: 30em; }
}

// Basic setup
html {
	overflow-y: scroll;
}

body {
    position: relative;
	background: #f0f4f9;
	line-height: 1.6;
	font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica, Arial, sans-serif;
}

.botonDetalles {
	display: block; /* IE */
	width: 70%; max-width: 50em;
	margin: 3em auto;
}

p {
	margin: 0;
}

p + p {
	margin-top: 1.5em;
}

a {
	color: $blue;
}

details > div {
	position: relative;
	padding: 0.25em 0.5em;
	margin-bottom: .6em;
	border-radius: $border-radius;
	box-shadow: $box-shadow;
	background-color: white;
	// animation: expand .2s ease-in-out;
}

// Details & Summary
summary {
	position: relative;
	display: block;
	background: white;
	padding-left: 3em;
	margin-bottom: .5em;
	font-size: 1.4em;
	line-height: 3;
	box-sizing: border-box;
	list-style: none;
	cursor: pointer;
	border-radius: $border-radius;
	box-shadow: $box-shadow;
}

summary:hover,
summary:focus {
	background: $blue;
	color: white;
	text-shadow: 0 -1px 0 rgba(black, .5);
	outline: 0;
}

summary::-webkit-details-marker {
	display: none
}

summary::before {
	content: '+';
	position: absolute;
	top: 50%;
	left: 1em;
	transform: translateY(-50%);
	width: 1em;
	height: 1em;
	margin-right: 1em;
	background: $orange;
	color: white;
	font-family: Arial, sans-serif;
	font-size: 20px;
	line-height: 1;
	text-align: center;
	border-radius: 50%;
}

details[open] summary::before {
	content: '-';
	line-height: .9;
}

details[open] summary:hover::before,
details[open] summary:focus::before {
	background: white;
	color: $blue;
}

</style>

<script>
function traerDatos(){
    const xhttp = new  XMLHttpRequest();
    xhttp.open('GET','archivoJson', true);
    xhttp.send();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
        }
    }
}


</script>
