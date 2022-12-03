<?php
session_start();

if (isset($_SESSION['nao autenticado'])):
?>

<div class="alert alert-danger">
    <p>ERRO: Usuário ou senha inválidos</p>
</div>

<?php
endif;
unset($_SESSION['nao autenticado'])
?>

<h1>Logar</h1>
<form action="?page=logar" method="POST">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
<form action="?page=novo" method="POST">
<h3>Não possui uma conta?</h3>    
<button type="submit" class="btn btn-primary">Registrar</button>
</form>
