$(document).ready(function(){
 
// send form buton
$("#send").click(function() {
  $(".myform").submit();
}); 

// enter
$(".myform").keypress(function(e) {
  if(e.keyCode == 13) {
    $(".myform").submit();
   } 
});

// input focus & keypress
$(".required").focus(function(){
  $(this).removeClass('required');
  $(this).parent().find("span").remove();
});

// form submit kontrol
$(".myform").submit(function() {

  var required = 0;

  $(".required").each(function(index) {
    $(this).removeClass('required');
    $(this).parent().find("span").remove();  
     if($(this).val() == "") { 
      $(this).addClass('required');
      $(this).parent().append('<span style="color: #c90d00">* gerekli</span>');
      required++;
     }                 
  });
  
  if(required>0) {
    return false;
  }    
  
  return true;

});  

}); //doc ready end