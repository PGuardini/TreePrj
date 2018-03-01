$(document).ready(function(){
  $('.ui.checkbox').checkbox();
  $('.ui.dropdown').dropdown();
  $(".open").click(function(){
    $('.ui.basic.modal').modal('show');
  });
})