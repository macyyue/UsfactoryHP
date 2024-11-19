$(function(){
$('a img').hover(
function() {
$(this).stop().animate({"opacity":0.5});
},
function() {
$(this).stop().animate({"opacity":1});
}
);
$('a.op01 img').hover(
function() {
$(this).stop().animate({"opacity":1});
},
function() {
$(this).stop().animate({"opacity":0.5});
}
);
});