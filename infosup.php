<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>پشتیبانی</title>
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
        .logo img
        {
          width: 4%;
          margin-left: 0%;
          margin-top: 0vh;
        }
        .panel
        {
          width: 80%;
          margin-left: 10%;
          margin-top: 5vh;
          height: 80vh;
          background-color: #f2f2f2;
          border-radius: 30px;
        }
        .panel .imgrith
        {
          width: 60%;
          float: right;
          margin-top: 15vh;
          display: inline-block;
        }
        .form
        {
          width: 40%;
          height: 80vh;
          background-image: linear-gradient(to bottom, #f5c2f9, #e2ccfe, #d5d5fc, #d0dbf6, #d4dfec);
          display: inline-block;
          border-top-left-radius: 30px;
          border-bottom-left-radius: 30px;
        }
        .input
        {
          display: block;
          width: 60%;
          height: 4vh;
          margin-left: 20%;
          margin-top: 7vh;
          border-radius: 30px;
          border: none;
          text-align: center;
          color: black;
          font-size: 1.2vw;
          font-family: Vazir,'BTitrBold',tahoma;
        }
        .input1
        {
          display: block;
          width: 60%;
          height: 4vh;
          margin-left: 20%;
          margin-top: 10vh;
          border-radius: 30px;
          border: none;
          text-align: center;
          color: black;
          font-size: 1vw;
          font-family: Vazir,'BTitrBold',tahoma;
        }
        {
          background-color: red;
        }
        .input2
        {
          display: block;
          width: 30%;
          height: 4vh;
          margin-left: 35%;
          margin-top: 5vh;
          border: none;
          font-family: Vazir,'BTitrBold',tahoma;
          text-align: center;
          font-size: 1.3vw;
        }
        .btn
        {
          width: 40%;
          font-size: 1.4vw;
          border-radius: 30px;
          border: none;
          margin-left: 30%;
          margin-top: 10vh;
          font-family: Vazir,'BTitrBold',tahoma;
          background-color: #514e64;
          color: white;
          cursor: pointer;
        }
        .logosupport
        {
          width: 20%;
          margin-left: 40%;
          margin-top: 10vh;
        }
        .btnback
        {
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
    <script>
      function jsrandom()
      {
        var number;
        number = Math.floor(Math.random() * 1000000);
        document.getElementById("varcode").value = number;
        document.getElementById("btnsend").style.display = "none";
      }

      function jsana()
      {
        var num1 , num2;
        num1=document.getElementById("varcode").value;
        num2=document.getElementById("varcode1").value;
        if (num1==num2)
        {
          document.getElementById("btnsend").style.display = "";
        }
        else
        {
          document.getElementById("btnsend").style.display = "none";
        }
      }
    </script>
  </head>
  <body onload="jsrandom()">
<a href="index.html"><div class="btnback"><i class="fa fa-angle-left"></i></div></a>
    <div class="panel">
      <div class="form">
        <form action="infosup.php" target="_self" method="post">
          <img src="image/support-sevice.svg" class="logosupport" alt="طراحی سایت">
          <input type="text" name="code" class="input" required placeholder="کد پروژه را وارد کنید" onkeypress="return event.keyCode != 13;">
          <input type="text" id="varcode1" name="ver2" class="input1" required placeholder="عددی که در باکس پایین است را وارد کنید" onchange="jsana()" onkeypress="return event.keyCode != 13;">
          <input type="text" id="varcode" name="var1" class="input2" readonly>
          <input type="submit" id="btnsend" class="btn" value="ارسال">
        </form>
        </div>
    <img src="image/support.svg" class="imgrith" alt="طراحی سایت">
  </div>


  <?php


  if (isset($_POST["code"]) && isset($_POST["ver2"]))
  {
    $code =  $_POST["code"];
    $var2 =  $_POST["ver2"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_list_project";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      $conn->query("SET NAME 'utf8'");
    }
    mysqli_set_charset($conn,"utf8");



    $sql =	"SELECT * FROM `project_information` WHERE  `id_project`='$code';";

    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
      echo "<script> alert('پروژه پیدا شد'); </script>";
      echo "<meta http-equiv='Refresh' content='0;url=infosup2.php'>";
      $_SESSION["codepro"] = $code;
      $conn->close();
	   }
     else
     {
       echo "<script> alert('پروژه پیدا نشد'); </script>";
       echo "<meta http-equiv='Refresh' content='0;url=infosup.php'>";
       $conn->close();
     }
   }

   ?>
  </body>
</html>
