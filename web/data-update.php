<?php
  require "header.php";
  if (isset($_SESSION['username'])) $role = $_SESSION['userrole'];
  else $role = 'guest';
  if (!(($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib'))) {
    header("Location: ../index.php?error=noaccess&role=".$_SESSION['userrole']);
    exit;
  }
?>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main">
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <!-- 1. Update Team China rankings -->
    <h3><?php echo ($lang=='zh') ? '更新TC排名' : 'Update Team China rankings'?></h3>
    <div id="team_china_rankings">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup" enctype="multipart/form-data">
        <p>Input leaderboard information in the text area below. One match each row. <br>
          Format: update_date, scope, team_name, ranking, trophies.<br>
          There should not be any null value.<br>
          Example: <br>
          2021-02-13, global, Team China, 64, 14024<br>
        </p>
        <textarea name="team_china_rankings_update" rows="10" cols="70"></textarea>
        <br><label for="uploadfile">Upload screenshot:</label>
        <input type="file" name="uploadfile" value="">

        <button type="submit" class="registerbtn" name="team_china_rankings">Update</button>
      </form>
    </div>

    <!-- 2. Update team china roster -->
    <h3><?php echo ($lang=='zh') ? '更新TC队员名单' : 'Update team china roster'?></h3>
    <div id="tc_roster_update">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup">
        <p>Input players' new data in the text area below. One player each row. <br>
          Format: player_id, in-game nickname, adventure pts, cup pts, garage power, is_current_member, update date(most likely today). <br>
          If any value is null, just put nothing (or blank) in two commas.<br>
          Example: <br>
          1,CN-战₉⁶狼,1218833,10388148,6832,1,2021-08-02<br>
          3,CN-极速飞飞,3301068,4916074,8819,1,2021-08-02<br><br>
        </p>

        <textarea name="player_updates" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="tc_roster_update">Update</button>
      </form>
    </div>

    <!-- 3. Update Team China scores -->
    <h3><?php echo ($lang=='zh') ? '更新TC队赛战绩' : 'Update Team China scores'?></h3>
    <div id="tc_scores_update">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup">
        <p>Input team match information in the text area below. One match each row. <br>
          Format: matching_date, event_name, our_name, opponent_name, match_result, our_score, opponent_score, our_top_player, our_top_score, our_2nd_player, our_2nd_score, our_3rd_player, our_3rd_score, video_id. <br>
          If any value is null, just put nothing (or blank) in two commas.<br>
          Example: <br>
          2021-07-01,You Are The Weakest Link,Team China,🇷🇸SE🥇BG🇧🇬,Loss,1632,2891,小脚儿翘翘,37493,CN-极速飞飞,36799,CN-あQin,36202,BV1db4y1C7RQ<br><br>
        </p>

        <textarea name="scores_updates" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="tc_scores_update">Update</button>
      </form>
    </div>

    <!-- 4. Update friend link -->
    <h3><?php echo ($lang=='zh') ? '更新好友链接' : 'Update friend link'?></h3>
    <h3></h3>
    <div id="friend_link_update">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup">
        <p>Input players' friend link in the text area below. One player per row. <br>
          Format: in_game_nick, team_name, garage_power, friend_link, update_date(most likely today). <br>
          If any value is null, just put nothing (or blank) in two commas.<br>
          Example: <br>
          TC你们先开, Team China II, 7848, https://playhcr.com/invite?id=5mowZo, 2020-12-13 <br>
        </p>

        <textarea name="player_updates" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="friend_link_update">Update</button>
      </form>
    </div>

    <!-- 5. Update various leaderboards -->
    <h3><?php echo ($lang=='zh') ? '更新排行榜截图' : 'Update various leaderboards'?></h3>
    <div id="all_leaderboard_update">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup" enctype="multipart/form-data">
        <p>Input leaderboard information in the text area below. One match each row. <br>
          Format: update_date, mode, scope, player_nickname, ranking, points.<br>
          There should not be any null value.<br>
          Example: <br>
          2021-02-10,adventure,cn,CN-极速飞飞,1,2800000<br>
          2021-02-10,adventure,global,Zorro,1,3000000<br>
          2021-02-10,cups,cn,TC|战狼96,1,7000000<br>
          2021-02-10,cups,global,pandalieYTB,1,47511480<br>
        </p>
        <textarea name="all_leaderboard_update" rows="10" cols="70">2021-01-10,adventure,cn,CN-极速飞飞,1,2800000</textarea>
        <br><label for="uploadfile">Upload screenshot:</label>
        <input type="file" name="uploadfile" value="">

        <button type="submit" class="registerbtn" name="all_leaderboard_update_submit">Update</button>
      </form>
    </div>

    <!-- 6. Update cups leaderboard each map -->
    <h3><?php echo ($lang=='zh') ? '更新杯赛每张图第一' : 'Update cups leaderboard each map'?></h3>
    <div id="cups_leaderboard_update">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup">
        <p>Input cups records below. One record per row.<br>
          Format: <br>
          Hill Climb Cup,No Skidding,cn,1,12.065,Supercar,CN|DR-567,CN|DR-567,Team China,Start Boost,Overcharged Turbo,Afterburner,2021-02-01
        </p>

        <textarea name="cups_leaderboard_update" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="cups_leaderboard_update_submit">Update</button>
      </form>
    </div>

    <!-- 7. Update adventure leaderboard each map -->
    <h3><?php echo ($lang=='zh') ? '更新冒险每张图第一' : 'Update adventure leaderboard each map'?></h3>
    <div id="adventure_leaderboard_update">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup">
        <p>Input adventure records below. One record per row.<br>
          Format: <br>
          Countryside,1,Hill Climber,8118,CN-极速飞飞,CN-极速飞飞,TEAM CHINA🏖️,8118,CN-极速飞飞,CN-极速飞飞,TEAM CHINA🏖️,8118,,,,2021-02-18,Vereshchak 7697m;8hE3Kxa8HcA;BV1bt4y1B7Bk
        </p>
        <textarea name="adventure_leaderboard_update" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="adventure_leaderboard_update_submit">Update</button>
      </form>
    </div>

    <!-- 8. Update team names -->
    <h3><?php echo ($lang=='zh') ? '更新前排队伍队名' : 'update team names'?></h3>
    <div id="team_name_update">
      <form action="includes/team-leaderboard-update.inc.php" method="post" class="signinsignup">
        <p>Update team name below. One record per row.<br>
          Format: old team name, new team name. <br>
          old team name can be empty if a new team is created, or the new team is not affiliated with the old one.<br>
          Example: <br>
          ITALIA,Redd|IT<br>
          ,Reddit™️
        </p>
        <textarea name="team_name_update" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="team_name_update_submit">Update</button>
      </form>
    </div>

    <!-- 9. Update trophies -->
    <h3><?php echo ($lang=='zh') ? '更新前排队伍奖杯数' : 'Update trophies'?></h3>
    <div id="trophy_update">
      <form action="includes/data-update.inc.php" method="post" class="signinsignup">
        <p>Input team trophies below. One record per row.<br>
          Format: team name, number of trophies, update_date date(most likely today). <br>
          No value can be empty<br>
          Example: <br>
          Redd|IT,25475,2020-09-29<br>
          Ünity,24772,2020-09-29
        </p>
        <textarea name="trophy_update" rows="10" cols="70"></textarea>
        <button type="submit" class="registerbtn" name="trophy_update_submit">Update</button>
      </form>
    </div>

  </div>
  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
