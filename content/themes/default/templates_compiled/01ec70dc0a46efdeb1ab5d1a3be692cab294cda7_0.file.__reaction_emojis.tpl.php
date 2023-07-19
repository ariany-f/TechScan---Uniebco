<?php
/* Smarty version 4.2.0, created on 2023-03-06 18:15:05
  from 'E:\httpdocs\www\uniebco\comunidade\content\themes\default\templates\__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64062da9359466_67695939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ec70dc0a46efdeb1ab5d1a3be692cab294cda7' => 
    array (
      0 => 'E:\\httpdocs\\www\\uniebco\\comunidade\\content\\themes\\default\\templates\\__reaction_emojis.tpl',
      1 => 1678120608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64062da9359466_67695939 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_reaction']->value == "like") {?>

  <!-- like -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/like.png" alt="Like" />
  </div>
  <!-- like -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "love") {?>

  <!-- love -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/love.png" alt="Love" />
  </div>
  <!-- love -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "haha") {?>

  <!-- haha -->
  <div class="emoji emoji--haha">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/haha.png" alt="Haha" />
  </div>
  <!-- haha -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "yay") {?>

  <!-- yay -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/yay.png" alt="Yay" />
  </div>
  <!-- yay -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "wow") {?>

  <!-- wow -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/wow.png" alt="Wow" />
  </div>
  <!-- wow -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "sad") {?>

  <!-- sad -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/sad.png" alt="Sad" />
  </div>
  <!-- sad -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "angry") {?>

  <!-- angry -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/angry.png" alt="Angry" />
  </div>
  <!-- angry -->

<?php }
}
}
