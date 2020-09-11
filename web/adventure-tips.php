<?php
  require "header.php";
?>
<style>
  .adventure {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<?php
  if (!isset($_GET['map'])) $map = "none";
  else $map = $_GET['map'];
?>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main">
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <?php
      switch ($map) {
        case "countryside":
          require "adventure/adventure-countryside.php";
          break;
        case "forest":
          require "adventure/adventure-forest.php";
          break;
        case "city":
          require "adventure/adventure-city.php";
          break;
        case "mountain":
          require "adventure/adventure-mountain.php";
          break;
        case "rustbucket-reef":
          require "adventure/adventure-rustbucket-reef.php";
          break;
        case "winter":
          require "adventure/adventure-winter.php";
          break;
        case "mines":
          require "adventure/adventure-mines.php";
          break;
        case "desert-valley":
          require "adventure/adventure-desert-valley.php";
          break;
        case "beach":
          require "adventure/adventure-beach.php";
          break;
        case "backwater-bog":
          require "adventure/adventure-backwater-bog.php";
          break;
        case "racer-glacier":
          require "adventure/adventure-racer-glacier.php";
          break;
        case "patchwork-plant":
          require "adventure/adventure-patchwork-plant.php";
          break;
        case "sky-rock-outpost":
          require "adventure/adventure-sky-rock-outpost.php";
          break;
        case "forest-trials":
          require "adventure/adventure-forest-trials.php";
          break;
        case "intense-city":
          require "adventure/adventure-intense-city.php";
          break;
        case "raging-winter":
          require "adventure/adventure-raging-winter.php";
          break;
        default:
          $map = "none";
      }
    ?>

  <?php
    if ($lang=='en') {
      if ($map == "none") {
    ?>
    <h3>Overall tips:</h3>
    <p>TODO: add some overall tips</p>

  <?php }; ?>

    <h3>Tips for each map</h3>
    <p>
      <ul>
        <li> <a href="adventure-tips.php"> Overall tips </a> </li>
        <li> <a href="adventure-tips.php?map=countryside"> Countryside </a> </li>
        <li> <a href="adventure-tips.php?map=forest"> Forest </a> </li>
        <li> <a href="adventure-tips.php?map=city"> City </a> </li>
        <li> <a href="adventure-tips.php?map=mountain"> Mountain </a> </li>
        <li> <a href="adventure-tips.php?map=rustbucket-reef"> Rustbucket Reef </a> </li>
        <li> <a href="adventure-tips.php?map=winter"> Winter </a> </li>
        <li> <a href="adventure-tips.php?map=mines"> Mines </a> </li>
        <li> <a href="adventure-tips.php?map=desert-valley"> Desert Valley </a> </li>
        <li> <a href="adventure-tips.php?map=beach"> Beach </a> </li>
        <li> <a href="adventure-tips.php?map=backwater-bog"> Backwater Bog </a> </li>
        <li> <a href="adventure-tips.php?map=racer-glacier"> Racer Glacier </a> </li>
        <li> <a href="adventure-tips.php?map=patchwork-plant"> Patchwork Plant </a> </li>
        <li> <a href="adventure-tips.php?map=sky-rock-outpost"> Sky Rock Outpost </a> </li>
        <li> <a href="adventure-tips.php?map=forest-trials"> Forest Trials </a> </li>
        <li> <a href="adventure-tips.php?map=intense-city"> Intense City </a> </li>
        <li> <a href="adventure-tips.php?map=raging-winter"> Raging Winter </a> </li>
      </ul>
    </p>

  <?php } elseif ($lang=='zh') {
      if ($map == "none") {
    ?>
    <h3>攻略总览</h3>
    <p>TODO: add some overall tips</p>

  <?php }; ?>

    <h3>详细攻略</h3>
    <p>
      <ul>
        <li> <a href="adventure-tips.php?lang=zh"> 攻略总览 </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=countryside">  田园 (Countryside) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=forest"> 森林 (Forest) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=city"> 城市 (City) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=mountain"> 高山 (Mountain) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=rustbucket-reef"> 锈桶礁石 (Rustbucket Reef) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=winter"> 冬季 (Winter) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=mines"> 矿山 (Mines) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=desert-valley"> 荒漠 (Desert Valley) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=beach"> 沙滩 (Beach) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=backwater-bog"> 泥潭 (Backwater Bog) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=racer-glacier"> 车手冰川 (Racer Glacier) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=patchwork-plant"> 拼凑工厂 (Patchwork Plant) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=sky-rock-outpost"> 陨石哨站 (Sky Rock Outpost) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=forest-trials"> 森林审判 (Forest Trials) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=intense-city"> 激情城镇 (Intense City) </a> </li>
        <li> <a href="adventure-tips.php?lang=zh&map=raging-winter"> 寒冷冬日 (Raging Winter) </a> </li>
      </ul>
    </p>
  <?php }; ?>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
