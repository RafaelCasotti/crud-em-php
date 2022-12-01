<h2><center>Novo Usuário</center></h2>
<div class="vidro">
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" placeholder="Digite seu nome">
</div>
<div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail">
</div> 
<div class="mb-3">
        <label>CPF</label>
        <input type="cpf"  name="cpf" class="form-control" placeholder="Digite apenas números">
</div> 
<div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Senha">
</div> 

<div class="mb-3">
<button type="submit" class="btn btn-success">Enviar</button>
</div>
</form></div>