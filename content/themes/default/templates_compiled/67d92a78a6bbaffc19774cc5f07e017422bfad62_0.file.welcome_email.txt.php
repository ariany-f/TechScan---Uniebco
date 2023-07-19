<?php
/* Smarty version 4.2.0, created on 2023-03-27 16:40:57
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\emails\welcome_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6421c719eb0640_42569502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67d92a78a6bbaffc19774cc5f07e017422bfad62' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\emails\\welcome_email.txt',
      1 => 1679935254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6421c719eb0640_42569502 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
 <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
,

<?php echo __("Welcome to");?>
 <?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
!

Para acessar a ferramenta, clique no link a seguir:
https://uniebco.com.br

Seus dados de login inicial são:
Login: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

Senha: mudar@123

Não se esqueça de alterar a senha no primeiro acesso.

<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
