 <?php 


       if ($_POST) {
        
       	$div='<div id="comentariointer">';
       	$nombre='<h3> nombre y apellido: '.$_POST['nombre'].'</h3>';
       	$email='<h4> email: '.$_POST['email'].'</h4>';
        $comentario='<p> comentario: '.$_POST['comentario'].'</p>';
          
        
      
              date_default_timezone_set("America/Argentina/Buenos_Aires");
              $fecha_a = '<h4> fecha de publicacion: '.date('d-m-Y  H:i', time()).'</h4>';
              $div2='</div>';
         $archivo=fopen('comentarios.txt', 'a+');
         fwrite($archivo,$div);
       fwrite($archivo, $nombre);
        //fwrite($archivo,$salto);
         fwrite($archivo, $estrellas);
        //fwrite($archivo,$salto);
        fwrite($archivo, $comentario);
        //fwrite($archivo,$salto);
        fwrite($archivo,$fecha_a);
          fwrite($archivo,$div2);
        
        
        
         fclose($archivo);
           
           echo("<h4 id='gratitud'>gracias por tu comentario!!!</h4>");
         
          }        


 
         
         
   

 ?> 