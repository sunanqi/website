<?php
  require "header.php";
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
      Vehicles and parts level are crucial to get a good score, no matter in adventure, cups, or team events. Coins are needed to upgrade vehicles while both coins and parts are need to upgrade tuning parts. Upgrading them can be very expensive. In a nutshell, you need around 45 million coins to max all vehicles, and another 161 million coins, along with tons of parts to max all tuning parts. In total you need 206 million coins to max your garage. While it's extremely difficult for players to accrue that many coins in even a couple of years, fortunately, not all parts are important. Some parts are almost never used in adventure, cups, or team events. It is estimated that around 95M coins are need to max all vehicle and useful parts, and around 70M coins are needed if you upgrade to close to max. Still, they are a lot of coins.
    </p>

    <h3>Upgrade cost of vehicles</h3>
    <p>
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
        <tr>
          <td>HILL CLIMBER</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-01-hill-climber.png" alt="hill-climber"></td>
          <td>0</td>
          <td>833,600</td>
          <td>8</td>
          <td>749,600</td>
        </tr>
        <tr>
          <td>SCOOTER</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-02-scooter.png" alt="scooter"></td>
          <td>7000</td>
          <td>838,600</td>
          <td>8</td>
          <td>754,600</td>
        </tr>
        <tr>
          <td>BUS</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-03-bus.png" alt="bus"></td>
          <td>7000</td>
          <td>1,087,000</td>
          <td>7</td>
          <td>1,009,400</td>
        </tr>
        <tr>
          <td>HILL CLIMBER Mk 2</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-04-hill-climber-mk-2.png" alt="hill-climber-mk-2"></td>
          <td>9000</td>
          <td>1,089,000</td>
          <td>7</td>
          <td>1,009,400</td>
        </tr>
        <tr>
          <td>TRACTOR</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-05-tractor.png" alt="tractor"></td>
          <td>15000</td>
          <td>1,095,000</td>
          <td>5</td>
          <td>1,057,400</td>
        </tr>
        <tr>
          <td>MOTOCROSS</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-06-motocross.png" alt="motocross"></td>
          <td>20000</td>
          <td>1,357,600</td>
          <td>6</td>
          <td>1,290,000</td>
        </tr>
        <tr>
          <td>DUNE BUGGY</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-07-dune-buggy.png" alt="dune-buggy"></td>
          <td>30000</td>
          <td>1,367,600</td>
          <td>6</td>
          <td>1,300,000</td>
        </tr>
        <tr>
          <td>SPORTS CAR</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-08-sports-car.png" alt="sports-car"></td>
          <td>80000</td>
          <td>2,608,000</td>
          <td>5</td>
          <td>2,550,000</td>
        </tr>
        <tr>
          <td>MONSTER TRUCK</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-09-monster-truck.png" alt="monster-truck"></td>
          <td>40000</td>
          <td>1,621,600</td>
          <td>5</td>
          <td>1,566,400</td>
        </tr>
        <tr>
          <td>SUPER DIESEL</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-10-super-diesel.png" alt="super-diesel"></td>
          <td>60000</td>
          <td>1,397,600</td>
          <td>6</td>
          <td>1,330,000</td>
        </tr>
        <tr>
          <td>CHOPPER</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-11-chopper.png" alt="chopper"></td>
          <td>60000</td>
          <td>1,397,600</td>
          <td>6</td>
          <td>1,330,000</td>
        </tr>
        <tr>
          <td>TANK</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-12-tank.png" alt="tank"></td>
          <td>70000</td>
          <td>1,651,600</td>
          <td>5</td>
          <td>1,596,400</td>
        </tr>
        <tr>
          <td>SNOW MOBILE</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-13-snow-mobile.png" alt="snow-mobile"></td>
          <td>70000</td>
          <td>1,651,600</td>
          <td>5</td>
          <td>1,596,400</td>
        </tr>
        <tr>
          <td>MONOWHEEL</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-14-monowheel.png" alt="monowheel"></td>
          <td>30000</td>
          <td>1,367,600</td>
          <td>6</td>
          <td>1,300,000</td>
        </tr>
        <tr>
          <td>RALLY CAR</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-15-rally-car.png" alt="rally-car"></td>
          <td>70000</td>
          <td>3,158,400</td>
          <td>5</td>
          <td>3,099,200</td>
        </tr>
        <tr>
          <td>FORMULA</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-16-formula.png" alt="formula"></td>
          <td>90000</td>
          <td>4,282,000</td>
          <td>5</td>
          <td>4,220,400</td>
        </tr>
        <tr>
          <td>RACING TRUCK</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-17-racing-truck.png" alt="racing-truck"></td>
          <td>90000</td>
          <td>4,282,000</td>
          <td>5</td>
          <td>4,220,400</td>
        </tr>
        <tr>
          <td>HOT ROD</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-18-hot-rod.png" alt="hot-rod"></td>
          <td>90000</td>
          <td>4,282,000</td>
          <td>5</td>
          <td>4,220,400</td>
        </tr>
        <tr>
          <td>SUPERBIKE</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-19-superbike.png" alt="superbike"></td>
          <td>100000</td>
          <td>4,292,000</td>
          <td>5</td>
          <td>4,230,400</td>
        </tr>
        <tr>
          <td>SUPERCAR</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-20-supercar.png" alt="supercar"></td>
          <td>100000</td>
          <td>4,292,000</td>
          <td>5</td>
          <td>4,230,400</td>
        </tr>
        <tr>
          <td>MOONLANDER</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-21-moonlander.png" alt="moonlander"></td>
          <td>0</td>
          <td>1,581,600</td>
          <td>5</td>
          <td>1,526,400</td>
        </tr>
        <tr>
          <td>TOTAL</td>
          <td></td>
          <td></td>
          <td>45,534,000</td>
          <td></td>
          <td>44,189,200</td>
        </tr>
      </table>
    </p>

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
      无论在冒险，杯赛或团体赛中，车辆和零件的等级对于获得高分都是至关重要的。 需要硬币来升级车辆，而硬币和零件都需要升级调音零件。 升级它们可能会非常昂贵。 简而言之，您需要大约4,500万个硬币来使所有车辆最大化，另外又需要1.61亿个硬币，以及成吨的零件来使所有调整零件最大。 总共需要2.06亿枚硬币，以使车库最大化。 尽管玩家很难在几年内累积到许多硬币，但幸运的是，并非所有部分都很重要。 有些零件几乎从未在冒险，杯赛或团体比赛中使用。 据估计，大约需要9500万枚金币才能使所有车辆和有用零件最大化，如果升级到接近最大值，则需要约7000万枚金币。 尽管如此，它们还是很多硬币。
    </p>

    <h3>车身升级成本</h3>
    <p>
      <table>
        <caption>升到满级的成本 (车身)</caption>
        <tr>
          <th>车名</th>
          <th>图片</th>
          <th>金币数</th>
          <th>升满成本 <br> (不看广告)</th>
          <th>免费升到第几级？</th>
          <th>升满成本 <br> (看广告)</th>
        </tr>
        <tr>
          <td>HILL CLIMBER (登山赛车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-01-hill-climber.png" alt="hill-climber"></td>
          <td>0</td>
          <td>833,600</td>
          <td>8</td>
          <td>749,600</td>
        </tr>
        <tr>
          <td>SCOOTER (小轮摩托)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-02-scooter.png" alt="scooter"></td>
          <td>7000</td>
          <td>838,600</td>
          <td>8</td>
          <td>754,600</td>
        </tr>
        <tr>
          <td>BUS (巴士)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-03-bus.png" alt="bus"></td>
          <td>7000</td>
          <td>1,087,000</td>
          <td>7</td>
          <td>1,009,400</td>
        </tr>
        <tr>
          <td>HILL CLIMBER Mk 2 (登山赛车Mk2)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-04-hill-climber-mk-2.png" alt="hill-climber-mk-2"></td>
          <td>9000</td>
          <td>1,089,000</td>
          <td>7</td>
          <td>1,009,400</td>
        </tr>
        <tr>
          <td>TRACTOR (拖拉机)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-05-tractor.png" alt="tractor"></td>
          <td>15000</td>
          <td>1,095,000</td>
          <td>5</td>
          <td>1,057,400</td>
        </tr>
        <tr>
          <td>MOTOCROSS (越野摩托车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-06-motocross.png" alt="motocross"></td>
          <td>20000</td>
          <td>1,357,600</td>
          <td>6</td>
          <td>1,290,000</td>
        </tr>
        <tr>
          <td>DUNE BUGGY (沙丘越野车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-07-dune-buggy.png" alt="dune-buggy"></td>
          <td>30000</td>
          <td>1,367,600</td>
          <td>6</td>
          <td>1,300,000</td>
        </tr>
        <tr>
          <td>SPORTS CAR (跑车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-08-sports-car.png" alt="sports-car"></td>
          <td>80000</td>
          <td>2,608,000</td>
          <td>5</td>
          <td>2,550,000</td>
        </tr>
        <tr>
          <td>MONSTER TRUCK (怪物卡车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-09-monster-truck.png" alt="monster-truck"></td>
          <td>40000</td>
          <td>1,621,600</td>
          <td>5</td>
          <td>1,566,400</td>
        </tr>
        <tr>
          <td>SUPER DIESEL (超级柴油车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-10-super-diesel.png" alt="super-diesel"></td>
          <td>60000</td>
          <td>1,397,600</td>
          <td>6</td>
          <td>1,330,000</td>
        </tr>
        <tr>
          <td>CHOPPER (哈雷摩托<)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-11-chopper.png" alt="chopper"></td>
          <td>60000</td>
          <td>1,397,600</td>
          <td>6</td>
          <td>1,330,000</td>
        </tr>
        <tr>
          <td>TANK (坦克)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-12-tank.png" alt="tank"></td>
          <td>70000</td>
          <td>1,651,600</td>
          <td>5</td>
          <td>1,596,400</td>
        </tr>
        <tr>
          <td>SNOW MOBILE (雪地摩托)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-13-snow-mobile.png" alt="snow-mobile"></td>
          <td>70000</td>
          <td>1,651,600</td>
          <td>5</td>
          <td>1,596,400</td>
        </tr>
        <tr>
          <td>MONOWHEEL (单轮车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-14-monowheel.png" alt="monowheel"></td>
          <td>30000</td>
          <td>1,367,600</td>
          <td>6</td>
          <td>1,300,000</td>
        </tr>
        <tr>
          <td>RALLY CAR (拉力赛车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-15-rally-car.png" alt="rally-car"></td>
          <td>70000</td>
          <td>3,158,400</td>
          <td>5</td>
          <td>3,099,200</td>
        </tr>
        <tr>
          <td>FORMULA (方程式赛车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-16-formula.png" alt="formula"></td>
          <td>90000</td>
          <td>4,282,000</td>
          <td>5</td>
          <td>4,220,400</td>
        </tr>
        <tr>
          <td>RACING TRUCK (竞速卡车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-17-racing-truck.png" alt="racing-truck"></td>
          <td>90000</td>
          <td>4,282,000</td>
          <td>5</td>
          <td>4,220,400</td>
        </tr>
        <tr>
          <td>HOT ROD (热棒飞车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-18-hot-rod.png" alt="hot-rod"></td>
          <td>90000</td>
          <td>4,282,000</td>
          <td>5</td>
          <td>4,220,400</td>
        </tr>
        <tr>
          <td>SUPERBIKE (超级摩托车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-19-superbike.png" alt="superbike"></td>
          <td>100000</td>
          <td>4,292,000</td>
          <td>5</td>
          <td>4,230,400</td>
        </tr>
        <tr>
          <td>SUPERCAR (超级跑车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-20-supercar.png" alt="supercar"></td>
          <td>100000</td>
          <td>4,292,000</td>
          <td>5</td>
          <td>4,230,400</td>
        </tr>
        <tr>
          <td>MOONLANDER (登月车)</td>
          <td><img class="in_table" src="../img/vehicles/vehicle-21-moonlander.png" alt="moonlander"></td>
          <td>0</td>
          <td>1,581,600</td>
          <td>5</td>
          <td>1,526,400</td>
        </tr>
        <tr>
          <td>TOTAL</td>
          <td></td>
          <td></td>
          <td>45,534,000</td>
          <td></td>
          <td>44,189,200</td>
        </tr>
      </table>
    </p>

    <h3>配件升级成本</h3>
    <p>升级调音零件需要零件和硬币。 对于零件，玩家可以从各种宝箱中获取它们，获得一些每周赛事奖励，杯赛季节性奖金等。还可以使用边角料购买零件（请参阅下一节）。 在整个游戏的大部分时间里，您都会发现除了某些传奇人物外，您所缺少的硬币比零件更多。 换句话说，硬币是调整零件级别的瓶颈。 升级调音零件所需的硬币和零件仅取决于零件的稀有性，与车辆无关。 通过观看广告，可以在不花费硬币的情况下升级某些级别，但是仍然需要零件。 下表显示了硬币和最大化零件所需的零件。
      <table>
        <caption>升到满级的成本 (配件)</caption>
        <tr>
          <th>稀有等级</th>
          <th>配件</th>
          <th>升满所需金币 <br> (不看广告)</th>
          <th>免费升到第几级？</th>
          <th>升满所需金币 <br> (看广告)</th>
          <th>升满所需配件数</th>
        </tr>
        <tr>
          <td>普通(Common)</td>
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
          <td>稀有(Rare)</td>
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
          <td>史诗(Epic)</td>
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
          <td>传奇(Legendary)</td>
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
        <caption>每一级的升级成本 (看广告)</caption>
        <tr>
          <th>级别</th>
          <th>普通 Common</th>
          <th>稀有 Rare</th>
          <th>史诗 Epic</th>
          <th>传奇 Legendary</th>
        </tr>
        <tr>
          <td>1 -> 2</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; 配件: 3</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; 配件: 3</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 13000; 配件: 3</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 24000; 配件: 3</td>
        </tr>
        <tr>
          <td>2 -> 3</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; 配件: 10</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; 配件: 10</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 23000; 配件: 10</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 55000; 配件: 10</td>
        </tr>
        <tr>
          <td>3 -> 4</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; 配件: 17</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 11000; 配件: 17</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 41000; 配件: 17</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 120000; 配件: 17</td>
        </tr>
        <tr>
          <td>4 -> 5</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 0; 配件: 25</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 19000; 配件: 25</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 73000; 配件: 25</td>
          <td> - </td>
        </tr>
        <tr>
          <td>5 -> 6</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 13000; 配件: 34</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 31000; 配件: 34</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 130000; 配件: 34</td>
          <td> - </td>
        </tr>
        <tr>
          <td>6 -> 7</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 16000; 配件: 45</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 50000; 配件: 45</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 240000; 配件: 45</td>
          <td> - </td>
        </tr>
        <tr>
          <td>7 -> 8</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 21000; 配件: 58</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 83000; 配件: 58</td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>8 -> 9</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 27000; 配件: 76</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 140000; 配件: 76</td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>9 -> 10</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 35000; 配件: 100</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 230000; 配件: 100</td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>10 -> 11</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 47000; 配件: 140</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>11 -> 12</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 66000; 配件: 200</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>12 -> 13</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 94000; 配件: 280</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>13 -> 14</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 140000; 配件: 410</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>14 -> 15</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 210000; 配件: 620</td>
          <td> - </td>
          <td> - </td>
          <td> - </td>
        </tr>
        <tr>
          <td>1 -> max</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 669,000; 配件: 2018</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 564,000; 配件: 368</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 520,000; 配件: 134</td>
          <td><img class="in_table_very_small" src="../img/coin.png" alt="">: 199,000; 配件: 30</td>
        </tr>

      </table>
    </p>

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
      如您所见，如果您报废了一部分然后又想回购，则会损失90％。 因此，请确保只报废多余的零件，因为您永远不知道某个零件将来是否有用。
    </p>

  </div>

  <?php include "right-sidebar.html"; ?>
</div>

<?php
  include "footer.php";
?>
