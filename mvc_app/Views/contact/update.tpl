
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
    <script defer src="../js/contact.js"></script>
  </head>
  <body>
    <div class="main contact">
      <div class="container-field">
      {include file="layout/header.tpl"}
        <div class="row justify-content-center">
          <div class="mx-auto col-8">
            <h2 class="m-4 text-center">お問い合せ内容</h2>
            <form id="contactForm" action="/contact/update-completed" method="post" class="bg-white p-3 rounded mb-5 mx-auto">
              <input type="hidden" name="id" value="{$myContact['id']}">
              <div class="form-item container">
                <p class="label-text">氏名</p>
                <input id="checkName" class="blank col-11" type="text" name="name" value={$myContact['name']}>
                <p class="blankAttention" style="color: red;"></p>
                <p class="nameLength" style="color: red;"></p>
                <p style="color: red;">{$errorMessages['name']}</p>
              </div>
              <div class="form-item container">
                <p class="label-text">ふりがな</p>
                <input id="checkKana" class="blank col-11" type="text" name="kana" value={$myContact['kana']}>
                <p class="blankAttention" style="color: red;"></p>
                <p class="kanaLength" style="color: red;"></p>
                <p style="color: red;">{$errorMessages['kana']}</p>
              </div>
              <div class="form-item container">
                <p class="label-text">電話番号</p>
                <input id="checkTel" class="col-11" type="text" name="tel" value={$myContact['tel']}>
                <p class="telAttention" style="color: red;"></p>
                <p style="color: red;">{$errorMessages['tel']}</p>
              </div>
              <div class="form-item container">
                <p class="label-text">メールアドレス</p>
                <input id="checkEmail" class="blank col-11" type="text" name="email" value={$myContact['email']}>
                <p class="blankAttention" style="color: red;"></p>
                <p class="emailAttention" style="color: red;"></p>
                <p style="color: red;">{$errorMessages['email_1']}</p>
                <p style="color: red;">{$errorMessages['email_2']}</p>
              </div>
              <div class="form-item container">
                <p class="label-text">お問い合わせ内容</p>
                <textarea id="checkBody" class="blank col-11" name="body">{$myContact['body']}</textarea>
                <p class="blankAttention" style="color: red;"></p>
                <p style="color: red;">{$errorMessages['body']}</p>
              </div>
              <div class="row">
                <p class="mx-auto">上記の内容に変更しますか？</p>
              </div>
              <input type="submit" class="col-4 row justify-content-center" value="更新">
              <button class="col-4 row justify-content-center mt-2">キャンセル</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    {include file="layout/footer.tpl"}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  </body>
</html>
