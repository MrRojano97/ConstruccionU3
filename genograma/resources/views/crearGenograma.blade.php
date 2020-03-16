@extends('layouts.app')

@section('sidebar')
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
@endsection
@section('content')
<!-- https://www.w3schools.com/howto/howto_js_dropdown_sidenav.asp -->
asdsd

<html lang="en", xmlns="https://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <title></title>
        <div id="app">

        <script>
            function init(){
                var $ = go.GraphObject.make;
                myDiagram = $(go.Diagram, "myDiagramDiv", {
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
            }
        </script>
        </div>

    </head>
    <body onload="init()">
        <div id="myDiagramDiv" style="flex-grow: 1; height:900px; border: solid 1px black"></div>
    </body>

    <script src="{{asset('js/app.js')}}" defer></script>
</html>
@endsection
@extends('layouts.fother')