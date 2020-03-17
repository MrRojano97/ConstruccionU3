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

  

  <body onload="init()">
      <div id="sample">
          <div style="width: 100%; display: flex; justify-content: space-between">
            <!--sidebar-component></sidebar-component-->
            <!--<div id="myPaletteDiv" style="width: 105px; margin-right: 2px; background-color: whitesmoke; border: solid 1px black"></div>-->
            <canvas-component></canvas-component>
          </div>
          <div>

            <textarea id="mySavedModel" style="width:0%;height:0px">
              " "
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
<script id="code"> function init() {  
  var $ = go.GraphObject.make; 

    myDiagram =
    $(go.Diagram, "myDiagramDiv",  // nombre que se utiliza para referenciar desde el DIV 
      {
        grid: $(go.Panel, "Grid",
          $(go.Shape, "LineH", { stroke: "lightgray", strokeWidth: 0.5 }),
          $(go.Shape, "LineH", { stroke: "gray", strokeWidth: 0.5, interval: 10 }),
          $(go.Shape, "LineV", { stroke: "lightgray", strokeWidth: 0.5 }),
          $(go.Shape, "LineV", { stroke: "gray", strokeWidth: 0.5, interval: 10 })
        )
      });
    }

    //   when the document is modified, add a "*" to the title and enable the "Save" button
//   myDiagram.addDiagramListener("Modified", function(e) {
//     var button = document.getElementById("SaveButton");
//     if (button) button.disabled = !myDiagram.isModified;
//     var idx = document.title.indexOf("*");
//     if (myDiagram.isModified) {
//       if (idx < 0) document.title += "*";
//     } else {
//       if (idx >= 0) document.title = document.title.substr(0, idx);
//     }
//   });

//   // Define a function for creating a "port" that is normally transparent.
//   // The "name" is used as the GraphObject.portId, the "spot" is used to control how links connect
//   // and where the port is positioned on the node, and the boolean "output" and "input" arguments
//   // control whether the user can draw links from or to the port.
//   function makePort(name, spot, output, input) {
//     // the port is basically just a small transparent square
//     return $(go.Shape, "Circle",
//       {
//         fill: null,  // not seen, by default; set to a translucent gray by showSmallPorts, defined below
//         stroke: null,
//         desiredSize: new go.Size(1, 1),
//         alignment: spot,  // align the port on the main Shape
//         alignmentFocus: spot,  // just inside the Shape
//         portId: name,  // declare this object to be a "port"
//         fromSpot: spot, toSpot: spot,  // declare where links may connect at this port
//         fromLinkable: output, toLinkable: input,  // declare whether the user may draw links to/from here
//         cursor: "pointer"  // show a different cursor to indicate potential link point
//       });
//   }

//   var nodeSelectionAdornmentTemplate =
//     $(go.Adornment, "Auto",
//       $(go.Shape, { fill: null, stroke: "deepskyblue", strokeWidth: 5.5, strokeDashArray: [4, 4] }),
//       $(go.Placeholder)
//     );

//   var nodeResizeAdornmentTemplate =
//     $(go.Adornment, "Spot",

//     );

//   var nodeRotateAdornmentTemplate =
//     $(go.Adornment,
//       { locationSpot: go.Spot.Center, locationObjectName: "CIRCLE" },
//       $(go.Shape, "Circle", { name: "CIRCLE", cursor: "pointer", desiredSize: new go.Size(1, 1), fill: "lightblue", stroke: "deepskyblue" }),
//       $(go.Shape, { geometryString: "M3.5 7 L3.5 30", isGeometryPositioned: true, stroke: "deepskyblue", strokeWidth: 1.5, strokeDashArray: [4, 2] })
//     );

//   myDiagram.nodeTemplate =
//     $(go.Node, "Spot",
//       { locationSpot: go.Spot.Center },
//       new go.Binding("location", "loc", go.Point.parse).makeTwoWay(go.Point.stringify),
//       { selectable: true, selectionAdornmentTemplate: nodeSelectionAdornmentTemplate },
//       { resizable: true, resizeObjectName: "PANEL", resizeAdornmentTemplate: nodeResizeAdornmentTemplate },
//       { rotatable: true, rotateAdornmentTemplate: nodeRotateAdornmentTemplate },
//       new go.Binding("angle").makeTwoWay(),
//       // the main object is a Panel that surrounds a TextBlock with a Shape
//       $(go.Panel, "Auto",
//         { name: "PANEL" },
//         new go.Binding("desiredSize", "size", go.Size.parse).makeTwoWay(go.Size.stringify),
//         $(go.Shape, "Rectangle",  // default figure
//           {
//             portId: "", // the default port: if no spot on link data, use closest side
//             fromLinkable: true, toLinkable: true, cursor: "pointer",
//             fill: "white",  // default color
//             strokeWidth: 2
//           },
//           new go.Binding("figure"),
//           new go.Binding("fill")),
//         $(go.TextBlock,
//           {
//             font: "bold 11pt Helvetica, Arial, sans-serif",
//             margin: 8,
//             maxSize: new go.Size(160, NaN),
//             wrap: go.TextBlock.WrapFit,
//             editable: true
//           },
//           new go.Binding("text").makeTwoWay())
//       ),
//       // four small named ports, one on each side:
//       makePort("T", go.Spot.Top, false, true),
//       makePort("L", go.Spot.Left, true, true),
//       makePort("R", go.Spot.Right, true, true),
//       makePort("B", go.Spot.Bottom, true, false),
//       { // handle mouse enter/leave events to show/hide the ports
//         mouseEnter: function(e, node) { showSmallPorts(node, true); },
//         mouseLeave: function(e, node) { showSmallPorts(node, false); }
//       }
//     );

