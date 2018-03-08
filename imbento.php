<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    #c {
      border: 1px solid #ccc;
    }


  </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.4.8/fabric.min.js"></script>
</head>

<body>
  <div>
    <canvas id="c" width="500" height="500"></canvas>
  </div>



  <script>
    var canvas = new fabric.Canvas('c');
    var yellow = new fabric.Circle({
      top: 200,
      left: 0,
      radius: 100,
      strokeDashArray: [5, 5],
      stroke: 'black',
      strokeWidth: 5,
      fill: 'yellow'
    });
    canvas.add(yellow);

    var red = new fabric.Rect({
      top: 0,
      left: 0,
      width: 300,
      height: 300,
      strokeDashArray: [5, 5],
      stroke: 'black',
      strokeWidth: 5,
      fill: 'red',
      rx: 40
    });
    canvas.add(red);

    canvas.remove(yellow); //remove yellow

    var blue = new fabric.Circle({
      top: 150,
      left: 80,
      radius: 100,
      strokeDashArray: [5, 5],
      stroke: 'black',
      strokeWidth: 5,
      fill: 'blue',
      globalCompositeOperation: 'source-atop'
    });
    canvas.add(blue);

    yellow.set({
      globalCompositeOperation: 'destination-over'
    }); //set gCO for yellow
    canvas.add(yellow); //add yellow back

    var green = new fabric.Circle({
      top: 0,
      left: 0,
      radius: 100,
      strokeDashArray: [5, 5],
      stroke: 'black',
      strokeWidth: 5,
      fill: 'green'
    });
    canvas.add(green);

    console.log(canvas.toJSON(canvas))
  </script>

</body>

</html>
