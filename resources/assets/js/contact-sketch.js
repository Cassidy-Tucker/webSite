var num = 1500;
var range = 40;

var ax = [];
var ay = [];

function setup() {
  var canvas = createCanvas(windowWidth, windowHeight);
canvas.parent('contact-sketch');
  for ( var i = 0; i < num; i++ ) {
    ax[i] = width / 4;
    ay[i] = height / 4;
  }
  frameRate(60);
}

function draw() {
  background(0);

  // Shift all elements 1 place to the left
  for ( var i = 1; i < num; i++ ) {
    ax[i - 1] = ax[i];
    ay[i - 1] = ay[i];
  }

  // Put a new value at the end of the array
  ax[num - 1] += random(-range, range);
  ay[num - 1] += random(-range, range);

  ax[num - 1] = constrain(ax[num - 1], 0, width);
  ay[num - 1] = constrain(ay[num - 1], 0, height);

  for ( var j = 1; j < num; j++ ) {
    var val = j / num * 204.0 + 51;
    stroke(245,243,22);
    line(ax[j - 1], ay[j - 1], ax[j], ay[j]);
  }
}

function windowResized() {
  resizeCanvas(windowWidth, windowHeight);
}
