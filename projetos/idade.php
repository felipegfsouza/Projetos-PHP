<?php 
    include ("pag08.php");
        if($_POST){
            $atual=$_POST['anoat'];
            $nasc=$_POST['anonasc'];
            $ida=$atual-$nasc;
            if($ida>=18){
                echo "<b> Você é maior: $ida </b>";
            }else{
                echo "<b> Você é menor: $ida </b>";
            }
    }
 ?>