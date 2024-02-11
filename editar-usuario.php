<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $result = $conn->query($sql);
    $row = $result->fetch_object();
?>
<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" value="<?php print $row->email;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">senha</label>
        <input type="password" name="senha" value="<?php print $row->senha;?>"  class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc;?>"  class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>