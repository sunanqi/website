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
    ?>

    <form action="includes/signup.inc.php" method="post" class="signinsignup">
      <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username"
          value="<?php echo isset($_GET["username"]) ? $_GET["username"] : ''; ?>" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" id="email"
          value="<?php echo isset($_GET["email"]) ? $_GET["email"] : ''; ?>" required>

        <label for="psw"><b>Password  </b></label>
        <span class="tooltip" data-tooltip="Please use a strong password. We store them in Google Cloud servers. All passwords are encrypted before storing so that even if anyone gets access to the database, they can't know your password. Not even admin.">?</span>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn" name="signup-submit">Register</button>
      </div>
      <div class="container signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
      </div>
    </form>
  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <?php
      if (isset($_GET['error'])) {
        echo "<div class='error'> 错误: ".$_GET['error']." </div>";
      }
    ?>

    <form action="includes/signup.inc.php?lang=zh" method="post" class="signinsignup">
      <div class="container">
        <h1>注册</h1>
        <p>填写以下表格创建账号</p>
        <hr>

        <label for="username"><b>用户名</b></label>
        <input type="text" placeholder="输入用户名" name="username" id="username"
          value="<?php echo isset($_GET["username"]) ? $_GET["username"] : ''; ?>" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="输入Email" name="email" id="email"
          value="<?php echo isset($_GET["email"]) ? $_GET["email"] : ''; ?>" required>

        <label for="psw"><b>密码  </b></label>
        <span class="tooltip" data-tooltip="Please use a strong password. We store them in Google Cloud servers. All passwords are encrypted before storing so that even if anyone gets access to the database, they can't know your password. Not even admin.">?</span>
        <input type="password" placeholder="输入密码" name="psw" id="psw" required>

        <label for="psw-repeat"><b>再输一次密码</b></label>
        <input type="password" placeholder="再输一次密码" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <p>创建账号表明你同意我们的 <a href="#">隐私条款</a>.</p>

        <button type="submit" class="registerbtn" name="signup-submit">注册</button>
      </div>
      <div class="container signin">
        <p>已有帐号？<a href="login.php">请登录</a>.</p>
      </div>
    </form>
  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
