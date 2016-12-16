<?php session_start(); require 'C:/Users/Dell/Documents/GitHub/robruu/backend/util/controller/student_controller.php';
$list = new student_controller();
$_SESSION['id_course'] = $_GET['id_course'];
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="lib/jquery.js"></script>
    <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
    </script>
    <script type="text/javascript" async src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_CHTML">
    </script>
    <style>
        @font-face {
            font-family: thaisan;
            src: url(thaisanslite_r1.ttf);
        }

        * {
            font-family: thaisan;
            !important;
        }
    </style>
    <style>
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            width: 70%;
            margin: auto;
        }
    </style>
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="navbar navbar-default navbar-static-top" style="background-color:#ffffff; height:15%">
        <div class="container" style="; width:90%">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
                <a href="#"><span></span><img src="pic/brand.png" style="height: 80%"></a>
            </div>
        </div>
    </div>
    <div class="navbar navbar-default navbar-static-top" style="background-color:#ff630a; ">

    </div>
    <div class="container">
        <a href="main.php"><button type="button" name="button" class="btn btn-danger btn-lg">กลับ</button></a><br>
        <?php
      $list = new student_controller();
      if (isset($_POST['id_answer'])) {
          $list->exam($_POST['id_answer'], $_POST['id_question'], $_SESSION['id']);
      }

       ?>
            <?php
        if (isset($_SESSION['id'])) {
            $list->show_question($_GET['id_course']);
        } else {
            header('location: index.html');
        } ?>

    </div>
</body>

</html>