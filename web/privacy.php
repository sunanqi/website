<?php
  $title = "Privacy policy - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "隐私政策 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>Privacy Policy</h3>
    <p>At hcr2.tips, we take user privacy seriously.</p>
    <p>We will never, ever, ever share personal identifiable information to anyone, including but not limited to username, password, email, etc.</p>
    <p>Extremely sensitive information such as password will be hashed (meaning encrypted) before storing into our database. That means, even if hackers can get the access (which is almost unlikely), they will not be able to know your password. For example, if your password is "aaa", after encryption it might be "$2y$10$ZT4AvpsMcteP/hNrZNcbo.GE29x01dGB5m4hov14fuu8HubU4QHxi" (yes, that long). </p>
    <p>This website, along with its database, are stored on Google Cloud. Google has long been taking tons of effort to keep data on the server secure.</p>
    <p>Cookie is not used for now, but will be soon. Only non-sensitive info will be stored. For example, your team event scores might be stored so that you don't have to input again if you want to see how much you improved. And it's only available to yourself.</p>
    <p>Google analytics will be used soon, to help understand user interest and thus improve our website.</p>

  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>隐私政策</h3>
    <p>At hcr2.tips, we take user privacy seriously.</p>
    <p>We will never, ever, ever share personal identifiable information to anyone, including but not limited to username, password, email, etc.</p>
    <p>Extremely sensitive information such as password will be hashed (meaning encrypted) before storing into our database. That means, even if hackers can get the access (which is almost unlikely), they will not be able to know your password. For example, if your password is "aaa", after encryption it might be "$2y$10$ZT4AvpsMcteP/hNrZNcbo.GE29x01dGB5m4hov14fuu8HubU4QHxi" (yes, that long). </p>
    <p>This website, along with its database, are stored on Google Cloud. Google has long been taking tons of effort to keep data on the server secure.</p>
    <p>Cookie is not used for now, but will be soon. Only non-sensitive info will be stored. For example, your team event scores might be stored so that you don't have to input again if you want to see how much you improved. And it's only available to yourself.</p>
    <p>Google analytics will be used soon, to help understand user interest and thus improve our website.</p>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
