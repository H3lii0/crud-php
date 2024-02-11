<h1>Listar Usuários</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $result = $conn->query($sql);

    $quantidade = $result->num_rows;

    if($quantidade > 0){

        echo"<table class='table table-hover table-striped table-bordered'>";
        echo"<tr>";
        echo"<th>#</th>";
        echo"<th>Nome</th>";
        echo"<th>Email</th>";
        echo"<th>Data de Nascimento</th>";
        echo"<th>Ações</th>";
        echo"</tr>";
        while($row = $result->fetch_object()){
            echo "<tr>";
            echo "<td>".$row->id."</td>";
            echo "<td>".$row->nome."</td>";
            echo "<td>".$row->email."</td>";
            echo "<td>".$row->data_nasc."</td>";
            echo "
            <td>
            <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar
            </button>
            <button onclick=\"if(confirm('Tem certeza que deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"  class='btn btn-danger'>Excluir
            </button</td>";
            echo "</tr>";
        }
        echo"</table>";
    }else{

    }
?>