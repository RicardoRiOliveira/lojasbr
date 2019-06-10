<h2>Listar todos os usuários</h2>

<table border="1">
        <tr>
            <th>NOME</th>
            <th>SOBRENOME</th>
            <th>EMAIL</th>
            <th>SENHA</th>
            <th>TELEFONE</th>
            <th>ENDERECO</th>
        </tr>
    
    <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?=$usuario['nome']?></td>
            <td><?=$usuario['sobrenome']?></td>
            <td><?=$usuario['email']?></td>
            <td><?=$usuario['senha']?></td>
            <td><?=$usuario['telefone']?></td>
            <td><?=$usuario['endereco']?></td> 
            <td><a href="./usuario/deletar/<?$usuario['id']?>">Deletar usuario</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="./usuario/adicionar" class="btn btn-primary">Adicionar novo usuario</a>

