<?php
if(!empty($link[1])){
    $id = $link[1];
    $sql = " DELETE FROM cliente WHERE id = $id ";
    $retorno = mysqli_query($conecta, $sql) OR DIE (mysqli_error($conecta));
    if($retorno){
        $msg = "GRAVADO COM SUCESSO!!!";
    }else{
        $msg = "ERRO!!!";
    }
    echo "<script>alert('$msg')</script>";
    echo "<meta http-equiv='refresh' content=0;url='/listar/'>";
}
?>