<h1>Novo Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Altura</label>
        <input type="text" name="altura" class="form-control" placeholder="Exemplo 1.75" required>
    </div>
    <div class="mb-3">
        <label>Peso</label>
        <input type="text" name="peso" class="form-control" placeholder="Exemplo 63.3" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>