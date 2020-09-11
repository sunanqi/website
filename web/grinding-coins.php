<?php
  require "header.php";
?>
<style>
  .protips {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Why coins are important</h3>
    <p>
      ...
    </p>

    <h3>Earn coins effectively</h3>
    <p>
      ...
    </p>

    <h3>Earning speed</h3>
    <p>
      ...
    </p>
  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>为什么金币很重要</h3>
    <p>
      ...
    </p>

    <h3>高效赚金币</h3>
    <p>
      ...
    </p>

    <h3>赚金币的速度</h3>
    <p>
      ...
    </p>
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
