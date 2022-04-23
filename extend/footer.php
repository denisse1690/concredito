</main>
<script >
   $('#exc').click(function(){
    setTimeout(function(){ 
        location.reload();
    }, 1000);
  });
</script>
   <script>
$(".button-collapse").sideNav();
  $('.tooltipped').tooltip({delay: 50});
$(document).ready(function() {
  
$('.carga').hide();
    $("#form").submit(function(){
        $(".carga").show();
    });




  $(".botonExcel").click(function(event) {
    $('.kill').remove();
    $("#datos_a_enviar").val( $("<div>").append( $(".excel").eq(0).clone()).html());
    $("#FormularioExportacion").submit();

});

    
});

function num() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
}
function mayusculas(obj, id){
obj = obj.toUpperCase();
document.getElementById(id).value = obj;
}

 </script>
<script>
    function buscar(){
  var filtro = $(".filter");
  var texto    = $(".buscar").val();
  texto        = texto.toLowerCase();
  filtro.show();
  for(var i=0; i< filtro.size(); i++){
    var contenido = filtro.eq(i).text();
    contenido     = contenido.toLowerCase();
    var index     = contenido.indexOf(texto);
    if(index == -1){
      filtro.eq(i).hide();
    }   
  }
}

</script>
  <script type="text/javascript">
function imprSelec(muestra)
{
$('.oc').hide();

  var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
</script>
	</body>
</html>
