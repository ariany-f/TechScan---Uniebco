<?php
/* Smarty version 4.2.0, created on 2023-01-06 20:04:22
  from '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/__reaction_emojis.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63b87ec63f6963_03807216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a3d7e36655067d4b1b245981de35eeb438bb64' => 
    array (
      0 => '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/__reaction_emojis.tpl',
      1 => 1673035459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b87ec63f6963_03807216 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_reaction']->value == "like") {?>

  <!-- like -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/like.png" alt="Like" />
  </div>
  <!-- like -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "love") {?>

  <!-- love -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/love.png" alt="Love" />
  </div>
  <!-- love -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "haha") {?>

  <!-- haha -->
  <div class="emoji emoji--haha">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/haha.png" alt="Haha" />
  </div>
  <!-- haha -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "yay") {?>

  <!-- yay -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/yay.png" alt="Yay" />
  </div>
  <!-- yay -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "wow") {?>

  <!-- wow -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/wow.png" alt="Wow" />
  </div>
  <!-- wow -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "sad") {?>

  <!-- sad -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/sad.png" alt="Sad" />
  </div>
  <!-- sad -->

<?php } elseif ($_smarty_tpl->tpl_vars['_reaction']->value == "angry") {?>

  <!-- angry -->
  <div class="emoji">
    <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/reactions/angry.png" alt="Angry" />
  </div>
  <!-- angry -->

<?php }
}
}
