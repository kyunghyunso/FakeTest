<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    #mainContents{
      padding-top: 100px;
    }
    </style>
    <title>진정한 나를 찾아서</title> <!--//title 넘겨주기-->
  </head>
  <body>
        <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/auth/logout">
        <img src="/static/img/logo.ico" width="30" height="30" class="d-inline-block align-top" alt="">
        자아테스트
    </a>
    <a href="/auth/logout">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">다시하기</button>
    </a>
    </nav>
    <div id="mainContents" class="container">
    <?php var_dump(urldecode($_COOKIE['realname']));?>

