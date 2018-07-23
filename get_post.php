<?php
  if(isset($_GET['name'])) {
    //echo $_GET['name'];
    //print_r($_GET);
    $name = htmlentities($_GET['name']);
    //echo $name;
  }
  
  /*
  if(isset($_POST['name'])) {
    echo $_GET['name'];
    print_r($_GET);
    print_r($_POST);
    $name = htmlentities($_POST['name']);
    echo $name;
  }                                  
  // Cross Site scripting
  if (isset($_REQUEST['name'])) {
    print_r($_REQUEST);
    $name = htmlentities($_REQUEST['name']);
    echo $name;
  }
  */
  echo $_SERVER['QUERY_STRING'];

?>
<!DOCTYPE html>
<html>
<head>
  <title>My Website</title>
</head>
<body>
  <form method="GET" action="get_post.php">
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>
    <div>
      <label>Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Tyrone">Tyrone</a>
    </li>
    <li>
      <a href="get_post.php?name=Lilian">Lilian</a>
    </li>
  </ul>
  <strong><?php echo "{$name}'s Profile"; ?></strong>
</body>
</html>
