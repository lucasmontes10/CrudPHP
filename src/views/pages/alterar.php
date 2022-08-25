<?php $render('header'); ?>
<br/>
<a href="<?=$base;?>/">Voltar</a>
<br/> <br/>
<form method="POST" action="<?= $base?>/<?= $usuario['id']?>/change">
    <label>
        Nome:
        <input type="text" name="nome" value= "<?= $usuario['nome'];?>">
    </label>
    <br/> </br>
    <label>
        Email:
        <input type="text" name = 'email' value="<?= $usuario['email'];?> "/>
    </label>
    <br/> <br/>
    <input type = "submit" name = 'enviar' />    
</form>