<?php
/* Smarty version 4.3.4, created on 2024-03-13 10:42:50
  from '/Users/itouayumi/geekation/contact/mvc_app/Views/contact/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65f1049a6a10e7_51234423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ae6a3edc0d37261ef84ad1eb2c6d0b73fb5b7ec' => 
    array (
      0 => '/Users/itouayumi/geekation/contact/mvc_app/Views/contact/index.tpl',
      1 => 1710294061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_65f1049a6a10e7_51234423 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php echo '<script'; ?>
 defer src="../js/contact.js"><?php echo '</script'; ?>
>
</head>
<body>
  <div class="main contact">
  <?php $_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="p-4 container-field form-orange">
      <div class="row justify-content-center">
        <div class="mx-auto col-6">
          <h2 class="mb-4 text-center">お問い合わせ</h2><?php echo var_dump($_smarty_tpl->tpl_vars['keepText']->value);?>
    
          <form id="contactForm" action="/contact/form-input" method="post" class="bg-white p-3 rounded mb-5 mx-auto " >
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">氏名</p>
              <input type="text" id="checkName" class="form-control blank" name="contactName" placeholder="テスト太郎" value=<?php echo $_smarty_tpl->tpl_vars['keepText']->value['name'];?>
>
                            <p class="nameLength" style="color: red;"></p>
              <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['name'];?>
</p>
            </div>
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">フリガナ</p>
              <input type="text" id="checkKana" class="form-control blank" name="contactKana" placeholder="テストタロウ" value=<?php echo $_smarty_tpl->tpl_vars['keepText']->value['kana'];?>
>
                            <p class="kanaLength" style="color: red;"></p>
              <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['kana'];?>
</p>
            </div>
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">電話番号</p>
              <input type="tel" id="checkTel" class="form-control"  name="contactTel" placeholder="080xxxxxxxx" value=<?php echo $_smarty_tpl->tpl_vars['keepText']->value['tel'];?>
>
              <p class="telAttention" style="color: red;"></p>
              <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['tel'];?>
</p>
            </div>
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">メールアドレス</p>
              <input type="email" id="checkEmail" class="form-control blank"  name="contactEmail" placeholder="geekation@exemple.com" value=<?php echo $_smarty_tpl->tpl_vars['keepText']->value['email'];?>
>
                            <p class="emailAttention" style="color: red;"></p>
              <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['email_1'];?>
</p>
              <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['email_2'];?>
</p>
            </div>
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">お問い合せ内容</p>
              <textarea id="checkBody" class="form-control blank"  name="contactBody" placeholder="お問い合わせ内容"><?php echo $_smarty_tpl->tpl_vars['keepText']->value['body'];?>
</textarea>
                            <p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['errorMessages']->value['body'];?>
</p>
            </div>
            <div class="d-flex justify-content-center">
              <input type="submit" class="col-3 btn btn-warning" value="送信">
            </div>
          </form>
        </div>
    </div>
    <div class="row justify-content-center">
      <table>
        <?php if (count($_smarty_tpl->tpl_vars['contacts']->value) > 0) {?>
        <tr><th></th><th>氏名</th><th>フリガナ</th><th>電話番号</th><th>メールアドレス</th><th>お問い合せ内容</th></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
?>
        <form id="contactForm<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" action="/contact/update" method="post">
          <tr><td class="bg-white"><input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="name" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['name']);?>
></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="kana" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['kana']);?>
></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="tel" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['tel']);?>
></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="email" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['email']);?>
></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="body" value=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['body']);?>
></td>
          <td><input id="UpdateBtn<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="ml-2" type="button" value="編集"></td>
          <td><input id="DeleteBtn<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
" class="ml-2" type="button" value="削除"></td>
          </tr>

          <?php echo '<script'; ?>
>
            document.getElementById("UpdateBtn<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
").addEventListener("click", function(){
              document.getElementById("contactForm<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
").submit();
            });
            document.getElementById("DeleteBtn<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
").addEventListener("click", function(){
              if (confirm("本当に削除しますか？")){
                  var form = document.getElementById("contactForm<?php echo $_smarty_tpl->tpl_vars['contact']->value['id'];?>
");
                  form.action = "/contact/delete"; // 削除ボタンの時action属性を変更
                  form.submit();
                  }
            });
          <?php echo '</script'; ?>
>
        </form>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
      </table>
    </div>
  </div>
  <div>
    <div class="row justify-content-md-center text-center">
      <div class="col-lg-6 mx-auto col-md-8">
        <div class="m-1">
          <a href="/">トップページへ</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"><?php echo '</script'; ?>
>
</body><?php }
}
