// JavaScript Document
$(document).ready(function() {
                $("#MostrarLista").click(MostrarLista);
                $("#EsconderLista").click(EsconderLista);
                $("#MostrarLista1").click(MostrarLista1);
                $("#EsconderLista1").click(EsconderLista1);
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
            function MostrarLista1(){
                $("#EsconderLista1").show();
				$("#lista1").show();
				$("#MostrarLista1").hide();
            }
			function EsconderLista1(){
				$("#lista1").hide();
				$("#MostrarLista1").show();
				$("#EsconderLista1").hide();
            }
           