<?php
/* Smarty version 4.2.0, created on 2023-01-06 20:04:22
  from '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/__feeds_conversation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63b87ec63dac47_33836947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c18890e6c74313d6c35970e13493029743c5729' => 
    array (
      0 => '/home/u196197156/domains/thunderbold.com.br/public_html/comunidade/content/themes/default/templates/__feeds_conversation.tpl',
      1 => 1673035458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b87ec63dac47_33836947 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="feeds-item <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['seen']) {?>unread<?php }?>" data-last-message="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['last_message_id'];?>
">
  <?php if ($_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
    <a class="data-container js_chat-start" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
" data-name-list="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['link'];?>
" data-multiple="true" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
">
      <div class="data-avatar">
        <div class="left-avatar" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture_left'];?>
')"></div>
        <div class="right-avatar" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture_right'];?>
')"></div>
      </div>
      <div class="data-content">
        <?php if ($_smarty_tpl->tpl_vars['conversation']->value['image'] != '') {?>
          <div class="float-right">
            <img class="data-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['image'];?>
" alt="">
          </div>
        <?php }?>
        <div><span class="name"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span></div>
        <div class="text">
          <?php if ($_smarty_tpl->tpl_vars['conversation']->value['message'] != '') {?>
            <?php echo $_smarty_tpl->tpl_vars['conversation']->value['message_orginal'];?>

          <?php } elseif ($_smarty_tpl->tpl_vars['conversation']->value['photo'] != '') {?>
            <i class="fa fa-file-image"></i> <?php echo __("Photo");?>

          <?php } elseif ($_smarty_tpl->tpl_vars['conversation']->value['voice_note'] != '') {?>
            <i class="fas fa-microphone"></i> <?php echo __("Voice Message");?>

          <?php }?>
        </div>
        <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
</div>
      </div>
    </a>
  <?php } else { ?>
    <a class="data-container js_chat-start" data-cid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
" data-name-list="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['link'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
">
      <div class="data-avatar">
        <img src="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
">
      </div>
      <div class="data-content">
        <?php if ($_smarty_tpl->tpl_vars['conversation']->value['image'] != '') {?>
          <div class="float-right">
            <img class="data-img" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['conversation']->value['image'];?>
" alt="">
          </div>
        <?php }?>
        <div><span class="name"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span></div>
        <div class="text">
          <?php if ($_smarty_tpl->tpl_vars['conversation']->value['message'] != '') {?>
            <?php echo $_smarty_tpl->tpl_vars['conversation']->value['message_orginal'];?>

          <?php } elseif ($_smarty_tpl->tpl_vars['conversation']->value['photo'] != '') {?>
            <i class="fa fa-file-image"></i> <?php echo __("Photo");?>

          <?php } elseif ($_smarty_tpl->tpl_vars['conversation']->value['voice_note'] != '') {?>
            <i class="fas fa-microphone"></i> <?php echo __("Voice Message");?>

          <?php }?>
        </div>
        <div class="time js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['time'];?>
</div>
      </div>
    </a>
  <?php }?>
</li><?php }
}
