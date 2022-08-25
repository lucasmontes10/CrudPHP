<?php $render('header'); ?>
<a href="<?=$base;?>/create">Criar um novo usuario</a>
<br/>
<br/><br/>
<table border="1" width = "100%"> 
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Email</td>
        <td>Ações</td>
    </tr>
    <?php foreach($usuariosVar as $usuario): ?>
        <tr>
            <td><?= $usuario['id']?></td>
            <td><?= $usuario['nome']?></td>
            <td><?= $usuario['email']?></td>
            <td> <a href="<?=$usuario['id']?>/remove">[Excluir]</a> <a href="<?=$usuario['id']?>/change">[Alterar]</a> </td>
        </tr>
    <?php endforeach; ?>
</table>