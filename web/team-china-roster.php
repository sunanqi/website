<?php

require "includes/dbh.inc.php";
if (isset($_SESSION['username'])) $role = $_SESSION['userrole'];
else $role = 'guest';

$sql = "SELECT
          in_game_nick, adv_points, cup_points, garage_power, update_date
        FROM (
          SELECT
            player_id, MAX(update_date) as last_update
          FROM team_china_roster
          WHERE is_active = True
          GROUP BY player_id) a
        JOIN
        team_china_roster b
        ON a.player_id = b.player_id AND
          a.last_update = b.update_date
        ORDER BY cup_points DESC";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: ../login.php?lang=".$lang."&error=sql_error");
  exit;
}

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$last_update = '2020-01-01';

echo "<table>
        <tr>
          <th>队员</th>
          <th>冒险分数</th>
          <th>杯赛分数</th>
          <th>车库值</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {

  echo "<tr><td>" . $row['in_game_nick'] . "</td><td>" .
        $row['adv_points'] . "</td><td>" .
        $row['cup_points'] . "</td><td>" .
        $row['garage_power'] . "</td></tr>";
  $last_update = max($last_update, $row['update_date']);
  }

echo "</table>";
echo "last update: ".$last_update;

if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
  echo "
    <button type='button' onclick='toggle_gp_form()'>更新</button>
  ";
}
?>

<div id="gp_update" style="display: none;">
  <form action="includes/team-china-roster-update.inc.php" method="post" class="signinsignup">
    <p>Input players' new data in the text area below. One player each row. <br>
      Format: player_id, in-game nickname, adventure pts, cup pts, garage power, is_current_member, update date(most likely today). <br>
      If any value is null, just put nothing (or blank) in two commas.<br>
      Example: <br>
      9,战狼96🇨🇳,693501,4605180,5799,1,2020-09-02<br>
      1,CN-极速飞飞,2373743,3757759,7255,1,2020-09-02<br><br>
    </p>

    <textarea name="player_updates" rows="10" cols="70"></textarea>
    <button type="submit" class="registerbtn" name="tc_roster_update">Update</button>
</div>

<script type="text/javascript">
  function toggle_gp_form() {
    var x = document.getElementById("gp_update");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>
