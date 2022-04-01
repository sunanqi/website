<?php
  $title = "Teams Leaderboard - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "团队排名 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
?>
<style>
  .team {
    background-color: #4AAA31; /* 74,170,49 */
  }
</style>

<div class="flex-container">
  <?php include "left-sidebar.html"; ?>
  <div class="main">

    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3><?=($lang=='zh')?"队伍排名":"Teams Leaderboard";?></h3>
    editing...
  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>

<script type="text/javascript">
  function toggle_trophy_update_form() {
    var trophy = document.getElementById("trophy_update");
    var team_name = document.getElementById("team_name_update");
    if (trophy.style.display === "none") {
      trophy.style.display = "block";
      team_name.style.display = "none";
    } else {
      trophy.style.display = "none";
    }
  }
  function toggle_team_name_update_form() {
    var trophy = document.getElementById("trophy_update");
    var team_name = document.getElementById("team_name_update");
    if (team_name.style.display === "none") {
      team_name.style.display = "block";
      trophy.style.display = "none";
    } else {
      team_name.style.display = "none";
    }
  }
  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("team_leaderboard");
    switching = true;
    //Set the sorting direction to descending:
    dir = "desc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
          if (Number(x.innerHTML) > Number(y.innerHTML)) {
            //if so, mark as a switch and break the loop:
            shouldSwitch= true;
            break;
          }
        } else if (dir == "desc") {
          if (Number(x.innerHTML) < Number(y.innerHTML)) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount ++;
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "desc") {
          dir = "asc";
          switching = true;
        }
      }
    }
    for (i = 1; i < rows.length; i++) {
      x = rows[i].getElementsByTagName("TD")[0];
      x.innerHTML = i;
    }
  }
</script>

<?php
function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}
 ?>
