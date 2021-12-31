var svgNS = "http://www.w3.org/2000/svg";

function drawTriangles() {
  var svg = document.getElementById("mySvg");
  var colors = [
    ["#000", "#0044FF", "#0088FF", "#00CCFF"],
    ["#4400FF", "#4444FF", "#4488FF", "#44CCFF"],
    ["#8800FF", "#8844FF", "#8888FF", "#88CCFF"],
    ["#CC00FF", "#000", "#CC88FF", "#CCCCFF"],
  ];
  var n = colors.length;
  var m = colors[0].length;
  var dx = 100;
  var dy = 75;
  for (var i = 0; i < n; i++) {
    for (var j = 0; j < m; j++) {
      var polygon = document.createElementNS(svgNS, "polygon");
      var point0 = svg.createSVGPoint();
      var point1 = svg.createSVGPoint();
      var point2 = svg.createSVGPoint();
      if ((i + j) % 2 === 0) {
        point0.x = j * dx;
        point0.y = i * dy;
        point1.x = (j + 1) * dx;
        point1.y = (i + 1) * dy;
        point2.x = (j + 1) * dx;
        point2.y = (i - 1) * dy;
      } else {
        point0.x = (j + 1) * dx;
        point0.y = i * dy;
        point1.x = j * dx;
        point1.y = (i - 1) * dy;
        point2.x = j * dx;
        point2.y = (i + 1) * dy;
      }
      polygon.setAttribute("fill", colors[i][j]);
      polygon.points.appendItem(point0);
      polygon.points.appendItem(point1);
      polygon.points.appendItem(point2);
      svg.appendChild(polygon);
    }
  }
}
drawTriangles();


// Select the canvas and make it fullscreen
var canvas = document.querySelector("canvas");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

var c = canvas.getContext("2d")
console.log(canvas)