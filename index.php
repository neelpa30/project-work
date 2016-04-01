<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body style="background-color:#FFFF80;">
<h4>Java into Javascript</h4>
<p>Click on  button to display message</p>
<button type="button" onclick="main()">Click here</button>
<p id="demo"></p>
<p id="demoa"></p>
<p id="demob"></p>
<p id="democ"></p>
<p id="demod"></p>
<p id="demoe"></p>
<script>
function Cuboid(w,h,l)
{
//constructor
var width=w;
var height=h;
var length=l;
//access function
this.getW = function(){
return (width);
}
this.setW = function(w){
width = w;
}
this.getH = function(){
return (height);
}
this.setH = function(h){
height = h;
}
this.getL = function(){
return (length);
}
this.setL = function(l){
length = l;
}
this.isCube=function(){
return w == h && h == l;
}
//implementor function
this.area = function(){
return 2 * (width * height + height * length + width * length) ;
}
this.volume = function(){
var volume = (width * height * length);
return volume;
}
}
function main(){
box=new Cuboid(8, 4, 5);
dice=new Cuboid(4,4,4);
alert("area for w=6,h=2,l=3 is:"+box.area());
alert("volume for w=6,h=2,l=3 is:"+box.volume());
alert("area for w=2,h=2,l=2 is:"+dice.area());
alert("volume for w=2,h=2,l=2 is:"+dice.volume());
document.getElementById("demob").innerHTML=("height is:"+box.getH());
document.getElementById("democ").innerHTML=("width is:"+box.getW());
document.getElementById("demod").innerHTML=("length is:"+box.getL());
if (dice.isCube())
// document.getElementById("demo").innerHTML = dice.volume();
document.getElementById("demo").innerHTML = "dice is also a  cube";
else
// document.getElementById("demo").innerHTML = dice.area();
document.getElementById("demo").innerHTML = "dice is not a cube";
if (eraser.isCube())
// document.getElementById("demo").innerHTML = dice.volume();
document.getElementById("demoa").innerHTML = "box is also a cube";
else
// document.getElementById("demo").innerHTML = dice.area();
document.getElementById("demoa").innerHTML = "box is not a cube";
}
</script>
</body>
</html>