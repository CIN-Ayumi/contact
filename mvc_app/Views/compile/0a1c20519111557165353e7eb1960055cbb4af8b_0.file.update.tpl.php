<?php
/* Smarty version 4.3.4, created on 2024-03-12 18:15:15
  from '/Users/itouayumi/geekation/contact/mvc_app/Views/contact/update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f01d23398b65_05543224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a1c20519111557165353e7eb1960055cbb4af8b' => 
    array (
      0 => '/Users/itouayumi/geekation/contact/mvc_app/Views/contact/update.tpl',
      1 => 1710234912,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_65f01d23398b65_05543224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casteria</title>
    <link rel="stylesheet" type="text/css" href="../css/base.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <?php echo '<script'; ?>
 defer src="../js/contact.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="main contact">
      <div class="container-field">
      <?php $_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="row justify-content-center">
          <div class="mx-auto col-6">
            <h2 class="m-4 text-center">お問い合せ内容</h2>
            <form id="contactForm" action="/contact/update-completed" method="post" class="bg-white p-3 rounded mb-5 mx-auto">
              <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['myContact']->value['id'];?>
">
              <div class="form-item container">
                <p class="label-text">氏名</p>
                <input id="checkName" class=" form-control blank col-11" type="text" name="name" value=<?php echo $_smarty_tpl->tpl_vars['myContact']->value['name'];?>
>
                <p class="blankAttention" style="color: red;"></p>
                <p class="nameLength" style="color: red;"></p>
                <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['name'];?>
</p>
              </div>
              <div class="form-item container">
                <p class="label-text">フリガナ</p>
                <input id="checkKana" class="form-control blank col-11" type="text" name="kana" value=<?php echo $_smarty_tpl->tpl_vars['myContact']->value['kana'];?>
>
                <p class="blankAttention" style="color: red;"></p>
                <p class="kanaLength" style="color: red;"></p>
                <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['kana'];?>
</p>
              </div>
              <div class="form-item container">
                <p class="label-text">電話番号</p>
                <input id="checkTel" class="form-control col-11" type="text" name="tel" value=<?php echo $_smarty_tpl->tpl_vars['myContact']->value['tel'];?>
>
                <p class="telAttention" style="color: red;"></p>
                <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['tel'];?>
</p>
              </div>
              <div class="form-item container">
                <p class="label-text">メールアドレス</p>
                <input id="checkEmail" class="form-control blank col-11" type="text" name="email" value=<?php echo $_smarty_tpl->tpl_vars['myContact']->value['email'];?>
>
                <p class="blankAttention" style="color: red;"></p>
                <p class="emailAttention" style="color: red;"></p>
                <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['email_1'];?>
</p>
                <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['email_2'];?>
</p>
              </div>
              <div class="form-item container">
                <p class="label-text">お問い合わせ内容</p>
                <textarea id="checkBody" class="form-control blank col-11" name="body"><?php echo $_smarty_tpl->tpl_vars['myContact']->value['body'];?>
</textarea>
                <p class="blankAttention" style="color: red;"></p>
                <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['body'];?>
</p>
              </div>
              <div class="row">
                <p class="mx-auto">上記の内容に変更しますか？</p>
              </div>
              <div class="text-center">
                <input type="submit" class="col-4 btn btn-warning mb-3" value="更新"><br>
                <button class="col-4 mt-2 mb-5 btn btn-light">キャンセル</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
