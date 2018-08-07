openForm("Login");
             
function openForm(formName) {
    
    var x = document.getElementsByClassName("form");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(formName).style.display = "block";  
}


</script>
@if (Session::has('message'))
    <script>  $('#auth').click(); </script>
    @endif @if($errors->login->any())
    <script>  $('#auth').click();</script>
    @endif @if($errors->register->any())
    <script>  $('#auth').click(); openForm('Register');</script>
    @endif