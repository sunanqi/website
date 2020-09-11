<?php
  session_start();
  if (isset($_GET['lang'])) $lang = $_GET['lang'];
  else $lang = 'en';
  if ($lang!='zh') $lang='en';

?>
<!DOCTYPE html>

<?php
if ($lang == 'en'):
?>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="description" content="Hill Climb Racing 2 HCR2 Tips, Tricks and Strategies.">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>HCR2 unofficial guidelines</title>
      <link rel="stylesheet" href= "/css/style.css">
    </head>
    <body>
      <header class="topnav" id="headernavbar">
        <a href="/web/index.php">
          <img src="/img/currencies.png" alt="logo">
        </a>
        <a id="homepage" href="/web/index.php">Home</a>
        <div class="dropdown adventure">
          <button class="dropbutton">
            Adventure
          </button>
          <div class="dropdown-content">
            <a href="/web/adventure.php">Overview</a>
            <a href="/web/adventure-tips.php">Tip & Strategies</a>
            <a href="/web/adventure-leaderboard.php">Leaderboard</a>
            <a href="/web/adventure-misc.php">Misc</a>
          </div>
        </div>
        <div class="dropdown cups">
          <button class="dropbutton">
            Cups
          </button>
          <div class="dropdown-content">
            <a href="/web/cups.php">Overview</a>
            <a href="/web/cups-tips.php">Tip & Strategies</a>
            <a href="/web/cups-leaderboard.php">Leaderboard</a>
            <a href="/web/cups-misc.php">Misc</a>
          </div>
        </div>
        <div class="dropdown team">
          <button class="dropbutton">
            Team
          </button>
          <div class="dropdown-content">
            <a href="/web/team.php">Overview</a>
            <a href="/web/team-tips.php">Tip & Strategies</a>
            <a href="/web/team-leaderboard.php">Leaderboard</a>
            <a href="/web/team-misc.php">Misc</a>
          </div>
        </div>
        <div class="dropdown event">
          <button class="dropbutton">
            Event
          </button>
          <div class="dropdown-content">
            <a href="/web/event.php">Overview</a>
            <a href="/web/event-past-events.php">Past events</a>
            <a href="/web/event-misc.php">Misc</a>
          </div>
        </div>
        <div class="dropdown protips">
          <button class="dropbutton">
            Pro Tips
          </button>
          <div class="dropdown-content">
            <a href="/web/upgrade-cost.php">Upgrade cost</a>
            <a href="/web/grinding-coins.php">Grinding coins</a>
            <a href="/web/chests-and-parts.php">Chests & parts</a>
            <a href="/web/spend-money.php">Spend money</a>
            <a href="/web/pro-tips-misc.php">Misc</a>
          </div>
        </div>
        <a href="javascript:void(0);" style="font-size:15.5px;" class="icon" onclick="myFunction()">&#9776;</a>
        <div id="header-rhs">
          <?php
            if (isset($_SESSION['userid'])) {
              echo '<a id="header-logout" href="/web/includes/logout.inc.php">Log Out</a>|<a id="header-account" href="/web/account.php">My account</a>
                ';
            } else {
              echo '<a id="header-signup" href="/web/signup.php">Sign Up</a>|<a id="header-login" href="/web/login.php">Log In</a>
                ';
            }
          ?>
        </div>
      </header>
      <script>
      function myFunction() {
        var x = document.getElementById("headernavbar");
        if (x.className == "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script>
    </body>
  </html>

<?php
elseif ($lang == 'zh'):
?>

  <html lang="zh" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="description" content="Hill Climb Racing 2 HCR2 Tips, Tricks and Strategies.">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>登山赛车2 攻略 技巧 排行榜</title>
      <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
      <header class="topnav" id="headernavbar">
        <a href="/web/index.php?lang=zh">
          <img src="../img/currencies.png" alt="logo">
        </a>
        <a id="homepage" href="/web/index.php?lang=zh">首页</a>
        <div class="dropdown adventure">
          <button class="dropbutton">
            冒险
          </button>
          <div class="dropdown-content">
            <a href="/web/adventure.php?lang=zh">总览</a>
            <a href="/web/adventure-tips.php?lang=zh">攻略与技巧</a>
            <a href="/web/adventure-leaderboard.php?lang=zh">排行榜</a>
            <a href="/web/adventure-misc.php?lang=zh">其他信息</a>
          </div>
        </div>
        <div class="dropdown cups">
          <button class="dropbutton">
            杯赛
          </button>
          <div class="dropdown-content">
            <a href="/web/cups.php?lang=zh">总览</a>
            <a href="/web/cups-tips.php?lang=zh">攻略与技巧</a>
            <a href="/web/cups-leaderboard.php?lang=zh">排行榜</a>
            <a href="/web/cups-misc.php?lang=zh">其他信息</a>
          </div>
        </div>
        <div class="dropdown team">
          <button class="dropbutton">
            团队
          </button>
          <div class="dropdown-content">
            <a href="/web/team.php?lang=zh">总览</a>
            <a href="/web/team-tips.php?lang=zh">攻略与技巧</a>
            <a href="/web/team-leaderboard.php?lang=zh">排行榜</a>
            <a href="/web/team-misc.php?lang=zh">其他信息</a>
          </div>
        </div>
        <div class="dropdown event">
          <button class="dropbutton">
            活动
          </button>
          <div class="dropdown-content">
            <a href="/web/event.php?lang=zh">总览</a>
            <a href="/web/event-past-events.php?lang=zh">过往活动</a>
            <a href="/web/event-misc.php?lang=zh">其他信息</a>
          </div>
        </div>
        <div class="dropdown protips">
          <button class="dropbutton">
            秘籍
          </button>
          <div class="dropdown-content">
            <a href="/web/upgrade-cost.php?lang=zh">升级成本</a>
            <a href="/web/grinding-coins.php?lang=zh">赚金币</a>
            <a href="/web/chests-and-parts.php?lang=zh">宝箱与零件</a>
            <a href="/web/spend-money.php?lang=zh">氪金攻略</a>
            <a href="/web/pro-tips-misc.php?lang=zh">其他信息</a>
          </div>
        </div>
        <a id="teamchina" href="./team-china.php?lang=zh">中国队</a>
        <a href="javascript:void(0);" style="font-size:15.5px;" class="icon" onclick="myFunction()">&#9776;</a>
        <div id="header-rhs">
          <?php
            if (isset($_SESSION['userid'])) {
              echo '<a id="header-logout" href="/web/includes/logout.inc.php?lang=zh">退出</a>|<a id="header-account" href="/web/account.php?lang=zh">我的账号</a>
                ';
            } else {
              echo '<a id="header-signup" href="/web/signup.php?lang=zh">注册</a>|<a id="header-login" href="/web/login.php?lang=zh">登录</a>
                ';
            }
          ?>
        </div>
      </header>
      <script>
      function myFunction() {
        var x = document.getElementById("headernavbar");
        if (x.className == "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script>
    </body>
  </html>


<?php
endif;
?>
