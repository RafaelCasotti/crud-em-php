<h2><center>Editar Usuário</center></h2>
<?php
    $sql = "SELECT * FROM tb_cadastro WHERE id =" .$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
</div>
<div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
</div>  
<div class="mb-3">
        <label>CPF</label>
        <input type="cpf" name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
</div>
<div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
</div> 

<div class="mb-3">
        <button type="submit" class="btn btn-success">Enviar</button>
</div>
</form>