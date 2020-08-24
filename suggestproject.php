 <?php

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'm';

$conn = new mysqli($server,$user,$password,$db_name);
if(isset($_POST['register'])) {

  
   $tp = $_POST['tp'];
   $typ = $_POST['typ'];
   $dp = $_POST['dp'];
   $active = 0 ;
   
   // if(isset($_POST['check'])){}
       
    $sql = "INSERT INTO `project`(tp,typ,dp,active)
            VALUES('$tp','$typ','$dp','$active')";
       
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Added Successfully";
    }else {
        echo "خطأ في البيانات: ".mysqli_error($conn);
    }}
    ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>suggestproject</title>
</head>
<body >
    <div class="row mx-0">
    <div class="col-2" style="padding: 0px"  >
        <div class=" bg-dark" >
        <ul class="nav flex-column">
            <li class="nav-item" >
          <h4 class="text-white" style="margin:20px" >⬇for student⬇👨‍🎓</h4>
       
      </li>
            <li class="nav-item">

       <a class="nav-link active" href="index.php"><button type="button" class="btn btn-secondary btn-lg btn-block">الرئيسية</button>
</a>
      </li>
      <li class="nav-item">

       <a class="nav-link active" href="studentRegstir.PHP"><button type="button" class="btn btn-secondary btn-lg btn-block">تسجيل</button>
</a>
      </li>
      <li class="nav-item">
            <a class="nav-link active" href="suggestproject.php"><button type="button" class="btn btn-secondary btn-lg btn-block">اقتراح مشروع</button>
</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="Schedule.php"> <button type="button" class="btn btn-secondary btn-lg btn-block">جدول المناقشة</button>
</a>
      </li>
     
            <li class="nav-item">
       <a class="nav-link" href="grost.php"> <button type="button" class="btn btn-secondary btn-lg btn-block">المجموعات</button>
</a>
      </li>
            
      </ul> 
        <br><br><br><br><br><br><br><br><br><br><br><br> 
    </div>
     
    </div>
       <div class="col-10 " style="padding: 0px "> 
           <div></div>
        <nav class="navbar navbar-dark bg-dark">
      
  <h4> </h4> 
      
      
  <h2 class="text-white">اقتراح مشروع</h2>
</nav>
   <div style="padding: 90PX"  >
      <form action="" method="post">
  <div class="row">
    <div class="col">
      <input type="text"  name="tp" class="form-control" required placeholder="عنوان المشروع">
    </div>
    <div class="col">
      <input type="text" name="typ" class="form-control" required placeholder="نوع البرمجة">
    </div>
  </div><br>
         <div class="form-group">
    <label for="exampleFormControlTextarea1">وصف المشروع</label>
    <textarea class="form-control" name="dp"  required rows="3"></textarea>
  </div>
        <br><button class="btn btn-primary" name="register" type="submit">ارسال</button>
</form>   
  
</div>  
         
  
</div>
    </div>
   
 
  
    
   
</body>
</html>