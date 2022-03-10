<?php
class loja
{
    public string $nome;
    public string $email;
    public string $senha;
    public int $id;

    public function bancoDeDados($query)
    {

        $obj = new SQLite3('C:\Henrique\Programação\Php\Trabalhos\Projeto\banco/conecta');
        $obj->query("$query");
    }

    public function cadastrarUsuário($nome, $email, $senha):
    int
    {

        $query = "INSERT INTO loja (nome, senha, email) VALUES ('$nome', '$senha', '$email');";
        $executa = new loja();
        $executa->bancoDeDados($query);
        return 1;

    }

    public function editarUsuário($nome, $email, $senha, $id)
    {

        $query = "UPDATE loja SET nome  = '$nome', senha = '$senha', email = '$senha' WHERE id = $id;";
        $executa = new loja();
        $executa->bancoDeDados($query);
        $_SESSION['usuarioId'] = $id;
        $_SESSION['usuarioEmail'] = $email;
        $_SESSION['usuarioSenha'] = $senha;
        $_SESSION['usuarioNome'] = $nome;
        header("Location: ../acesso/index.php");

    }

    public function deletarConta($id):
    int
    {

        $query = "DELETE FROM loja WHERE id = $id;";
        $executa = new loja();
        $executa->bancoDeDados($query);
        return 1;
    }

    public function exibirNome($id)
    {

        $obj = new SQLite3('C:\Henrique\Programação\Php\Trabalhos\Projeto\banco/conecta');
        $statement = $obj->prepare('SELECT * FROM loja WHERE id = :id;');
        $statement->bindValue(':id', $id);
        $result = $statement->execute();
        while ($row = $result->fetchArray())
        {
            return $row['nome'];

        }
    }

    public function exibirEmail($id)
    {

        $obj = new SQLite3('C:\Henrique\Programação\Php\Trabalhos\Projeto\banco/conecta');
        $statement = $obj->prepare('SELECT * FROM loja WHERE id = :id;');
        $statement->bindValue(':id', $id);
        $result = $statement->execute();
        while ($row = $result->fetchArray())
        {
            return $row['email'];

        }
    }

    public function exibirSenha($id)
    {

        $obj = new SQLite3('C:\Henrique\Programação\Php\Trabalhos\Projeto\banco/conecta');
        $statement = $obj->prepare('SELECT * FROM loja WHERE id = :id;');
        $statement->bindValue(':id', $id);
        $result = $statement->execute();
        while ($row = $result->fetchArray())
        {
            return $row['senha'];

        }
    }

    public function exibirId($email)
    {

        $obj = new SQLite3('C:\Henrique\Programação\Php\Trabalhos\Projeto\banco/conecta');
        $statement = $obj->prepare('SELECT * FROM loja WHERE email = :email;');
        $statement->bindValue(':email', $email);
        $result = $statement->execute();
        while ($row = $result->fetchArray())
        {
            return $row['id'];

        }
    }

    public function validaLogin($email, $senha)
    {

        $obj = new SQLite3('C:\Henrique\Programação\Php\Trabalhos\Projeto\banco/conecta');
        $statement = $obj->prepare('SELECT * FROM loja WHERE email = :email and senha = :senha LIMIT 1');
        $statement->bindValue(':email', $email);
        $statement->bindValue(':senha', $senha);
        $result = $statement->execute();
        while ($row = $result->fetchArray())
        {
            $email = $row['email'];
            return 1;

        }
    }

    public function completaLogin($id)
    {
        $loja = new loja();
        $email = $loja->exibirEmail($id);
        $senha = $loja->exibirSenha($id);
        $nome = $loja->exibirNome($id);
        $_SESSION['usuarioId'] = $id;
        $_SESSION['usuarioEmail'] = $email;
        $_SESSION['usuarioSenha'] = $senha;
        $_SESSION['usuarioNome'] = $nome;
        header("Location: ../acesso/index.php");
        return 1;
    }

}

$class = new loja();

