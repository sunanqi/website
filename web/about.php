<?php
  $title = "About - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "关于 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>

    <p class="welcome">Welcome, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>About</h3>
    <p>This website is created by PR-Rou (肉串爸爸) to provide tips, strategies as well as useful and prompt info for all enthusiastic HCR2 players. I sincerely welcome:
      <ul>
        <li>
          Data and content contributor. I plan to update <a href="/web/cups-leaderboard-all-maps.php">Cups WR</a> and <a href="/web/adventure-leaderboard-all-maps.php">adventure WR</a> at least once a month, and <a href="/web/team-leaderboard.php">teams leaderboard</a> every day or every other day. If you can help input the data, let me know. If you think you can help on any other content on this website, also <a href="/web/contact.php">let me know</a>.
        </li>
        <li>
          Web dev contributor. Currently I am using php+mysql for the backend and no framework for frontend. If you are willing to help, <a href="/web/contact.php">let me know</a>. I regard this as a process of learning from others, besides building website.
        </li>
        <li>
          Any form of help. Maybe you find some bugs on my website, or you have some suggestions, or even you just like this website and want to say kudos, welcome to <a href="/web/contact.php">contact me</a>.
        </li>
      </ul>
    </p>

    <h3>Thanks</h3>
    <p>I've got a lot of help from many HCR2 enthusiastic players. Thanks to Vereshchak for encouraging and advertising my site in <a href="https://youtu.be/53KvGFGBwXM?t=22" target="_blank">his video</a>. Thanks to BadAtHcr and ViX for proofreading this website. And Thanks to io&oi, Zorro, Vokope, Deflorator, NekoRei+, Diesel, Bill and many more for letting me share their top score videos.</p>

  </div>
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>

    <p class="welcome">欢迎, <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''?>!</p>

    <h3>关于此网站</h3>
    <p>此网站由 PR-Rou (肉串爸爸) 创建，旨在为登山赛车2的玩家提供攻略，技巧，以及各种及时的信息。如有任何反馈，欢迎联系我。QQ登2群：255579428。</p>

    <p>This website is created by PR-Rou (肉串爸爸) to provide tips, strategies as well as useful and prompt info for all enthusiastic HCR2 players. I sincerely welcome:
      <ul>
        <li>
          Data and content contributor. I plan to update <a href="/web/cups-leaderboard-all-maps.php">Cups WR</a> and <a href="/web/adventure-leaderboard-all-maps.php">adventure WR</a> at least once a month, and <a href="/web/team-leaderboard.php">teams leaderboard</a> every day or every other day. If you can help input the data, let me know. If you think you can help on any other content on this website, also <a href="/web/contact.php">let me know</a>.
        </li>
        <li>
          Web dev contributor. Currently I am using php+mysql for the backend and no framework for frontend. If you are willing to help, <a href="/web/contact.php">let me know</a>. I regard this as a process of learning from others, besides building website.
        </li>
        <li>
          Any form of help. Maybe you find some bugs on my website, or you have some suggestions, or even you just like this website and want to say kudos, welcome to <a href="/web/contact.php">contact me</a>.
        </li>
      </ul>
    </p>

    <h3>感谢</h3>
    <p>在做这个网站的过程中我得到了很多帮助。感谢CN-买鱼大叔，CN-Hiccup，CN-战狼96，CN🌜黄☄️緣🌛，等人的长期帮助。感谢国外大佬 Vereshchak 在他的视频(<a href="https://youtu.be/53KvGFGBwXM?t=22" target="_blank">Youtube</a>, <a href="https://www.bilibili.com/video/BV1PX4y1T7Bm?t=22" target="_blank">Bilibili</a>) 里帮我宣传我的网站。感谢 BadAtHcr 和 ViX 帮我校对网页内容和数据，以及 io&oi, Zorro, Vokope, Deflorator, NekoRei+, Diesel, Bill 等人同意我分享他们的高分视频。</p>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
