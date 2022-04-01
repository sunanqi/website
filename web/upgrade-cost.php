<?php
  $title = "Upgrade cost - Unofficial Hill Climb Racing 2 Wiki";
  $title_zh = "升级成本 - 登山赛车2 攻略 技巧 排行榜";
  require "header.php";
  require "hcr2-data.php";
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

    <h3>Upgrade cost overview</h3>
    <p>
      Vehicles and parts level are crucial to get a good score, no matter in adventure, cups, or team events. Coins are needed to upgrade vehicles while both coins and parts are need to upgrade tuning parts. Upgrading them can be very expensive. In a nutshell, you need around 48 million coins to buy and max all vehicles, and another 168 million coins, along with tons of parts to max all tuning parts. In total you need 216 million coins to max your garage. While it's extremely difficult for players to accrue that many coins in even a couple of years, fortunately, not all parts are important. Some parts are almost never used in adventure, cups, or team events. It is estimated that around 95M coins are need to max all vehicle and useful parts, and around 70M coins are needed if you upgrade to close to max. Still, they are a lot of coins.
    </p>

    <a id="upgrade_cost_vehicles"></a>
    <h3>Upgrade cost of vehicles</h3>
    <table>
      <caption>Cost to Upgrade to Max Level (Vehicles)</caption>
      <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Cost to max <br> (w/o ads)</th>
        <th>Free until level</th>
        <th>Cost to max <br> (w/ ads)</th>
      </tr>
      <?php
      $total_cost = 0;
      $total_cost_ads = 0;
      $v_cost = 0;
      foreach ($vehicles as $v) {
        $cost = array_sum($v['upgrade_cost'])*4;
        $cost_ads = array_sum($v['upgrade_cost_ads'])*4;
        $free_until = 20-array_search(0, array_reverse($v['upgrade_cost_ads']));
        $total_cost += $cost;
        $total_cost_ads += $cost_ads;
        $v_cost += $v['price'];
        echo "<tr><td>".$v['en']."</td>";
        echo "<td><img class='in_table' src='../".$v["img"]."'></td>";
        echo "<td>".$v['price']."</td>";
        echo "<td>".number_format($cost)."</td>";
        echo "<td>".$free_until."</td>";
        echo "<td>".number_format($cost_ads)."</td></tr>";
      }
      echo "<tr><td>Total</td>";
      echo "<td></td><td>".number_format($v_cost)."</td>";
      echo "<td>".number_format($total_cost)."</td>";
      echo "<td></td><td>".number_format($total_cost_ads)."</td></tr>";
      ?>
    </table>

    <a id="upgrade_cost_parts"></a>
    <h3>Upgrade cost of tuning parts</h3>
    <p>Upgrading tuning parts requires both parts and coins. For parts, players can get them from various chests, some weekly event rewards, Cups seasonal bonus, etc. Parts can also be purchased with scraps (See next section). Throughout most time of this game, you will find you are in more lack of coins than parts, except for certain legendary parts. In another word, coins are the bottleneck of tuning parts level. The coins and parts required to upgrade tuning parts only depend on the rarity of the part, irrelevant of vehicle. By watching ads, certain levels can be upgraded without spending coins, but parts are still needed. The following table shows both coins and parts required to max a part.
      <table>
        <caption>Cost to Upgrade to Max Level (Parts)</caption>
        <tr>
          <th>Rarity level</th>
          <th>Parts</th>
          <th>coin cost to max <br> (w/o ads)</th>
          <th>free until level</th>
          <th>coin cost to max <br> (w/ ads)</th>
          <th>parts cost to max</th>
        </tr>
        <tr>
          <td>Common</td>
          <td>
            <img class="in_table_small" src="../img/parts/01-magnet.png" alt="magnet">
            <img class="in_table_small" src="../img/parts/02-heavyweight.png" alt="heavyweight">
            <img class="in_table_small" src="../img/parts/03-wings.png" alt="wings">
            <img class="in_table_small" src="../img/parts/04-rollcage.png" alt="rollcage">
            <img class="in_table_small" src="../img/parts/05-air-control.png" alt="air-control">
            <img class="in_table_small" src="../img/parts/06-winter-tires.png" alt="winter-tires">
          </td>
          <td>692,600</td>
          <td>5</td>
          <td>669,000</td>
          <td>2018</td>
        </tr>
        <tr>
          <td>Rare</td>
          <td>
            <img class="in_table_small" src="../img/parts/07-start-boost.png" alt="start-boost">
            <img class="in_table_small" src="../img/parts/08-wheelie-boost.png" alt="wheelie-boost">
            <img class="in_table_small" src="../img/parts/09-fume-boost.png" alt="fume-boost">
            <img class="in_table_small" src="../img/parts/10-flip-boost.png" alt="flip-boost">
            <img class="in_table_small" src="../img/parts/11-jump-shocks.png" alt="jump-shocks">
          </td>
          <td>574,900</td>
          <td>3</td>
          <td>564,000</td>
          <td>368</td>
        </tr>
        <tr>
          <td>Epic</td>
          <td>
            <img class="in_table_small" src="../img/parts/12-landing-boost.png" alt="landing-boost">
            <img class="in_table_small" src="../img/parts/13-overcharged-turbo.png" alt="overcharged-turbo">
            <img class="in_table_small" src="../img/parts/14-afterburner.png" alt="afterburner">
          </td>
          <td>520,000</td>
          <td>none</td>
          <td>520,000</td>
          <td>134</td>
        </tr>
        <tr>
          <td>Legendary</td>
          <td>
            <img class="in_table_small" src="../img/parts/15-fuel-boost.png" alt="fuel-boost">
            <img class="in_table_small" src="../img/parts/16-thrusters.png" alt="thrusters">
            <img class="in_table_small" src="../img/parts/17-coin-boost.png" alt="coin-boost">
          </td>
          <td>199,000</td>
          <td>none</td>
          <td>199,000</td>
          <td>30</td>
        </tr>
      </table>
      <br>
      <table>
        <caption>Cost of Each Level (after watching ads)</caption>
        <tr>
          <th>Upgrade</th>
          <th>Common <br> Coin, Part </th>
          <th>Rare <br> Coin, Part </th>
          <th>Epic <br> Coin, Part </th>
          <th>Legendary <br> Coin, Part </th>
        </tr>
        <tr>
          <td>1 -> 2</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; parts: 3</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; parts: 3</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 13000; parts: 3</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 24000; parts: 3</td>
        </tr>
        <tr>
          <td>2 -> 3</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; parts: 10</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; parts: 10</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 23000; parts: 10</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 55000; parts: 10</td>
        </tr>
        <tr>
          <td>3 -> 4</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; parts: 17</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 11000; parts: 17</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 41000; parts: 17</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 120000; parts: 17</td>
        </tr>
        <tr>
          <td>4 -> 5</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; parts: 25</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 19000; parts: 25</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 73000; parts: 25</td>
          <td> - </td>
        </tr>
        <tr>
          <td>5 -> 6</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 13000; parts: 34</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 31000; parts: 34</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 130000; parts: 34</td>
          <td> - </td>
        </tr>
        <tr>
          <td>6 -> 7</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 16000; parts: 45</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 50000; parts: 45</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 240000; parts: 45</td>
          <td> - </td>
        </tr>
        <tr>
          <td>7 -> 8</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 21000; parts: 58</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 83000; parts: 58</td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>8 -> 9</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 27000; parts: 76</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 140000; parts: 76</td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>9 -> 10</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 35000; parts: 100</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 230000; parts: 100</td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>10 -> 11</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 47000; parts: 140</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>11 -> 12</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 66000; parts: 200</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>12 -> 13</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 94000; parts: 280</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>13 -> 14</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 140000; parts: 410</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>14 -> 15</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 210000; parts: 620</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>1 -> max</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 669,000; parts: 2018</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 564,000; parts: 368</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 520,000; parts: 134</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 199,000; parts: 30</td>
        </tr>

      </table>
    </p>

    <a id="scraps"></a>
    <h3>Scraps</h3>
    <p>While you can use parts to upgrade tuning parts (along with coins), you can also put them into "Scrapper" to get scraps<img class="inline" src="../img/scrap.png" alt="">. Scraps can be used to buy parts you are in need. So you can scrap unuseful or excessive parts, and use scraps to buy useful parts. Given the bad conversion ratio (see table below), a general guidline is that do not scrap a part until it's excessive, even if it seems not useful for now. </p>
    <table>
      <caption>Parts <-> Scraps Conversion Ratio</caption>
      <tr>
        <th></th>
        <th>Common</th>
        <th>Rare</th>
        <th>Epic</th>
        <th>Legendary</th>
      </tr>
      <tr>
        <td>1 Part -> ? Scraps</td>
        <td>1</td>
        <td>5</td>
        <td>40</td>
        <td>400</td>
      </tr>
      <tr>
        <td>? Scraps -> 1 part</td>
        <td>10</td>
        <td>50</td>
        <td>400</td>
        <td>4000</td>
      </tr>
    </table>
    <p>
      As you can see, if you scrap a part and later want to buy back, you lose 90% of them. So make sure to only scrap excessive parts because you never know if a certain part could be useful in the future.
    </p>

  </div>

  <div class="main" <?php if ($lang!='zh') echo "style='display:none;'";?>>
    <p class="welcome">Welcome <?php echo isset($_SESSION['username']) ? ', '.$_SESSION['username'] : ''?>!</p>

    <h3>升级成本总览</h3>
    <p>
      无论在冒险，杯赛或队赛中，车辆和配件的等级对于获得高分都是至关重要的。升级赛车只需要金币，而升级配件，不仅需要金币，还需要足够的零件。目前游戏中共有22辆车，17种配件，升满整个车库需要
      2亿1640万5400金币。其中108 6000用来买车，4708 7000用来升级车身，1 6823 2400用来升级配件。尽管玩家很难在几个月内累积到那么多金币，但幸运的是，并非所有配件都是重要的。有些配件几乎从未在冒险，杯赛或团体比赛中使用。据估计，升满所有赛车，以及常用的配件，大约需要9500万金币。如果只升级到满级-1，则需要约7000万枚金币。
    </p>
    <ul>
      <li><a href="#upgrade_cost_summary_zh">车库升级成本总览</a></li>
      <li><a href="#upgrade_cost_part_zh">配件每级成本</a></li>
      <li><a href="#part_scrap_exchange_zh">配件和碎片转换比例</a></li>
    </ul>

    <a id="upgrade_cost_summary_zh"></a>
    <h3>车库升级成本总览</h3>
    <table>
      <caption>升到满级的成本</caption>
      <tr>
        <th>赛车</th>
        <th>买车价格</th>
        <th>车身升满(免费到?级)</th>
        <th>配件升满</th>
        <th>单车升满共计</th>
      </tr>
      <?php
      $json = file_get_contents('../data/vehicles.json');
      $vehicles = json_decode($json,true);
      $vehicle_purchase_cost = 0;
      $vehicle_upgrade_cost = 0;
      $part_upgrade_cost = 0;

      foreach ($vehicles as $_ => $v) {
        echo "<tr><td><img class='in_table' src='../".$v["img"]."'>".$v['zh']."(".$v['en'].")</td>";
        echo "<td>".number_format($v['price'])."</td>";
        $vehicle_purchase_cost += $v['price'];
        $subtotal = array_sum($v["upgrade_cost"])*4;
        $vehicle_upgrade_cost += $subtotal;
        echo "<td>".number_format($subtotal)." (".$v["ads_free_until"].")</td>";
        echo "<td>".number_format($v["parts_cost"])."</td>";
        $part_upgrade_cost += $v["parts_cost"];
        $subtotal += $v['price'] + $v["parts_cost"];
        echo "<td>".number_format($subtotal)."</td></tr>";
      }
      echo "<tr class='table_summary'><td>总计</td>";
      echo "<td>".number_format($vehicle_purchase_cost)."</td>";
      echo "<td>".number_format($vehicle_upgrade_cost)."</td>";
      echo "<td>".number_format($part_upgrade_cost)."</td>";
      $subtotal = $vehicle_purchase_cost + $vehicle_upgrade_cost + $part_upgrade_cost;
      echo "<td>".number_format($subtotal)."</td></tr>";
    ?>
    </table>

    <a id="upgrade_cost_part_zh"></a>
    <h3>配件升级成本</h3>
    <p>升级配件，不仅需要金币，还需要足够的零件。关于零件的获取途径，详见<a href="/web/grinding-coins.php?lang=zh#grinding_coins_parts_source">新手上路页面的“那么从哪里获得金币和零件呢？”</a>。如果你没有足够的零件用来升级，你也可以使用碎片（又叫齿轮）来购买。总体来说，不建议用碎片来购买普通，稀有和史诗配件。游戏中最缺的是传奇配件，建议将有限的碎片用来买传奇配件。下表显示了升满配件所需要的金币和零件数量。</p>
    <?php
    $json = file_get_contents('../data/parts.json');
    $parts = json_decode($json,true);
    $json = file_get_contents('../data/parts_rarity.json');
    $parts_rarity = json_decode($json,true);

    ?>
      <table>
        <caption>配件升级成本</caption>
        <tr>
          <th>级别</th>
          <th>普通 Common<br>金币 | 配件</th>
          <th>稀有 Rare<br>金币 | 配件</th>
          <th>史诗 Epic<br>金币 | 配件</th>
          <th>传奇 Legendary<br>金币 | 配件</th>
        </tr>
        <?php
        $cost = array("coin" => [0,0,0,0], "part" => [0,0,0,0]);
        for ($i = 0; $i <= 13; $i++) {
          echo "<tr><td>".($i+1)." -> ".($i+2)."</td>";
          echo "<td>".$parts_rarity["Common"]["coin_cost"][$i]." | ".$parts_rarity["Common"]["part_cost"][$i]."</td>";
          $cost["coin"][0] += $parts_rarity["Common"]["coin_cost"][$i];
          $cost["part"][0] += $parts_rarity["Common"]["part_cost"][$i];
          if ($i<=8) {
            echo "<td>".$parts_rarity["Rare"]["coin_cost"][$i]." | ".$parts_rarity["Rare"]["part_cost"][$i]."</td>";
            $cost["coin"][1] += $parts_rarity["Rare"]["coin_cost"][$i];
            $cost["part"][1] += $parts_rarity["Rare"]["part_cost"][$i];
          } else {
            echo "<td></td>";
          }
          if ($i<=5) {
            echo "<td>".$parts_rarity["Epic"]["coin_cost"][$i]." | ".$parts_rarity["Epic"]["part_cost"][$i]."</td>";
            $cost["coin"][2] += $parts_rarity["Epic"]["coin_cost"][$i];
            $cost["part"][2] += $parts_rarity["Epic"]["part_cost"][$i];
          } else {
            echo "<td></td>";
          }
          if ($i<=2) {
            echo "<td>".$parts_rarity["Legendary"]["coin_cost"][$i]." | ".$parts_rarity["Legendary"]["part_cost"][$i]."</td>";
            $cost["coin"][3] += $parts_rarity["Legendary"]["coin_cost"][$i];
            $cost["part"][3] += $parts_rarity["Legendary"]["part_cost"][$i];
          } else {
            echo "<td></td>";
          }
          echo "</tr>";
        }
        echo "<tr><td>1 -> max</td>";
        echo "<td>".$cost["coin"][0]." | ".$cost["part"][0]."</td>";
        echo "<td>".$cost["coin"][1]." | ".$cost["part"][1]."</td>";
        echo "<td>".$cost["coin"][2]." | ".$cost["part"][2]."</td>";
        echo "<td>".$cost["coin"][3]." | ".$cost["part"][3]."</td></tr>";
        ?>

      </table>

    <a id="part_scrap_exchange_zh"></a>
    <h3>碎片</h3>
    <p>虽然您可以使用零件来升级配件（以及硬币），但也可以将它们放入“废料机”中以获取碎片<img class="inline" src="../img/scrap.png" alt="">。碎片可用于购买您需要的零件。 因此，您可以报废无用或多余的零件，并使用碎片购买有用的零件。 考虑到不良的转换率（请参见下表），一般的指导原则是不要废弃零件，直到零件过剩为止，即使它似乎暂时没有用。 </p>
    <table>
      <caption>零件 <-> 碎片 转换率</caption>
      <tr>
        <th></th>
        <th>普通 Common</th>
        <th>稀有 Rare</th>
        <th>史诗 Epic</th>
        <th>传奇 Legendary</th>
      </tr>
      <tr>
        <td>1 零件 -> ? 碎片</td>
        <td>1</td>
        <td>5</td>
        <td>40</td>
        <td>400</td>
      </tr>
      <tr>
        <td>? 碎片 -> 1 零件</td>
        <td>10</td>
        <td>50</td>
        <td>400</td>
        <td>4000</td>
      </tr>
    </table>
    <p>
      如果你报废了一部分然后又想回购，则会损失90％。 因此，请确保只报废多余的零件，因为您永远不知道某个零件将来是否有用。
    </p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
