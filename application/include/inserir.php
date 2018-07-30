<?php
if( ($_POST) && (!empty($_POST['nome'])) ){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    if(empty($id)){
        $sql = " INSERT INTO cliente (ds_nome) VALUES ('$nome'); ";
    }else{
        $sql = " UPDATE cliente SET ds_nome = '$nome' WHERE id = $id;  ";
    }
    $retorno = mysqli_query($conecta, $sql) OR DIE (mysqli_error($conecta));
    if($retorno){
        $msg = "GRAVADO COM SUCESSO!!!";
    }else{
        $msg = "ERRO!!!";
    }
    echo "<script>alert('$msg')</script>";
    echo "<meta http-equiv='refresh' content=0;url='/listar/'>";
}

if(!empty($link[1])){
    $id = $link[1];
    $sql = " SELECT * FROM cliente WHERE id = $id ";
    $resultado = mysqli_query($conecta, $sql) OR DIE (mysqli_error($conecta));
    $linha = mysqli_fetch_assoc($resultado);
}
?>

<h1>INSERIR</h1>
<form method="post">
    <input type="hidden" name="id" autocomplete="off" value="<?php echo isset($linha)? $linha['id']: "" ;?>" size=2>
    <table>
        <tr>
            <th>Nome</th>
            <td><input type="text" name="nome" autocomplete="off" value="<?php echo isset($linha)? $linha['ds_nome']: "" ;?>"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center"><input type="submit" value="GRAVAR"></td>
        </tr>
    </table>
</form>