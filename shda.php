<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'm';

$conn = new mysqli($server,$user,$password,$db_name);

if(isset($_POST['register'])) {

   
   $techname = $_POST['techname'];
   $ngro = $_POST['ngro'];
   $time = $_POST['time'];
   $date = $_POST['date'];
   $place = $_POST['place'];
   $project = $_POST['project'];

  
   // if(isset($_POST['check'])){}
       
    $sql = "INSERT INTO `shda`(techname,ngro,time,date,place,project)
            VALUES('$techname','$ngro','$time','$date','$place','$project')";
       
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
    <title>جدول المناقشة</title>
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
      
      
  <h2 class="text-white"> جدول المناقشة</h2>
</nav>
<div style="padding: 50PX"  >
      <form action="" method="post">
           <div class="form-row">
               <select required name="techname">
                    <option value="">المشرف</option>

        <?php
            $sql = "SELECT * FROM tech ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
        <option value="<?= $row['name'] ?>" > <?= $row['name'] ?></option>
        <?php } ?>
      </select>
               <select required name="project">
                    <option value="">المشروع</option>

        <?php
            $sql = "SELECT * FROM project WHERE active = 1 ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
        <option value="<?= $row['tp'] ?>" > <?= $row['tp'] ?></option>
        <?php } ?>
      </select>
               <select required name="ngro">
                    <option value="">رقم المجموعة</option>

        <?php
            $sql = "SELECT * FROM gro ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
        <option value="<?= $row['id'] ?>" > <?= $row['id'] ?></option>
        <?php } ?>
      </select>
    <div class="col">
      <input type="text" name="time" required class="form-control" placeholder="وقت المناقشة">
    </div>
    <div class="col">
      <input type="date" name="date" required class="form-control" placeholder="التاريخ">
    </div>
    <div class="col">
      <input type="text" name="place" required class="form-control" placeholder="المكان">
    </div>
  </div>
  
      <br><button class="btn btn-primary" type="submit" name="register">تسجيل</button>
              
</form>   
  
</div>
    <div style="padding: 90PX"  >
        <form action="" method="post">
      <table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">رقم المجموعة</th>
         <th scope="col">المشروع</th>
        <th scope="col">المشرف</th> 
      <th scope="col">وقت المناقشه</th>
      <th scope="col">التاريخ</th>
      <th scope="col">المكان</th>

      
    </tr>
  </thead>
           
              <tbody>
      
   <?php
            $sql = "SELECT * FROM shda  ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['ngro'] ?></td>
                <td><?= $row['project'] ?></td>
                <td><?= $row['techname'] ?></td>
                <td><?= $row['time'] ?></td>
                 <td><?= $row['date'] ?></td>
                <td><?= $row['place'] ?></td>
                <td><form action="delsh.php?n1=<?= $row['id'] ?>" method="post"> <button class="btn btn-primary"  type="submit"> حذف</button>  </form></td>

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