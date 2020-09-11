<?php
  require "header.php";
?>
<style>
  #teamchina {
    background-color: #4AAA31; /* 74,170,49 */
  }

  #team_china_score_table {
    font-size: 16px;
  }

  #team_china_score_table td {
    font-size: 14px;
  }

  #team_china_score_table td.no-wrap-td {
    white-space: nowrap;
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main" <?php if ($lang!='en') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Team China</h3>
    <p>...</p>
  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>Team China中国队及其梯队</h3>
    <p>Team China系列队伍集合了中国绝大部分高手玩家，目前一共有5支活跃队伍
      <ul>
        <li>Team China（一队）</li>
        <p>目前世界排名38（截至2020-09-11）。满足以下两个条件中一个可以申请入队：1) 大部分满分4万分的队赛可以达到2.5万分以上，为队赛做贡献；2) 或者每周可以跑400千米，为队箱做贡献。</p>
        <li>Team China II（二队）</li>
        <p>目前世界排名185（截至2020-09-11）。入队标准：每周至少跑100km，积极参加每场队赛。</p>
        <li>三支后备队</li>
        <p>分别是“极速卖萌”，“极速上航”，“Age of China”。车子等级不够，或者时常没空花时间练习打比赛的玩家，在这三个队。入队标准：每周至少跑50km。</p>
      </ul>
    欢迎加入我们。加我们的QQ群：255579428。（微信：rousong_2013；Discord: PR-Rou#3033）。群管理员会帮助你快速上手！
    </p>

    <h3>Team China历史战绩</h3>
    <p>
      <?php include "team-china-scores.php" ?>
    </p>

    <h3>Team China现役成员</h3>
    <p>
      <?php include "team-china-roster.php" ?>
    </p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
