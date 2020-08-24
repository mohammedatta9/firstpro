 <?php

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'm';

$conn = new mysqli($server,$user,$password,$db_name);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>home</title>
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
        <br><br><br><br><br><br><br><br><br><br><br> 
    </div>
     
    </div>
       <div class="col-10 " style="padding: 0px "> 
           <div></div>
        <nav class="navbar navbar-dark bg-dark">
      
 <a></a>
      
      
  <form  action="admin.php" class="form-inline">
   <div class="form-group  mt-3">
    <p class="text-white" > 👨‍💼for admin: </p>
   </div>
      
   <div class="form-group mx-sm-1 mb-2">
    <input type="text" class="form-control-sm" placeholder="user name">
   </div>
   <div class="form-group mx-sm-1 mb-2">
    <input type="password" class="form-control-sm" id="inputPassword2" placeholder="Password">
   </div>
  <button type="submit" class="btn btn-primary mb-2 form-control-sm">login</button>
</form>
</nav>
           <div style="padding: 50PX"  ><div class="row">
  
                <?php
            $sql = "SELECT * FROM aalan ";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)) {
            ?>
            
    <div class="col-4">
 <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header"><?= $row['taa'] ?></div>
  <div class="card-body">
    <p class="card-text"><?= $row['aa'] ?></p>
  </div>
</div>    </div><?php }
           
            ?>
  </div></div>
         
  
</div>
    </div>
   
 
  
    
   
</body>
</html>