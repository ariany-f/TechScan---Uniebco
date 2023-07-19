<?php
/* Smarty version 4.2.0, created on 2023-03-27 18:02:44
  from 'E:\httpdocs\www\comunidade\content\themes\default\templates\started.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6421da444180c6_50215888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e71b5e1f0305a8dff458aaed999fb3e3737f140d' => 
    array (
      0 => 'E:\\httpdocs\\www\\comunidade\\content\\themes\\default\\templates\\started.tpl',
      1 => 1678128976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_user.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_6421da444180c6_50215888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/comunidade/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_product_teardown_elol.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Getting Started");?>
</h2>
    <p class="text-xlg"><?php echo __("This information will let us know more about you");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container" style="margin-top: -25px;">
  <div class="row">
    <div class="col-12 col-md-10 mx-md-auto">
      <div class="card shadow">
        <div class="card-body">

          <!-- nav -->
          <ul class="nav nav-pills nav-fill nav-started mb30 js_wizard-steps">
            <li class="nav-item">
              <a class="nav-link active" href="#step-1">
                <h4 class="mb5"><?php echo __("Step 1");?>
</h4>
                <p class="mb0"><?php echo __("Accept Our Tems");?>
</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#step-2">
                <h4 class="mb5"><?php echo __("Step 2");?>
</h4>
                <p class="mb0"><?php echo __("Upload your photo");?>
</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#step-3">
                <h4 class="mb5"><?php echo __("Step 3");?>
</h4>
                <p class="mb0"><?php echo __("Update your info");?>
</p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#step-4">
                <h4 class="mb5"><?php echo __("Step 4");?>
</h4>
                <p class="mb0"><?php echo __("Add Friends");?>
</p>
              </a>
            </li>
          </ul>
          <!-- nav -->

          <!-- tabs -->
          <div class="js_wizard-content" id="step-1">
            <div class="text-center">
              <h3 class="mb5"><?php echo __("Welcome");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</span></h3>
              <p class="mb20"><?php echo __("POLÍTICA CORPORATIVA SOBRE O USO ACEITÁVEL DA REDE");?>
</p>
            </div>

         
            <form class="js_ajax-forms" data-url="users/started.php?do=accept_policy">
              <div class="heading-small mb20">
                   <p>Esta política descreve o uso aceitável da rede Uniebco Comunidade e informações contidas na plataforma.

              POLÍTICA:
              Sejam bem vindos à nossa Rede Social Corporativa – Uniebco Comunidade.
              Considerando nosso modelo de negócios, nós estamos situados em diversas regiões do território nacional. 

              Assim, pensando em promover uma maior interação entre nossos Colaboradores, disponibilizamos a Rede Social Corporativa, assim, você poderá, caso queira, aproximar-se e conhecer todos os outros Colaboradores da EBCO/TechScan. 

              IMPORTANTE: o objetivo da rede social corporativa é promover a comunicação e interação entre nossos Colaboradores. Portanto, todo o conteúdo postado deve ser relacionado tão somente aos assuntos de nossa Empresa, e ainda SÃO DE TOTAL RESPONSABILIDADE DE SEUS RESPECTIVOS AUTORES!

              Na relação empregatícia (vínculo de trabalho) existente entre VOCÊ e a EBCO/TechScan há direitos e deveres a serem cumpridos por ambos os lados. Assim, RESSALTAM-SE os seguintes DEVERES do Colaborador:
              •	AGIR COM PROBIDADE;
              •	TER UM BOM COMPORTAMENTO E CONDUTA MORAL NO AMBIENTE DE TRABALHO.
              Portanto CASO VOCÊ ESTEJA INSATISFEITO com algo relacionado ao trabalho, UTILIZE OS MEIOS APROPRIADOS PARA FORMALIZAÇÃO!  

              A nossa rede social tem caráter COLABORATIVO, de modo que não autorizamos a publicação de conteúdos de caráter lesivo à imagem da empresa e/ou à qualquer de nossos Colaboradores, parceiros de negócio, fornecedores ou qualquer outra pessoa com quem nos relacionamos!

              Suas atividades nesta rede são regulamentadas pelos seguintes requisitos:
              - O que é postado no Uniebco Comunidade fica no Uniebco Comunidade! (Não há postagens públicas ou tweets, etc).
              - Não poste informações confidenciais no feed principal.
              - Respeite nossas Políticas;
              - Respeite a privacidade, a proteção de dados e a segurança da informação;
              - Seja respeitoso com os outros membros. É aceitável discordar, mas faça isso com respeito.
              - Cada postagem deve agregar valor. Lembre-se: Nosso objetivo é fornecer um ambiente de colaboração para a conexão entre os colegas e ligar os vários departamentos e locais geográficos de forma HARMÔNICA.
              - Você é responsável pelo material que posta no Uniebco Comunidade.
              - É importante respaldar suas ideias, mas as mensagens devem ser breves e diretas.
              - NÃO SE ESQUEÇA DE SEUS DIREITOS E DEVERES!

              Para relatar uma postagem imprópria ou violações desta política relate diretamente ao Departamento de Desenvolvimento Humano e Organizacional (DHO).

              Estamos à sua disposição!
              É um enorme prazer ter você em nossa equipe!
              </p>

              </div>
              <div class="pl-md-4">
                <div class="form-group custom-control custom-checkbox mb10">
                  <input type="checkbox" class="custom-control-input required" name="accept_policy" id="accept_policy" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_policy_verified']) {?>checked<?php }?>>
                  <label class="custom-control-label" for="accept_policy"><?php echo __("Accept Our Policy");?>
</label>
                </div>
              </div>

              <!-- success -->
              <div class="alert alert-success x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger x-hidden"></div>
              <!-- error -->

              <!-- buttons -->
              <div class="clearfix mt20">
                <div class="float-right">
                  <button type="submit" class="btn btn-success"><i class="fas fa-check-circle mr5"></i><?php echo __("Save Changes");?>
</button>
                  <button type="button" class="btn btn-primary" id="activate-step-2"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
                </div>
              </div>
              <!-- buttons -->
            </form>
          </div>

          <div class="js_wizard-content x-hidden" id="step-2">
            <div class="text-center">
              <h3 class="mb5"><?php echo __("Welcome");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</span></h3>
              <p class="mb20"><?php echo __("Let's start with your photo");?>
</p>
            </div>

            <!-- profile-avatar -->
            <div class="position-relative" style="height: 170px;">
              <div class="profile-avatar-wrapper static">
                <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="">

                <!-- buttons -->
                <div class="profile-avatar-change">
                  <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                </div>
                <div class="profile-avatar-change-loader">
                  <div class="progress x-progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_picture_default'] || !$_smarty_tpl->tpl_vars['user']->value->_data['user_picture_id']) {?>x-hidden<?php }?>">
                  <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture_full'];?>
" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
"></i>
                </div>
                <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_picture_default']) {?>x-hidden<?php }?>">
                  <i class="fa fa-trash js_delete-picture" data-handle="picture-user"></i>
                </div>
                <!-- buttons -->
              </div>
            </div>
            <!-- profile-avatar -->

            <!-- buttons -->
            <div class="clearfix mt20">
              <button id="activate-step-3" class="btn btn-primary float-right"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
            </div>
            <!-- buttons -->
          </div>

          <div class="js_wizard-content x-hidden" id="step-3">
            <div class="text-center">
              <h3 class="mb5"><?php echo __("Update your info");?>
</h3>
              <p class="mb20"><?php echo __("Share your information with our community");?>
</p>
            </div>

            <form class="js_ajax-forms" data-url="users/started.php?do=update">
              <div class="heading-small mb20">
                <?php echo __("Location");?>

              </div>
              <div class="pl-md-4">
                <div class="form-group">
                  <label class="form-control-label" for="country"><?php echo __("Country");?>
</label>
                  <select class="form-control" name="country" id="country">
                    <option value="none"><?php echo __("Select Country");?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                      <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_country'] == $_smarty_tpl->tpl_vars['country']->value['country_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </select>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['location_info_enabled']) {?>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="city"><?php echo __("Current City");?>
</label>
                      <input type="text" class="form-control js_geocomplete" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="hometown"><?php echo __("Hometown");?>
</label>
                      <input type="text" class="form-control js_geocomplete" name="hometown" id="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">
                    </div>
                  </div>
                <?php }?>
              </div>

              <?php if ($_smarty_tpl->tpl_vars['system']->value['work_info_enabled']) {?>
                <div class="divider"></div>

                <div class="heading-small mb20">
                  <?php echo __("Work");?>

                </div>
                <div class="pl-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="work_title"><?php echo __("Work Title");?>
</label>
                    <input type="text" class="form-control" name="work_title" id="work_title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_title'];?>
">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="work_place"><?php echo __("Work Place");?>
</label>
                      <input type="text" class="form-control" name="work_place" id="work_place" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_place'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="work_url"><?php echo __("Work Website");?>
</label>
                      <input type="text" class="form-control" name="work_url" id="work_url" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_url'];?>
">
                    </div>
                  </div>
                </div>
              <?php }?>

              <?php if ($_smarty_tpl->tpl_vars['system']->value['education_info_enabled']) {?>
                <div class="divider"></div>

                <div class="heading-small mb20">
                  <?php echo __("Education");?>

                </div>
                <div class="pl-md-4">
                  <div class="form-group">
                    <label class="form-control-label" for="edu_major"><?php echo __("Major");?>
</label>
                    <input type="text" class="form-control" name="edu_major" id="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="edu_school"><?php echo __("School");?>
</label>
                      <input type="text" class="form-control" name="edu_school" id="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-control-label" for="edu_class"><?php echo __("Class");?>
</label>
                      <input type="text" class="form-control" name="edu_class" id="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">
                    </div>
                  </div>
                </div>
              <?php }?>

              <!-- success -->
              <div class="alert alert-success x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger x-hidden"></div>
              <!-- error -->

              <!-- buttons -->
              <div class="clearfix mt20">
                <div class="float-right">
                  <button type="submit" class="btn btn-success"><i class="fas fa-check-circle mr5"></i><?php echo __("Save Changes");?>
</button>
                  <button type="button" class="btn btn-primary" id="activate-step-4"><?php echo __("Next Step");?>
<i class="fas fa-arrow-circle-right ml5"></i></button>
                </div>
              </div>
              <!-- buttons -->
            </form>
          </div>

          <div class="js_wizard-content x-hidden" id="step-4">
            <div class="text-center">
              <h3 class="mb5"><?php echo __("Add Friends");?>
</h3>
              <p class="mb20"><?php echo __("Get latest activities from our popular users");?>
</p>
            </div>

            <form class="js_ajax-forms" data-url="users/started.php?do=finish">
              <!-- new people -->
              <?php if ($_smarty_tpl->tpl_vars['new_people']->value) {?>
                <ul class="row">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['new_people']->value, '_user');
$_smarty_tpl->tpl_vars['_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
$_smarty_tpl->tpl_vars['_user']->do_else = false;
?>
                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"box",'_connection'=>"add"), 0, true);
?>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
              <?php }?>
              <!-- new people -->

              <!-- success -->
              <div class="alert alert-success x-hidden"></div>
              <!-- success -->

              <!-- error -->
              <div class="alert alert-danger x-hidden"></div>
              <!-- error -->

              <!-- buttons -->
              <div class="clearfix mt20">
                <button type="submit" class="btn btn-danger float-right"><i class="fas fa-check-circle mr5"></i><?php echo __("Finish");?>
</button>
              </div>
              <!-- buttons -->
            </form>
          </div>
          <!-- tabs -->

        </div>
      </div>
    </div>
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
  $(function() {

    var wizard_steps = $('.js_wizard-steps li a');
    var wizard_content = $('.js_wizard-content');

    wizard_content.hide();

    wizard_steps.click(function(e) {
      e.preventDefault();
      var $target = $($(this).attr('href'));
      if (!$(this).hasClass('disabled')) {
        wizard_steps.removeClass('active');
        $(this).addClass('active');
        wizard_content.hide();
        $target.show();
      }
    });

    $('.js_wizard-steps li a.active').trigger('click');

    $('#activate-step-2').on('click', function(e) {
        if($("#accept_policy").is(":checked"))
        {
          $('.js_wizard-steps li:eq(1) a').removeClass('disabled');
          $('.js_wizard-steps li a[href="#step-2"]').trigger('click');
        }
        else{
            var error = $('#step-1 form').find('.alert.alert-danger');
            error.html('<p>Você precisa aceitar a política de privacidade</p>').slideDown();
        }
    });

    $('#activate-step-3').on('click', function(e) {
      $('.js_wizard-steps li:eq(2) a').removeClass('disabled');
      $('.js_wizard-steps li a[href="#step-3"]').trigger('click');
    });

    $('#activate-step-4').on('click', function(e) {
      $('.js_wizard-steps li:eq(3) a').removeClass('disabled');
      $('.js_wizard-steps li a[href="#step-4"]').trigger('click');
    });

  });
<?php echo '</script'; ?>
><?php }
}
