<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>新規会員登録</title>
        <link rel="stylesheet" type="text/css" href="../css/base.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <script defer src="../js/index.js"></script>
    </head>
    <body>
    {include file="layout/header.tpl" }
        <div class="p-4 container-field form-orange main">
            <div class="row justify-content-center">
                <div class="col-lg-6 mx-auto col-md-8">
                    <h2 class="mb-4 mt-4 text-center">新規会員登録</h2>
                    <form action="/user/create" method="post" class="bg-white p-3 rounded mb-5" >
                        <div class="form-group">
                            <label for="name">氏名</label>
                            <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="{$post['name']|default:''}">
                            <p class="error-text">{$errorMessages['name']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="furigana">フリガナ</label>
                            <input type="text" class="form-control" name="kana" placeholder="テストタロウ" value="{$post['kana']|default:''}">
                            <p class="error-text">{$errorMessages['kana']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <input type="email" class="form-control"  name="email" placeholder="geekation@exemple.com" value="{$post['email']|default:''}">
                            <p class="error-text">{$errorMessages['email']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="password">パスワード</label>
                            <input type="password" class="form-control" name="password" placeholder="password" value="{$post['password']|default:''}">
                            <p class="error-text">{$errorMessages['password']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">パスワード確認</label>
                            <input type="password" class="form-control" name="password-confirmation" placeholder="password" value="{$post['password-confirmation']|default:''}">
                            <p class="error-text">{$errorMessages['password-confirmation']|default:''}</p>
                        </div>
                        <button class="btn bg-warning my-2">送信</button>
                    </form>
                </div>
            </div>
            <div>
                <div class="row m-auto text-center">
                    <div class="col-lg-6 mx-auto col-md-8">
                        <div class="p-3 rounded mb-5">
                            <div class="m-1 m-auto">
                                <p class="text-center" ><a href="/user/log-in">登録がお済みの方</a></p>
                            </div>
                            <div class="m-1 justify-content-center">
                                <p class="text-center"><a href="/">トップページへ</a></p>
                            </div>
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
</html>