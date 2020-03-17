@extends('layouts.app')

@section('content')
<sidebar-component></sidebar-component>
<!-- https://www.w3schools.com/howto/howto_js_dropdown_sidenav.asp -->
<!--br>
<br>
<div class="container">
    <div class="sidenav">
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a>
    <button class="dropdown-btn">Dropdown
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
    <a href="#contact">Search</a>
    </div>
</div-->
<!DOCTYPE html>

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