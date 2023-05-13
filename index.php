
<?php
session_start();
include("layout/header.php");
include("./data_connect.php");
?>

<div class="container">
<form action="data.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Chosse role</label>
    <select name="role" id="" class="form-control">
      <option value="admin">Admint</option>
      <option value="customer">Customer</option>
    </select>
   
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="mt-5">
<?php 
 $select_user="SELECT * FROM users";
 $query_user=mysqli_query($db_connect,$select_user);
 print_r($query_user);
?>


 
<table class="table">
  <thead>
    <tr>
      <th >ID</th>
      <th >name</th>
      <th >email</th>
      <th >role</th>
    </tr>
  </thead>
  <tbody>
   
   <?php 
   $serial=1;
   foreach($query_user as $value) 
   :?> 
    <tr>
    <td><?=$serial++ ?></td>
    <td><?=$value['name'] ?></td>
    <td><?=$value['email'] ?></td>
    <td><?=$value['role'] ?></td>
    </tr>
    <?php endforeach    ?>
  

  </tbody>
</table>
</div>
</div>

<?php
include('layout/footer.php');
session_unset();
?>