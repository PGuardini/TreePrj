$(document).ready(function(){
  $('.ui.checkbox').checkbox();
  $('.ui.dropdown').dropdown();
  $('.ui.accordion').accordion();
  $(".open").click(function(){
    $('.ui.basic.modal').modal('show');
  });
})