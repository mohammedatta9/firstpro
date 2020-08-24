<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'm';

$conn = new mysqli($server,$user,$password,$db_name);

if(isset($_POST['registe'])) {

   
   $name = $_POST['name'];
   $jop = $_POST['jop'];
   $sis = $_POST['sis'];
  
   // if(isset($_POST['check'])){}
       
    $sql = "INSERT INTO `tech`(name,jop,sis)
            VALUES('$name','$jop','$sis')";
       
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
    <title>المدرسين</title>
</head>
<body >
    <div class="row mx-0">
    <div class="col-2" style="padding: 0px"  >
        <div class=" bg-dark" >
        <ul class="nav flex-column">
            <li class="nav-item" >
          <h4 class="text-white" style="margin:20px" >⬇⬇قائمة الاوامر⬇⬇</h4>
       
      </li>
    <li class="nav-item">
       <a class="nav-link" href="admin.php"> <button type="button" class="btn btn-secondary btn-lg btn-block">الرئيسيه</button>
</a>
      </li>         
             <li class="nav-item">

       <a class="nav-link active" href="student.php"><button type="button" class="btn btn-secondary btn-lg btn-block">الطلاب</button>
</a>
      </li>
      <li class="nav-item">

       <a class="nav-link active" href="studenta.php"><button type="button" class="btn btn-secondary btn-lg btn-block">الطلاب المثبتين</button>
</a>
      </li>
      <li class="nav-item">
            <a class="nav-link active" href="gro.php"><button type="button" class="btn btn-secondary btn-lg btn-block">المجمواعات</button>
</a>
      </li>
      <li class="nav-item">
       <a class="nav-link" href="project.php"> <button type="button" class="btn btn-secondary btn-lg btn-block">المشاريع المقترحة</button>
</a>
      </li>
     <li class="nav-item">
       <a class="nav-link" href="projecta.php"> <button type="button" class="btn btn-secondary btn-lg btn-block">المشاريع</button>
</a>
      </li>
    <li class="nav-item">
       <a class="nav-link" href="tech.php"> <button type="button" class="btn btn-secondary btn-lg btn-block">المدرسين</button>
</a>
      </li>
    <li class="nav-item">
       <a class="nav-link" href="shda.php"> <button type="button" class="btn btn-secondary btn-lg btn-block">جدول المناقشة</button>
</a>
      </li>
             <li class="nav-item">
       <a class="nav-link" href="aa.php"> <button type="button" class="btn btn-secondary btn-lg btn-block">نشر اعلان</button>
</a>
      </li>
        <br><br><br>    
            
      </ul>  
       
    </div>
     
    </div>
       <div class="col-10 " style="padding: 0px "> 
           <div></div>
        <nav class="navbar navbar-dark bg-dark">
      
  <h4> </h4> 
      
      
  <h2 class="text-white"> المدرسين</h2>
</nav>
<div style="padding: 50PX"  >
      <form action="" method="post">
           <div class="form-row">
    <div class="col-6">
      <input type="text" name="name" required class="form-control" placeholder="اسم المدرس">
    </div>
    <div class="col">
      <input type="text" name="jop" required class="form-control" placeholder="الوضيفة">
    </div>
    <div class="col">
      <input type="text" name="sis" required class="form-control" placeholder="القسم">
    </div>
  </div>
  
      <br><button class="btn btn-primary" type="submit" name="registe">تسجيل</button>
              
</form>   
  
</div>
    <div style="padding: 90PX"  >
        <form action="" method="post">
      <table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">اسم المدرس</th> 
      <th scope="col">الوظيفة</th>
      <th scope="col">القسم</th>
            <th scope="col"></th>

    </tr>
  </thead>
           
              <tbody>
      
   <?php
            $sql = "SELECT * FROM tech  ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['name'] ?></td>
                <td><?= $row['jop'] ?></td>
                 <td><?= $row['sis'] ?></td>
                <td><form action="deltech.php?n1=<?= $row['id'] ?>" method="post"> <button class="btn btn-primary"  type="submit"> حذف</button>  </form></td>
                

            </tr>
            <?php 
            }
            ?>
  </tbody> 
        </table></form>
 
  
  
</div>
    </div>
   
    </div>
  
    
   
</body>
</html>