<?php
  $title = "Contact - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "联系 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>Contact</h3>
    <p>Contact me at PR-Rou#3033 on Discord.</p>
    <p> <img src="../img/pr-rou-discord.jpg" alt="">  </p>

  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>联系方式</h3>
    <p>如果要加入我们的梯队，加我们的<span class="in-line-blue-bold">登2国际版QQ群：255579428</span>，并联系管理员入队。</p>
    <p>如果要玩国服，加我们的<span class="in-line-blue-bold">国服版QQ群：634441170</span>。</p>
    <p>如果要加我们的微信群，先加微信号rousong_2013。</p>

    <p>如果对网站有任何建议，联系作者 PR-Rou🍎(肉串爸爸)。联系方式：1) 加入上述国际服QQ群255579428，找管理员肉松爸爸；2) 微信 rousong_2013；3) Discord上联系 PR-Rou#3033。</p>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
