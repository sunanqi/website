<?php
  $title = "Players info";
  $title_zh = "玩家信息";
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
  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">欢迎 <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>所有队员</h3>
    <table id="all_players">
      <caption>所有队员信息</caption>
      <tr>
        <th>#</th>
        <th>ID</th>
        <th>队伍</th>
        <th>GP</th>
        <th>最后更新</th>
        <?php if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
          echo "<th></th>";
        }
          ?>
      </tr>

      <?php
      $json = file_get_contents('../data/players.json');
      $players = json_decode($json,true);
      $player_cnt = 1;

      foreach ($players as $p) {
        echo "<tr><td>".$player_cnt."</td>";
        echo "<td>" . $p["in_game_nick"] . "</td>";
        echo "<td>" . $p['team'] . "</td>";
        echo "<td>" . $p['gp'] . "</td>";
        echo "<td>" . $p['last_update'] . "</td>";
        if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
          $_SESSION['players'] = $players;
          echo "<td><a onclick='update_player_info(".$player_cnt.")'>管理</a></td>";
        }
        echo "</tr>";
        ?>

        <tr id="update_player_info_<?=$player_cnt?>" style="display: table-row;"><td colspan=6 class="update_info">
        <div>
          <form action="includes/data-update.inc.php" method="post">
            <p>如果部分信息不全，留空就行。游戏id必填。</p>
            <input type="radio" id="change" name="modify_type" value="change" checked>
            <label for="html">修改</label>
            <br><input type="radio" id="add" name="modify_type" value="add" onclick="form_clear(<?=$player_cnt?>)">
            <label for="css">添加(新添加队员在此队员后)</label>
            <br><input type="radio" id="delete" name="modify_type" value="delete">
            <label for="javascript">删除</label><br>

            <input type="hidden" name="player_cnt" value="<?=$player_cnt?>">

            <br><label for="in_game_nick">In-game Nickname:</label>
            <input type="text" name="in_game_nick" id="in_game_nick_<?=$player_cnt?>" value="<?=$p["in_game_nick"]?>">

            <br><label for="used_name">Previously used name:</label>
            <input type="text" name="used_name" id="used_name<?=$player_cnt?>" value="<?=$p["used_name"]?>">

            <br><label for="team">Team:</label>
            <input type="text" name="team" id="team_<?=$player_cnt?>" value="<?=$p['team']?>">

            <br><label for="gp">Garage Power:</label>
            <input type="text" name="gp" id="gp_<?=$player_cnt?>" value="<?=$p['gp']?>">

            <br><label for="cup_pt">Cup points:</label>
            <input type="text" name="cup_pt" id="cup_pt_<?=$player_cnt?>" value="<?=$p['cup_pt']?>">

            <br><label for="adv_pt">Adventure points:</label>
            <input type="text" name="adv_pt" id="adv_pt_<?=$player_cnt?>" value="<?=$p['adv_pt']?>">

            <br><label for="best_season">Best season:</label>
            <input type="text" name="best_season" id="best_season_<?=$player_cnt?>" value="<?=$p['best_season']?>">

            <br><label for="link">好友链接后6位字母数字：</label>
            <input type="text" name="link" id="link_<?=$player_cnt?>" value="<?=$p['link']?>">

            <br><label for="last_update">更新日期：</label>
            <input type="text" name="last_update" id="last_update" value= <?=date('Y-m-d');?>>

            <button type="submit" class="registerbtn" name="update_player_info">
              Update</button>
          </form>
        </div>

        <?php

        $player_cnt += 1;
      }
      ?>
    </table>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>

<script type="text/javascript">
  function update_player_info(player_cnt) {
    var x = document.getElementById("update_player_info_" + player_cnt.toString());
    if (x.style.display === "none") {
      x.style.display = "table-row";
    } else {
      x.style.display = "none";
    }
  }
  function form_clear(player_cnt) {
    document.getElementById("in_game_nick_" + player_cnt.toString()).value = "";
    document.getElementById("team_" + player_cnt.toString()).value = "";
    document.getElementById("gp_" + player_cnt.toString()).value = "";
    document.getElementById("cup_pt_" + player_cnt.toString()).value = "";
    document.getElementById("adv_pt_" + player_cnt.toString()).value = "";
    document.getElementById("best_season_" + player_cnt.toString()).value = "";
    document.getElementById("link_" + player_cnt.toString()).value = "";
  }
</script>
