
<?php
session_start();
$code= $_SESSION["codepro"];

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
    while($row = $result->fetch_assoc())
      {
    $owner=$row["owner_project"];
    $phone=$row["phone"];
    $project_cap_date=$row["Project_capture_date"];
    $project_del_date=$row["Project_delivery_date"];
    $Project_Description=$row["Project_Description"];
    $name_img_demo=$row["name_img_demo"];
    $id_project=$row["id_project"];
    }
  }
 else
 {
   echo "<script> alert('اطلاعاتی از این پروژه یافته نشد'); </script>";
   echo "<meta http-equiv='Refresh' content='0;url=infosup.php'>";
 }


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
            width: 90%;
            height: 90vh;
            margin-left: 5%;
            margin-top: 5vh;
            border: none;
            border-radius: 30px;
            background-color: white;
            overflow: hidden;
          }
          .qu
          {
            direction: rtl;
            font-size: 1.5vw;
            font-family: Vazir,'BTitrBold',tahoma;
            margin-right: 5%;
            margin-top: 7vh;
            position: flex;
          }
          .imgdemo img
          {
            width: 50%;
            margin-top: 4vh;
            margin-left: 3%;
            float: left;
            display: inline-block;
            height: 70vh;
          }
          .deti
          {
            width: 40%;
            float: right;
            height: 70vh;
          }
          .btn1
          {
            width: 20%;
            height: 5vh;
            font-size: 1.1vw;
            border: none;
            border-radius: 30px;
            background-color: #1a1a2e;
            color: white;
            margin-left: 77%;
            margin-top: 7vh;
            font-family: Vazir,'BTitrBold',tahoma;
            display: inline;
            position: flex;
            cursor: pointer;
            transition: box-shadow 1s;
            text-decoration: none;
          }
          .btn1:hover
          {
            box-shadow: 15px 15px 35px black;
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
      <div class="deti">
      <p class="qu">شرح پروژه : <?php echo $Project_Description ?> </p>
      <p class="qu">صاحب پروژه : <?php echo $owner ?> </p>
      <p class="qu">شماره تماس : <?php echo $phone ?> </p>
      <p class="qu">تاریخ دریافت پروژه : <?php echo $project_cap_date ?> </p>
      <p class="qu">تاریخ تحویل پروژه : <?php echo $project_del_date ?> </p>
      <p class="qu">کد پروژه : <?php echo $id_project ?> </p>
      </div>
      <div class="imgdemo"><img src="<?php echo $name_img_demo ?>" alt="طراحی سایت"></div>
      <a href="conectpage.php"><button class="btn1">تایید اطلاعات و گزارش مشکل</button></a>
    </div>
  </body>
</html>
