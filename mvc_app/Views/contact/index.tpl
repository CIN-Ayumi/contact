<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Casteria</title>
<link rel="stylesheet" type="text/css" href="../css/base.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
<script defer src="../js/index.js"></script>
<script defer src="../js/contact.js"></script>
</head>
<body>
  <div class="main contact">
  {include file="layout/header.tpl" }
    <div class="p-4 container-field form-orange">
      <div class="row justify-content-center">
        <div class="mx-auto col-6">
          <h2 class="mb-4 text-center">お問い合わせ</h2>
          <form id="contactForm" action="/contact/form-input" method="post" class="bg-white p-3 rounded mb-5 mx-auto " >
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">氏名</p>
              <input type="text" id="checkName" class="form-control blank" name="contactName" placeholder="テスト太郎" value={$keepText['name']|default : ''}>
              <p class="blankAttention" style="color: red;"></p>
              <p class="nameLength" style="color: red;"></p>
              <p style="color: red;">{$errorMessages['name']|default : ''}</p>
            </div>
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">フリガナ</p>
              <input type="text" id="checkKana" class="form-control blank" name="contactKana" placeholder="テストタロウ" value={$keepText['kana']|default : ''}>
              <p class="blankAttention" style="color: red;"></p>
              <p class="kanaLength" style="color: red;"></p>
              <p style="color: red;">{$errorMessages['kana']|default : ''}</p>
            </div>
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">電話番号</p>
              <input type="tel" id="checkTel" class="form-control"  name="contactTel" placeholder="080xxxxxxxx" value={$keepText['tel']|default : ''}>
              <p class="telAttention" style="color: red;"></p>
              <p style="color: red;">{$errorMessages['tel']|default : ''}</p>
            </div>
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">メールアドレス</p>
              <input type="email" id="checkEmail" class="form-control blank"  name="contactEmail" placeholder="geekation@exemple.com" value={$keepText['email']|default : ''}>
              <p class="blankAttention" style="color: red;"></p>
              <p class="emailAttention" style="color: red;"></p>
              <p style="color: red;">{$errorMessages['email_1']|default : ''}</p>
              <p style="color: red;">{$errorMessages['email_2']|default : ''}</p>
            </div>
            <div class="contact-group">
              <p class="mb-1" style="font-size: 1.2rem;">お問い合せ内容</p>
              <textarea id="checkBody" class="form-control blank"  name="contactBody" placeholder="お問い合わせ内容">{$keepText['body']|default : ''}</textarea>
              <p class="blankAttention" style="color: red;"></p>
              <p style="color: red;">{$errorMessages['body']|default : ''}</p>
            </div>
            <div class="d-flex justify-content-center">
              <input type="submit" class="col-3 btn btn-warning" onclick="submitClick()" value="送信">
            </div>
          </form>
        </div>
    </div>
    <div class="row justify-content-center">
      <table>
        {if count($contacts) > 0}
        <tr><th></th><th>氏名</th><th>フリガナ</th><th>電話番号</th><th>メールアドレス</th><th>お問い合せ内容</th></tr>
        {foreach $contacts as $contact}
        <form id="contactForm{$contact['id']}" action="/contact/update" method="post">
          <tr><td class="bg-white"><input type="hidden" name="id" value={$contact['id']}></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="name" value={htmlspecialchars($contact['name'])}></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="kana" value={htmlspecialchars($contact['kana'])}></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="tel" value={htmlspecialchars($contact['tel'])}></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="email" value={htmlspecialchars($contact['email'])}></td>
          <td class="bg-white"><input readonly type="text" class="border-0 p-1" name="body" value={htmlspecialchars($contact['body'])}></td>
          <td><input id="UpdateBtn{$contact['id']}" class="ml-2" type="button" value="編集"></td>
          <td><input id="DeleteBtn{$contact['id']}" class="ml-2" type="button" value="削除"></td>
          </tr>

          <script>
            document.getElementById("UpdateBtn{$contact['id']}").addEventListener("click", function(){
              document.getElementById("contactForm{$contact['id']}").submit();
            });
            document.getElementById("DeleteBtn{$contact['id']}").addEventListener("click", function(){
              if (confirm("本当に削除しますか？")){
                  var form = document.getElementById("contactForm{$contact['id']}");
                  form.action = "/contact/delete"; // 削除ボタンの時action属性を変更
                  form.submit();
                  }
            });
          </script>
        </form>
        {/foreach}
        {/if}
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
{include file="layout/footer.tpl"}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
</body>