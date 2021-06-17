  <html>
  <body>     
 
  <?php if($_SESSION['fb_id']) {?>
 
        <div class = "container">
 
           <div class = "jumbotron">
 
              <h1>Hello <?php echo $_GET['nm']; ?></h1>
 
              <p>Welcome to Google Login  App</p>
 
           </div>
 
              <ul class = "nav nav-list">
 
                 
 
                 <h4>ID</h4>
 
                 <li><?php echo  $_GET['id']; ?></li>
 
                 <h4>Fullname</h4>
 
                 <li><?php echo $_GET['nm']; ?></li>
 
                 <h4>Email</h4>
 
                 <li><?php echo $_GET['ml']; ?></li>

                 <h4>Token</h4>
 
                 <li><?php echo $_GET['tk']; ?></li>
              </ul>
 
          </div>
 
<?php } ?>

</body>
</html>