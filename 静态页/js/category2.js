$(function(){
$(".add").click(function(){
var t=$(this).parent().find('input[class*=result]');
t.val(parseInt(t.val())+1)
setTotal();
})
$(".minus").click(function(){
var t=$(this).parent().find('input[class*=result]');
t.val(parseInt(t.val())-1)
if(parseInt(t.val())<0){
t.val(0);
}
setTotal();
})
function setTotal(){
var s=0;
$("li .lt-rt").each(function(){
s+=parseInt($(this).find('input[class*=result]').val())*parseFloat($(this).find('span[class*=price]').text());
});
$("#total").html(s.toFixed(2));
}
setTotal();
 
});