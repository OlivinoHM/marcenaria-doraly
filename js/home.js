/*// JavaScript Document
$('.item').addClass('descricao');

$('.item a').click(function() {
	$('.item').removeClass('descricao');
});*/

$(document).ready(function() {
                $("#MostrarLista").click(MostrarLista);
                $("#EsconderLista").click(EsconderLista);
                });
 
            function MostrarLista(){
                $("#EsconderLista").show();
				$("#lista").show();
				$("#MostrarLista").hide();
            }
			
			
			function EsconderLista(){
				$("#lista").hide();
				$("#MostrarLista").show();
				$("#EsconderLista").hide();
				
            }
           
			
           