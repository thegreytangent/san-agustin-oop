
<?php 

if (isset($_POST['login_button'])) {
   
   
   $_SESSION['username'] =  $_POST['username'];
   $_SESSION['is_login'] = true; 
}

if (isset($_POST['save_item_button'])) {
    $item = $_POST['item'];
 

    if ( !isset($_SESSION['items'])) {
        $_SESSION['items'][]  = $item;
    }else {
        $_SESSION['items'] = [];
    }    
 







    
 
   
}




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   

</head>
  <body>


  <div class="container">
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Social Network</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      </ul>

      <a href="logout.php" class="btn btn-outline-success">
        <?php 

        if (isset($_SESSION['is_login']) && $_SESSION['is_login']) {
            echo $_SESSION['username'] . "(logout)";
        } else {
            echo "Please login";
        }
        ?>
         </a>
    
    </div>
  </div>
</nav>

<form action="" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Username:</label>
  <input name="username" type="text" class="form-control"  />
</div>

<div class="col-12">
    <button name="login_button" type="submit" class="btn btn-primary">Login</button>
  </div>
  </form>



  <br> <br> <br>
  <form action="" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Item name:</label>
  <input name="item" type="text" class="form-control"  />
</div>

<div class="col-12">
    <button name="save_item_button" type="submit" class="btn btn-primary">Save</button>
  </div>
  </form>


  <table class="table">
  <thead>
    <tr>
    
      <th scope="col">Item name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if (isset($_SESSION['items']))  { ?>
   <?php foreach($_SESSION['items'] as $item) {?>
    <tr>
      <td><?php echo $item; ?></td>
      <td>
        <button class="btn btn-info">Edit</button>
        <button class="btn btn-danger">Delete</button>
      </td>
    </tr>
    <?php 
   }
    } ?>
  </tbody>
</table>






</div>







 
   




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>