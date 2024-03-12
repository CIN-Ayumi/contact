<?php
/* Smarty version 4.3.4, created on 2024-03-12 10:23:28
  from '/Applications/MAMP/htdocs/mvc_app/Views/contact/form-output.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65efae90280507_24680888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a83f7c9f768d10c473ec57bc5ece619a2b69e0e5' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc_app/Views/contact/form-output.tpl',
      1 => 1710148345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_65efae90280507_24680888 (Smarty_Internal_Template $_smarty_tpl) {
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
        <?php $_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="container-field">
                <div class="container">
                    <div class="row justify-content-center mt-5">
                        <h4 class="mt-5 text-center">お問合せ内容を送信しました。<br>
                            ありがとうございました。</h4>
                    </div>
                    <div class="container mt-5 d-flex justify-content-center">
                        <a href="/home/index">トップページへ戻る</a>
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
