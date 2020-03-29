@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Drag and Drop Example</title>
    <meta name="description" content="Use HTML5 drag-and-drop to implement dragging HTML elements onto a GoJS Diagram to create new nodes." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Copyright 1998-2020 by Northwoods Software Corporation. -->


    </head>



  <body >
      <div id="sample">
          <div>
            <sidebar-component></sidebar-component>
            <modal-component></modal-component>
          </div>

            <textarea id="mySavedModel" style="width:0%;height:0px">


            </textarea>
          </div>
        </div>
  </body>
</html>

@endsection

<style>
  .draggable {
    font: bold 16px sans-serif;
    width: 140px;
    height: 20px;
    text-align: center;
    background: white;
    cursor: move;
    margin-top: 20px;
  }

  .palettezone {
    width: 160px;
    height: 400px;
    background: lightblue;
    padding: 10px;
    padding-top: 1px;
    float: left;
  }
</style>


@extends('layouts.fother')
