<?php
/* Smarty version 4.3.4, created on 2024-03-11 17:57:18
  from '/Applications/MAMP/htdocs/mvc_app/Views/contact/form-input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eec76e62bc33_65421456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a5e6e303dc97b436bb5269907438e4a0e5fab8' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc_app/Views/contact/form-input.tpl',
      1 => 1710147436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_65eec76e62bc33_65421456 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
 defer src="../js/index.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <div class="main contact">
      <div class="container-field">
        <?php $_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="row justify-content-center">
          <div class="mx-auto col-8">
            <h2 class="mt-5">入力内容の確認</h2>
            <form action="form-output" method="post" class="bg-white p-3 rounded mb-5 mx-auto">
              <div class="form-item">
                <p class="label-text">氏名</p>
                <p class="data-text"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p>
                <input type="hidden" name="name" value=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
>
              </div>
              <div class="form-item">
                <p class="label-text">フリガナ</p>
                <p class="data-text"><?php echo $_smarty_tpl->tpl_vars['kana']->value;?>
</p>
                <input type="hidden" name="kana" value=<?php echo $_smarty_tpl->tpl_vars['kana']->value;?>
>
              </div>
              <div class="form-item">
                <p class="label-text">電話番号</p>
                <p class="data-text"><?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
</p>
                <input type="hidden" name="tel" value=<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
>
              </div>
              <div class="form-item">
                <p class="label-text">メールアドレス</p>
                <p class="data-text"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</p>
                <input type="hidden" name="email" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
>
              </div>
              <div class="form-item">
                <p class="label-text">お問い合わせ内容</p>
                <p class="data-text"><?php echo nl2br($_smarty_tpl->tpl_vars['body']->value);?>
</p>
                <textarea style="display: none;" readonly name="body"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea>
              </div>
              <div class="row">
                <p class="mx-auto">上記の内容でよろしいですか？</p>
              </div>
              <input type="submit" class="row col-5 justify-content-center" value="はい">
              <a href="/contact/index"><input type="button" class="row col-5 justify-content-center mt-2" value="キャンセル"></a>
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
</html><?php }
}
