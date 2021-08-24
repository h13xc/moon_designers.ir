<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>ثبت پروژه</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    body
    {
      background-color: #1a1a2e;
      overflow: hidden;
    }
    .form1
    {
      width: 70%;
      height: 80vh;
      margin-left: 15%;
      margin-top: 10vh;
      border: none;
      border-radius: 30px;
      background-image: url("image/talking-to-the-moon-ym.jpg");
      background-size: cover;
    }
    .opform
    {
      width: 34%;
      height: 80vh;
      display: inline-block;
      border-top-left-radius:30px;
      border-bottom-left-radius:30px;
      border: none;
      background-color: #14121d;
      opacity: 0.7;
    }
    .input
    {
      display: block;
      width: 60%;
      height: 3.5vh;
      margin-left: 20%;
      margin-top: 10vh;
      border-radius: 30px;
      border: none;
      font-family: Vazir,'BTitrBold',tahoma;
      text-align: center;
      font-size: 1vw;
    }
    @font-face {
        font-family: Vazir;
        src: url('http://fonts.codearena.ir/rastikerdar/vazir/vazir.eot');
        src: url('http://fonts.codearena.ir/rastikerdar/vazir/vazir.eot?#iefix') format('embedded-opentype'),
             url('http://fonts.codearena.ir/rastikerdar/vazir/vazir.woff') format('woff'),
             url('http://fonts.codearena.ir/rastikerdar/vazir/vazir.ttf') format('truetype');
        font-weight: normal;
      }
    .headform
    {
      font-size: 2vw;
      color: white;
      margin-left: 35%;
      margin-top: 5vh;
      font-family: Vazir,'BTitrBold',tahoma;
    }
    .input1
    {
      width: 70%;
      height: 15vh;
      font-size: 1vw;
      margin-left: 15%;
      margin-top: 7vh;
      text-align: center;
      font-family: Vazir,'BTitrBold',tahoma;
      border-radius: 30px;
      resize: none;
    }
    .btn
    {
      width: 70%;
      margin-left: 15%;
      font-size: 1.2vw;
      border-radius: 30px;
      border: none;
      font-family: Vazir,'BTitrBold',tahoma;
      margin-top: 8vh;
      cursor: pointer;
      background-color: #1a1a2e;
      color: white;
      border: 1px solid white;
      font-weight: bold;
      transition: box-shadow 1s;
    }
    .btn:hover
    {
      box-shadow: 15px 15px 15px white;
    }
    .dir
    {
      color: aqua;
    }
    @media only screen and (max-width: 800px)
    {
      .opform
      {
        width: 100%;
      }
      .headform
      {
        margin-left: 43%;
      }
      .input
      {
        width: 50%;
        margin-left: 25%;
        font-size: 1.1vw;
      }
      .input1
      {
        font-size: 1.5vw;
      }
      .btn
      {
        width: 40%;
        margin-left: 30%;
      }
    }
    </style>
  </head>
  <body>
    <form action="#" target="_self" class="form1" method="post">
      <div class="opform">
        <div class="headform">ثبت پروژه</div>
        <input type="text" name="txt1" class="input" required autocomplete="off" placeholder="نام و نام خانوادگی">
        <input type="number" name="txt2" class="input" required autocomplete="off" placeholder="شماره تلفن">
        <textarea name="sharh" class="input1" required placeholder="شرح پروژه"></textarea>
        <button type="submit" class="btn">ارسال&nbsp;&nbsp;<i class="fa dir fa-arrow-right"></i></button>
      </div>
    </form>

    <?php
    if (isset($_POST["txt1"]) && isset($_POST["txt2"]) && isset($_POST["sharh"]))
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

      $name =  $_POST["txt1"];
      $phone =  $_POST["txt2"];
      $sharh =  $_POST["sharh"];
      $time =  $set_time;
      $date =  $set_date;
      $cond =  "در حال بررسی";


      $sql = 	"INSERT INTO `list_project` (`id`, `name`, `phone`, `sharh`, `time`, `date`, `cond`) VALUES (NULL, '$name', '$phone', '$sharh', '$time', '$date', '$cond')";

      if ($conn->query($sql) === TRUE)
      {
        echo "<script> alert('پروژه ی شما ثبت شد'); </script>";
        echo "<meta http-equiv='Refresh' content='0;url=regesterproject.php'>";
      }
      else
      {
          echo "<script> alert('پروژه ی شما ثبت نشد'); </script>";
          echo "<meta http-equiv='Refresh' content='0;url=regesterproject.php'>";
      }

      $conn->close();

    }

     ?>
  </body>
</html>
