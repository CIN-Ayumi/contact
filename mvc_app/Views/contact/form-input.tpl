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
  </head>
  <body>
    <div class="main contact">
      <div class="container-field">
        {include file="layout/header.tpl"}
        <div class="row justify-content-center">
          <div class="mx-auto col-6">
            <h2 class="mt-5 text-center">入力内容の確認</h2>
            <form action="form-output" method="post" class="bg-white p-3 rounded mb-5 mx-auto">
              <div class="form-item">
                <p class="label-text mb-1" style="font-size:1.2rem">氏名</p>
                <p class="data-text mb-4">{$name}</p>
                <input type="hidden" name="name" value={$name}>
              </div>
              <div class="form-item">
                <p class="label-text mb-1" style="font-size:1.2rem">フリガナ</p>
                <p class="data-text mb-4">{$kana}</p>
                <input type="hidden" name="kana" value={$kana}>
              </div>
              <div class="form-item">
                <p class="label-text mb-1" style="font-size:1.2rem">電話番号</p>
                <p class="data-text mb-4">{$tel}</p>
                <input type="hidden" name="tel" value={$tel}>
              </div>
              <div class="form-item">
                <p class="label-text mb-1" style="font-size:1.2rem">メールアドレス</p>
                <p class="data-text mb-4">{$email}</p>
                <input type="hidden" name="email" value={$email}>
              </div>
              <div class="form-item">
                <p class="label-text mb-1" style="font-size:1.2rem">お問い合わせ内容</p>
                <p class="data-text mb-4">{nl2br($body)}</p>
                <textarea style="display: none;" readonly name="body">{$body}</textarea>
              </div>
              <input type="hidden" name="token" value="{$token}">
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
    {include file="layout/footer.tpl"}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  </body>
</html>