<?php

require "includes/dbh.inc.php";
if (isset($_SESSION['username'])) $role = $_SESSION['userrole'];
else $role = 'guest';

$sql = "SELECT
          matching_date, event_name, round, opponent_name, opponent_rank, match_result, our_score, opponent_score, our_top_player, our_top_score, our_2nd_player, our_2nd_score, our_3rd_player, our_3rd_score
        FROM team_china_scores
        WHERE our_name = 'Team China'
        ORDER BY matching_date DESC";

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  header("Location: ../login.php?lang=".$lang."&error=sql_error");
  exit;
}

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

echo "<table id='team_china_score_table'>
        <caption>Team China历史比分</caption>
        <tr>
          <th>日期</th>
          <th>活动(场次)</th>
          <th>对手(排名)</th>
          <th>赛果</th>
          <th>比分</th>
          <th>我队前三</th>
        </tr>";

while ($row = mysqli_fetch_assoc($result)) {

if ($lang='zh') {
  switch ($row['match_result']) {
    case "Win":
      $row['match_result'] = "胜";
      break;
    case "Loss":
      $row['match_result'] = "负";
      break;
    case "In progress":
      $row['match_result'] = "进行中";
      break;
    default:
  }
}

  echo "<tr><td class='no-wrap-td'>" . $row['matching_date'] . "</td><td>" .
        $row['event_name']."(".$row['round'].")" . "</td><td>" .
        $row['opponent_name']."(".$row['opponent_rank'].")" . "</td><td>" .
        $row['match_result']. "</td><td class='no-wrap-td'>" .
        $row['our_score']." : ".$row['opponent_score'] . "</td><td>" .
        $row['our_top_player']."(".$row['our_top_score']."), ".
        $row['our_2nd_player']."(".$row['our_2nd_score']."), ".
        $row['our_3rd_player']."(".$row['our_3rd_score'].")"."</td></tr>";
  }

echo "</table>";

if (($role == 'superadmin') || ($role == 'admin') || ($role == 'data_contrib')) {
  echo "
    <button type='button' onclick='toggle_scores_form()'>更新</button>
  ";
}
?>

<div id="scores_update" style="display: none;">
  <form action="includes/team-china-scores-update.inc.php" method="post" class="signinsignup">
    <p>Input team match information in the text area below. One match each row. <br>
      Format: matching_date, event_name, round, our_name, our_trophy, our_rank, opponent_name, opponent_trophy, opponent_rank, match_result, our_score, opponent_score, our_trophy_change, our_top_player, our_top_score, our_2nd_player, our_2nd_score, our_3rd_player, our_3rd_score. <br>
      If any value is null, just put nothing (or blank) in two commas.<br>
      Example: <br>
      2020-09-02, Breathe in Breathe out, 3, Team China, 13707, , French Climber, 11164, , Win, 2995, 1523, 138, CN|PR-five, 45394, CN⛄锅盖, 44691, CN-谷粒, 43270<br><br>
    </p>

    <textarea name="scores_updates" rows="10" cols="70"></textarea>
    <button type="submit" class="registerbtn" name="tc_scores_update">Update</button>
</div>

<script type="text/javascript">
  function toggle_scores_form() {
    var x = document.getElementById("scores_update");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>
