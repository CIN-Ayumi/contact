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
    {include file="layout/header.tpl" }
        <div class="p-4 container-field form-orange main">
            <div class="row justify-content-center">
                <div class="col-lg-6 mx-auto col-md-8">
                    <h2 class="mt-5 text-center mb-4">ログイン</h2>
                    <form action="/user/certification" method="post" class="bg-white p-3 rounded mb-5">
                        <p class="error-text">{$errorMessages['auth']|default:''}</p>
                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                            <input type="email" class="form-control" name="email" placeholder="geekation@exemple.com" value="{$post['email']|default:''}">
                            <p class="error-text">{$errorMessages['email']|default:''}</p>
                        </div>
                        <div class="form-group">
                            <label for="password">パスワード</label>
                            <input type="password" class="form-control" name="password" placeholder="password" value="{$post['password']|default:''}">
                            <p class="error-text">{$errorMessages['password']|default:''}</p>
                        </div>
                        <div class="button-group">
                            <button class="btn bg-warning my-2">ログイン</button>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <div class="row justify-content-md-center text-center">
                    <div class="col-lg-6 mx-auto col-md-8" >
                        <div class="p-3 rounded mb-5">
                            <div class="m-3">
                                <a href="/user/sign-up">登録がお済みでない方</a>
                            </div>
                            <div class="m-3">
                                <a href="#">パスワードをお忘れの方</a>
                            </div>
                            <div class="m-3">
                                <a href="/">トップページへ</a>
                            </div>
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