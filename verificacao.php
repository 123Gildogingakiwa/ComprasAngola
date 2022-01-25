 <?php
include 'conect.php';

   
 

          if (isset($_POST['criar'])) {

          $post_image = $_FILES['foto']['name'];

         $post_image_temp = $_FILES['foto']['tmp_name'];

         $foto=$post_image;
        move_uploaded_file($post_image_temp, "fotoquilhentes/$post_image");
        


      $nome1= $_POST['nome1'];                
      $nome2= $_POST['nome2'];
      $email_tell= $_POST['email_tell'];
      $passe= $_POST['passe'];
      $funcao='Quilhente';
      $previlegio=2;
     

      $ran_id = rand(time(), 100000000);
 
      
    $q="INSERT INTO `users`(`codigoderegisto`, `nome1`, `nome2`, `foto`, `email_tell`, `passe`,`funcao`, `previlegio`,`data`) VALUES ('{$ran_id}','$nome1','$nome2','$foto','$email_tell','$passe','$funcao','$previlegio',now())"; 


    $query = mysqli_query($con,$q);

    if (!$query)

     {
            die("Erro de insersão" . mysqli_error($con));
            }

            else
            {
              $aviso='<br> Cadastrado com sucesso! <br> :)';    
            }

         header("location:index.php");


}


else
            {
              $aviso=' <br> Ups: Acesso Negado! <br>  :(';    
            }

  
  

  
?>



<h1 ><?= $aviso ?></h1> 