//   function showSmallPorts(node, show) {
//     node.ports.each(function(port) {
//       if (port.portId !== "") {  // don't change the default port, which is the big shape
//         port.fill = show ? "rgba(0,0,0,.3)" : null;
//       }
//     });
//   }

//   var linkSelectionAdornmentTemplate =
//     $(go.Adornment, "Link",
//       $(go.Shape,
//         // isPanelMain declares that this Shape shares the Link.geometry
//         { isPanelMain: true, fill: null, stroke: "deepskyblue", strokeWidth: 0 })  // use selection object's strokeWidth
//     );

//   myDiagram.linkTemplate =
//     $(go.Link,  // the whole link panel
//       { selectable: true, selectionAdornmentTemplate: linkSelectionAdornmentTemplate },
//       { relinkableFrom: true, relinkableTo: true, reshapable: true },
//       {
//         routing: go.Link.AvoidsNodes,
//         curve: go.Link.JumpOver,
//         corner: 5,
//         toShortLength: 4
//       },
//       new go.Binding("points").makeTwoWay(),
//       $(go.Shape,  // the link path shape
//         { isPanelMain: true, strokeWidth: 2 }),
//       $(go.Shape,  // the arrowhead
//         { toArrow: "Standard", stroke: null }),
//       $(go.Panel, "Auto",
//         new go.Binding("visible", "isSelected").ofObject(),
//         $(go.Shape, "RoundedRectangle",  // the link shape
//           { fill: "#F8F8F8", stroke: null }),
//         $(go.TextBlock,
//           {
//             textAlign: "center",
//             font: "10pt helvetica, arial, sans-serif",
//             stroke: "#919191",
//             margin: 2,
//             minSize: new go.Size(20, NaN),
//             editable: true
//           },
//           new go.Binding("text").makeTwoWay())
//       )
//     );

//   load();  // load an initial diagram from some JSON text

//   // initialize the Palette that is on the left side of the page
//   myPalette =
//     $(go.Palette, "myPaletteDiv",  // must name or refer to the DIV HTML element
//       {
//         maxSelectionCount: 1,
//         nodeTemplateMap: myDiagram.nodeTemplateMap,  // share the templates used by myDiagram
//         linkTemplate: // simplify the link template, just in this Palette
//           $(go.Link,
//             { // because the GridLayout.alignment is Location and the nodes have locationSpot == Spot.Center,
//               // to line up the Link in the same manner we have to pretend the Link has the same location spot
//               locationSpot: go.Spot.Center,
//               selectionAdornmentTemplate:
//                 $(go.Adornment, "Link",
//                   { locationSpot: go.Spot.Center },
//                   $(go.Shape,
//                     { isPanelMain: true, fill: null, stroke: "deepskyblue", strokeWidth: 0 }),
//                   $(go.Shape,  // the arrowhead
//                     { toArrow: "Standard", stroke: null })
//                 )
//             },
//             {
//               routing: go.Link.AvoidsNodes,
//               curve: go.Link.JumpOver,
//               corner: 5,
//               toShortLength: 4
//             },
//             new go.Binding("points"),
//             $(go.Shape,  // the link path shape
//               { isPanelMain: true, strokeWidth: 2 }),
//             $(go.Shape,  // the arrowhead
//               { toArrow: "Standard", stroke: null })
//           ),
//         model: new go.GraphLinksModel([  // specify the contents of the Palette
//           { text: "Male", figure: "Circle", fill: "#00AD5F" },
//           { text: "???", figure: "Diamond", fill: "lightskyblue" },
//           { text: "Female", figure: "Auto", fill: "#CE0620" }
//         ], [
//             // the Palette also has a disconnected Link, which the user can drag-and-drop
//             { points: new go.List(/*go.Point*/).addAll([new go.Point(0, 0), new go.Point(30, 0), new go.Point(30, 40), new go.Point(60, 40)]) }
//           ])
//       });
// }


// // Show the diagram's model in JSON format that the user may edit
// function save() {
//   saveDiagramProperties();  // do this first, before writing to JSON
//   document.getElementById("mySavedModel").value = myDiagram.model.toJson();
//   myDiagram.isModified = false;
// }
// function load() {
//   myDiagram.model = go.Model.fromJson(document.getElementById("mySavedModel").value);
//   loadDiagramProperties();  // do this after the Model.modelData has been brought into memory
// }

// function saveDiagramProperties() {
//   myDiagram.model.modelData.position = go.Point.stringify(myDiagram.position);
// }
// function loadDiagramProperties(e) {
//   // set Diagram.initialPosition, not Diagram.position, to handle initialization side-effects
//   var pos = myDiagram.model.modelData.position;
//   if (pos) myDiagram.initialPosition = go.Point.parse(pos);
// } -->
</script>





@extends('layouts.fother')
