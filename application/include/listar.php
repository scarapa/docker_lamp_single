<h1>LISTAR</h1>

<table id="tabelaGrid">
    <tr>
        <th>#</th>
        <th>NOME</th>
        <th>DATA</th>
        <th>EDITAR</th>
        <th>DELETAR</th>
    </tr>

<?php

$query = " SELECT * FROM cliente ORDER BY id ";
$resultado = mysqli_query($conecta, $query) OR DIE (mysqli_error($conecta));
while ($linha = mysqli_fetch_assoc($resultado)){
?>
    <tr>
        <td><?php echo $linha['id'];?></td>
        <td><?php echo $linha['ds_nome'];?></td>
        <td><?php echo $linha['dt_create'];?></td>
        <td><a href="/inserir/<?php echo $linha['id'];?>/">EDITAR</a></td>
        <td><a href="/deletar/<?php echo $linha['id'];?>/">DEL</a></td>
    </tr>    
<?php
}
?>


</table>