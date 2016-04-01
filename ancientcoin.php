<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body style="background-color:#FFFF80;">
<h4>Implement the class AncientCoin</h4>
<p>click on button to display message</p>
<button type="button" onclick="main()">Click here</button>
<p id="demo"></p>
<p id="demoa"></p>
<p id="demob"></p>
<p id="democ"></p>
<p id="demod"></p>
<p id="demoe"></p>
<script>
function Square(side1){
//helping function
var square=function(){
return i*i;
}
var side=side1;
this.getSize=function(){
return (size);
}
this.setSize=function(s){
size=s;
}
this.isLarge = function() {
return this.side1 > 10;
}
this. enLarge=function(){
return side1+ds;
}
this.area=function(){
return side*side;
}
this.perimeter=function(){
return 4*side1;
}
}
function Circle(radius1){
var pi= function() {
return 3.1416;
}
var radius = radius1;
this.getRadius = function(){
return (radius);
}
this.setRadius = function(radius2){
radius = radius2;
}
this.isLarge = function() {
return this.radius1 > 10;
}
this.enLarge=function(){
return radius1+dr;
}
this.area = function(){
return (radius * radius * pi());
}
this.circumference = function(){
var diameter = this.radius * 2;
var circumference = diameter * this.pi();
return circumference;
}
}
function Coin(squareObj1,circleObj1){
var getCircleArea=function(){
return circleObj1.area();
}
var getSquareArea=function(){
return squareObj1.area();
}
var squar=squareObj1;
var circle=circleObj1;
this.areaCn=function (){
return (getCircleArea()-getSquareArea());
}
this.getCircleObj=function(){
return (circleObj);
}
this.getSquareObj=function(){
return (squareObj);
}
this.setCircleObj=function(circleObj1){
circleObj=circleObj1;
}
this.setSquareObj=function(squareObj1){
squareObj=squareObj1;
}
this.isNormal=function(){
return getCircleArea()>getSquareArea();
}
}
function AncientCoin(age1,squareObj1,circleObj1){
var cobj = circleObj1;
var sobj = squareObj1;
var cn = new Coin(sobj,cobj);
var trace= function(str){
alert(str);
}
var age=age1;
Coin.call(this,circleObj1,squareObj1);
this.ancArea=function(){
return cn.areaCn();
}
this.melt=function(age){
age=0;
}
this.getAge = function(){
return (age);
}
this.setRadius = function(age1){
age = age1;
}
this.isOld=function(){
return (age>1000);
}
}
function main(){
sq=new Square(2);
cr=new Circle(2);
coinObj=new Coin(sq,cr);
anciCoinObj=new AncientCoin(2000,sq,cr);
document.getElementById("demo").innerHTML=("area is:"+anciCoinObj.ancArea());
if(coinObj.isNormal())
document.getElementById("demoa").innerHTML=("coin is normal");
else
document.getElementById("demob").innerHTML=("coin is not normal");
if(anciCoinObj.isOld())
document.getElementById("democ").innerHTML=("coin is old");
else
document.getElementById("demod").innerHTML=("coin is not old");
}
</script>
</body>
</html>