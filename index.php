<?php
require 'data.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="style/normalize.css"/>
    <link rel="stylesheet" href="style/styles.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="main.js" defer></script>

</head>
<body>
<header class="header">
    <div class="container honey-cont">
        <div class="row">
            <div class="col-md-3 offset-md-4 gy-5 mail-logo">
                <img src="img/contact-icon.png" alt="Icon" width="280">
            </div>
        </div>
        <div class="form">
            <form method="POST" id="form">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <label for="name" class="form-label"><span>Имя</span>
                            <input type="text" class="form-control" id="name" name="name">
                        </label>

                        <label for="email" class="form-label"><span>E-Mail</span>
                            <input type="email" class="form-control" id="email" name="email">
                        </label>
                    </div>
                    <div class="col-md-6">
                        <label for="comment" class="form-label"><span>Комментарий</span>
                            <textarea name="comment" class="form-control" id="comment"></textarea>
                        </label>
                        <input type="submit" class="btn btn-danger submit-btn" value="Записать">
                    </div>
                </div>
                <p class="text"></p>
            </form>
        </div>
    </div>
</header>
<main class="comment-wrapper">
    <div class="container comment-cont">
        <div class="row">
            <h1 class="comment-title">Выводим комментарии</h1>
            <?php
            foreach ($arData as $userComment) { ?>
                <div class="col-12 col-sm-6 col-md-4 user-comment">
                    <div class="user-comment-wrap">
                        <div class="name"><?php echo $userComment["name"] ?></div>
                        <div class="comment">
                            <div class="email">
                                <?php echo $userComment["email"] ?>
                            </div>
                            <div class="comment-text">
                                <?php echo $userComment["comment"] ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="container honey-cont">
        <div class="row justify-content-between">
            <div class="col-6 col-sm-2 social">
                <div class="vk">
                    <a href="https://vk.com/" target="_blank" rel="nofollow"><img src="img/vk.png" alt="VK" width="50"></a>
                </div>
                <div class="fb">
                    <a href="https://www.facebook.com/" target="_blank" rel="nofollow"><img src="img/fb.png"
                                                                                            alt="FB" width="50"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>