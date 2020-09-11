<?php
  require "header.php";
?>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <?php
      if (isset($_GET['error'])) {
        echo "<div class='error'> error: ".$_GET['error']." </div>";
      }
      if (isset($_GET['signup']) && $_GET['signup']=='success') {
        echo "<div class='signupsuccess'>You are successfully signed up.</div>";
      }
    ?>

    <form action="includes/login.inc.php" method="post" class="signinsignup">
      <div class="container">
        <p>Please sign in...</p>
        <hr>

        <label for="usernameemail"><b>Username or Email</b></label>
        <input type="text" placeholder="Enter Username or email" name="usernameemail" id="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <hr>
        <button type="submit" class="registerbtn" name="login-submit">Sign in</button>
      </div>
      <div class="container signin">
        <p>No account? <a href="signup.php">Sign up here</a>.</p>
      </div>
    </form>
  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <?php
      if (isset($_GET['error'])) {
        echo "<div class='error'> error: ".$_GET['error']." </div>";
      }
      if (isset($_GET['signup']) && $_GET['signup']=='success') {
        echo "<div class='signupsuccess'>注册成功.</div>";
      }
    ?>

    <form action="includes/login.inc.php?lang=zh" method="post" class="signinsignup">
      <div class="container">
        <p>请登录...</p>
        <hr>

        <label for="usernameemail"><b>用户名或email</b></label>
        <input type="text" placeholder="输入用户名或email" name="usernameemail" id="username" required>

        <label for="psw"><b>密码</b></label>
        <input type="password" placeholder="输入密码" name="psw" id="psw" required>

        <hr>
        <button type="submit" class="registerbtn" name="login-submit">登录</button>
      </div>
      <div class="container signin">
        <p>没账号？ <a href="signup.php?lang=zh">点此注册</a>.</p>
      </div>
    </form>
  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
