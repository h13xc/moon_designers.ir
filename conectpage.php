<?php
session_start();
$code= $_SESSION["codepro"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>صفحه اطلاعات پروژه</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body
        {
          overflow: hidden;
          background-color: #1a1a2e;
        }
        @font-face {
            font-family: Vazir;
            src: url('http://fonts.codearena.ir/rastikerdar/vazir/vazir.eot');
            src: url('http://fonts.codearena.ir/rastikerdar/vazir/vazir.eot?#iefix') format('embedded-opentype'),
                 url('http://fonts.codearena.ir/rastikerdar/vazir/vazir.woff') format('woff'),
                 url('http://fonts.codearena.ir/rastikerdar/vazir/vazir.ttf') format('truetype');
            font-weight: normal;
          }
          .panelinfo
          {
            width: 70%;
            height: 90vh;
            margin-left: 15%;
            margin-top: 5vh;
            border: none;
            border-radius: 30px;
            background-color: white;
            overflow: hidden;
          }
          .txt
          {
            width: 60%;
            height: 40vh;
            margin-left: 20%;
            margin-top: 10vh;
            resize: none;
            font-family: Vazir,'BTitrBold',tahoma;
            text-align: center;
            font-size: 1.5vw;
            border-radius: 30px;
          }
          .btn
          {
            width: 20%;
            font-size: 1.2vw;
            border-radius: 30px;
            border: 1px solid black;
            margin-top: 20vh;
            margin-left: 20%;
            cursor: pointer;
            font-family: Vazir,'BTitrBold',tahoma;
          }
          .btnback
          {
            position: absolute;
            width: 3%;
            height: 6vh;
            background-color: #1a1a2e;
            border-radius: 70%;
            border: 1px solid white;
            margin-left: 0.5%;
          }
          .fa
          {
            font-size: 3vw;
            margin-left: 25%;
            color: white;
          }
    </style>

  </head>
  <body>
    <a href="infosup.php"><div class="btnback"><i class="fa fa-angle-left"></i></div></a>
    <div class="panelinfo">
      <form target="_self" action="#" method="post">
        <textarea class="txt" name="text" placeholder="مشکل یا باگی که در پروژه به آن برخورد کردید را توضیح بدید" required></textarea>
        <input type="reset" class="btn" value="پاک کردن گزارش">
        <input type="submit" class="btn" value="ارسال گزارش">
        </form>
    </div>

    <?php

    if (isset($_POST["text"]))
    {


      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_list_project";
      date_default_timezone_set("Asia/Tehran");
    	$set_date=date("d:m:Y");
      $set_time=date("H:i:s");

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        $conn->query("SET NAME 'utf8'");
      }
      mysqli_set_charset($conn,"utf8");

      $bug =  $_POST["text"];
      $time =  $set_time;
      $date =  $set_date;
      $status =  "در حال بررسی";


      $sql = 	"INSERT INTO `list_reported_bugs` (`id`, `id_project`, `date_report`, `time_report`, `bug_description`, `bug_status`) VALUES (NULL, '$code', '$date', '$time', '$bug', '$status')";

      if ($conn->query($sql) === TRUE)
      {
        echo "<script> alert('گزارش شما ثبت شد'); </script>";
        echo "<meta http-equiv='Refresh' content='0;url=index.html'>";
      }
      else
      {
          echo "<script> alert('ثبت گزارش شما به مشکل بر خورد'); </script>";
          echo "<meta http-equiv='Refresh' content='0;url=index.html'>";
      }

      $conn->close();
    }

     ?>
  </body>
</html>
