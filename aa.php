 <?php

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'm';

$conn = new mysqli($server,$user,$password,$db_name);
if(isset($_POST['register'])) {

  
   $taa = $_POST['taa'];
   $aa= $_POST['aa'];
  
   
   // if(isset($_POST['check'])){}
       
    $sql = "INSERT INTO `aalan`(taa,aa)
            VALUES('$taa','$aa')";
       
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
    <title>نشر اعلان</title>
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
      
      
  <h2 class="text-white"> نشر اعلان</h2>
</nav>
<div style="padding: 50PX"  >
      <form action="" method="post">
           <div class="form-row">
    <div class="col">
      <input type="text" name="taa" required class="form-control" placeholder="عنوان الاعلان">
    </div>
    <div class="col-8">
      <input type="text" name="aa" required class="form-control" placeholder="الاعلان">
    </div>
    
  </div>
  
      <br><button class="btn btn-primary" type="submit" name="register">نشر</button>
              
</form>   
  <div style="padding: 50PX"  ><div class="row">
  
                <?php
            $sql = "SELECT * FROM aalan ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            
    <div class="col-4">
 <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
     <div class="card-header"> <nav class="navbar "><?= $row['taa'] ?><form action="delaa.php?n1=<?= $row['id'] ?>" method="post"> <button class="btn btn-primary" name="register" type="submit"> حذف</button>  </form></nav></div>
  <div class="card-body">
    <p class="card-text"><?= $row['aa'] ?></p>
  </div>
</div>    </div><?php }
           
            ?>
  </div></div>
</div>
    
 
  
  
</div>
    </div>
    
    
    
   
</body>
</html>