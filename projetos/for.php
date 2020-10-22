<?php 
    include("pag13.php");
        if($_POST){
            $v1=$_POST['txtv1'];
            $v1=$_POST['txtv2'];

            if(isset($_POST['btni'])){

                for($i=$v1;$i<=$v2;$i++){
                    echo("<b><center>$i<br></center></b>");
                }
            }else if(isset($_POST['btnd'])){

                for($i=$v1;$i<=$v2;$i++){
                    if($i%2==0){
                    echo("<b><center>$i<br></center></b>");
                    
                    }
                }
            }else if(isset($_POST['btnp'])){
                for($i=$v1;$i<=$v2;$i++){
                    echo("<b><center>$i<br></center></b>");
                    if($i==5){
                        break;
                    }
                }
            }
        }

?>