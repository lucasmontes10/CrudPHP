<?php  $render('header'); ?>

<h2>Adicionar um novo usuario</h2>

<form method="POST" action="<?=$base;?>/create">
    <label>
        Nome:
        <input type="text" name="nome">
    </label> <br/> <br/>
    <label>
        email:
        <input type="email" name = 'email'>
    <br/> <br/>
    <input type="submit" value="enviar">
    <br/><br/>
    <a href="<?=$base;?>/">Voltar</a>
</form>