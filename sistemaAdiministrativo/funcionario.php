<?php
include 'conexao.php';
include 'valida.php';

$destino = "./funcionario/inserir.php";

if (!empty($_GET['alteracao'])) {
    $id = $_GET['alteracao'];
    $sql = "SELECT * FROM funcionario WHERE id='$id'";
    $dados = mysqli_query($conexao, $sql);
    $funcionarios = mysqli_fetch_assoc($dados);

    $destino = "./funcionario/alterar.php";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="recursos/estilo.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://img.icons8.com/?size=50&id=60956&format=png" type="image/x-icon">

</head>

<body>

<?php include('nav.php'); ?>
<div class="container-fluid">

    <div class="row">
        <div class="col-md-3 menu">
            <?php include('menu.php'); ?>
        </div>

        <div class="col-md-9">
            <div class="row">
                <div class="col-md cartao">
                    <h3>Bem vindo ao inferno 😈👺 <?php echo $_SESSION['usuario'] ?></h3>
                   
                    <h1>Cadastro</h1>
                    <form action="<?= $destino; ?>" method="POST">
                        <div class="form-group">
                            <label>ID</label>
                            <input name="id" type="text" value="<?php echo isset($funcionarios) ? $funcionarios['id'] : '' ?>"
                                   class="form-control" placeholder="ID">
                        </div>
                        <div class="form-group">
                            <label>Codigo</label>
                            <input name="codigo" type="text"
                                   value="<?php echo isset($funcionarios) ? $funcionarios['codigo'] : '' ?>" class="form-control"
                                   placeholder="Seu codigo">
                        </div>
                        <div class="form-group">
                            <label>Nome</label>
                            <input name="nome" type="text"
                                   value="<?php echo isset($funcionarios) ? $funcionarios['nome'] : '' ?>" class="form-control"
                                   placeholder="Seu nome">
                        </div>
                        <div class="form-group">
                            <label>Salario</label>
                            <input name="salario" type="text"
                                   value="<?php echo isset($funcionarios) ? $funcionarios['salario'] : '' ?>" class="form-control"
                                   placeholder="Salario">
                        </div>
                        <div class="form-group">
                            <label>Data de Nascimento</label>
                            <input name="data_nascimento" type="text"
                                   value="<?php echo isset($funcionarios) ? $funcionarios['data_nascimento'] : '' ?>"
                                   class="form-control" placeholder="Data de Nascimento">
                        </div>
                        <div class="form-group">
                            <label>CPF</label>
                            <input name="cpf" type="text"
                                   value="<?php echo isset($funcionarios) ? $funcionarios['cpf'] : '' ?>" class="form-control"
                                   placeholder="Seu CPF">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input name="senha" type="text"
                                   value="<?php echo isset($funcionarios) ? $funcionarios['senha'] : '' ?>" class="form-control"
                                   placeholder="Sua senha">
                        </div>
                        <div class="form-group">
                            <label>Profissão</label>
                            <select name="funcao" class="form-control">
                                <option value="">Selecione</option>
                                <?php
                                $sql = "SELECT * FROM funcao";
                                $dados = mysqli_query($conexao, $sql);

                                while ($linha = mysqli_fetch_assoc($dados)) {
                                    echo "<option value='" . $linha['id'] . "'>" . $linha['descricao'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-md cartao">
                    <h1>Listagem</h1>
                    <table class="table" id="tabela">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Alterar</th>
                            <th scope="col">Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM funcionario";
                        $resultado = mysqli_query($conexao, $sql);
                        while ($coluna = mysqli_fetch_assoc($resultado)) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $coluna['id']; ?></th>
                                <td><?php echo $coluna['nome']; ?></td>
                                <td><?php echo $coluna['cpf']; ?></td>
                                <td> <a href="funcionario.php?alteracao=<?= $coluna['id'] ?>">Editar</a> </td>
                                <td> <a href="<?php echo "./funcionario/excluir.php?id=" . $coluna['id']; ?>">Excluir</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
