//Validando Nombre Usuario
var usuario = $("#usuario");
usuario.change(function(e){
  e.preventDefault();
  if(usuario.val() == "" || usuario.val() == null || usuario.val().length<=3){
    usuario.css("border-color", "red");
  }else{
    usuario.css("border-color", "green");
  }
})
//Validando Password
var pass = $("#pass");
pass.change(function(e){
  e.preventDefault(e);
  if(pass.val() == "" || pass.val() == null || pass.val().length<8 || pass.val().match(/[a-z]/) || pass.val().match(/[A-Z]/) || pass.val().match(/\d/)){
    pass.css("border-color", "red");
  }else{
    pass.css("border-color", "green");
  }
})
//Validando Password1 coincida con Password
var pass1 = $("#pass1");
pass1.change(function(e){
  e.preventDefault(e);
  if(pass.val() != pass1.val()){
    pass.css("border-color", "red");
  }else{
    pass.css("border-color", "green");
  }
})
//Validando email
var email = $("#email");
email.change(function(e){
  e.preventDefault(e);
  var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
  if(regex.test(email.val().trim())){
    email.css("border-color", "green");
  }else{
    email.css("border-color", "red");
  }
})
//Form
var registrarUsuario = $("#registrarUsuario");
registrarUsuario.click(function(){
  $bandera=0;
  $siguiente=false;
  if(usuario.val() == "" || usuario.val() == null || usuario.val().length<=3){
    $bandera++;
  }
  if(pass.val() == "" || pass.val() == null || pass.val().length<8 || pass.val().match(/[a-z]/) || pass.val().match(/[A-Z]/) || pass.val().match(/\d/)){
    $bandera++;
  }
  var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
  if(!regex.test(email.val().trim())){
    $bandera++;
  }
  if($bandera==0){
    return true;
  }else{
    alert("Complete todos los campos con los datos necesarios");
    return false;
  }
})