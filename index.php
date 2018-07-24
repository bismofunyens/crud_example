<?php


include_once 'crud.php';

?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<div class="container">  
  <form id="contact" method="post">
    <h3>Fill Out Your Information</h3>
    <h4>Please fill out every box</h4>
    <fieldset>
      <input type="text" name="fn" placeholder="First Name" value="<?php if(isset($_GET['edit'])) echo $getROW['fn'];?>" />
    </fieldset>
    <fieldset>
      <input type="text" name="ln" placeholder="Last Name" value="<?php if(isset($_GET['edit'])) echo $getROW['ln'];?>" />
    </fieldset>
    <fieldset>
      <input type="text" name="job" placeholder="Desired Job" value="<?php if(isset($_GET['edit'])) echo $getROW['job'];?>" />
    </fieldset>
    <fieldset>
      <input type="text" name="words" placeholder="Something that you say" value="<?php if(isset($_GET['edit'])) echo $getROW['words'];?>" />
    </fieldset>
    <fieldset>
      <input type="text" name="inspire" placeholder="Inspired by" value="<?php if(isset($_GET['edit'])) echo $getROW['inspire'];?>" />
    </fieldset>
    <fieldset>
      <input type="text" name="dislike" placeholder="Dislikes" value="<?php if(isset($_GET['edit'])) echo $getROW['dislike'];?>" />
    </fieldset>
    <fieldset>
      <input type="text" name="photo" placeholder="Type the name of your photo: eg. image.jpg" value="<?php if(isset($_GET['edit'])) echo $getROW['photo'];?>" />
    </fieldset>
    <fieldset>
      <?php
            if(isset($_GET['edit'])) {
              ?>
          
            <button type="submit" name="update">Update</button>
            <?php
              }else{
                ?>
                <button type="submit" name="save">Save</button>
              <?php
            }
            ?>
    </fieldset>
  </form>
 <br>
    <?php
    $res = $MySQLiconn->query("SELECT * FROM students");
    while($row=$res->fetch_array())
    {
      ?>
    <div class="user-profile">
      <img class="avatar" src="img/<?php echo $row['photo'];?>" height="240px" width="320px" />
        <div class="username"><?php echo $row['id']; ?>.&nbsp;<?php echo $row['fn']; ?>&nbsp;<?php echo $row['ln'];?></div>
      <div class="bio">
        <h4>Job Title: <?php echo $row['job']; ?></h4>
    </div>
    <div class="description">
      <p>Something you say: <?php echo $row['words']; ?></p>
      <p>Inspired by: <?php echo $row['inspire']; ?></p>
      <p>Dislikes: <?php echo $row['dislike']; ?></p>

  </div>
</div>
<footer>
    <h1>
  <a href="?del=<?php echo $row['id']; ?>" onclick="return confirm('are you sure you want to delete this record?'); " >Delete</a>
    </h1>
  </footer>
<br>
      <?php
    } 
    ?>
<!--   </table> -->
</div>
</body>
</html>
