<?php if ($lang == 'en'): ?>
  <h3>Game modes</h3>
  <p>
    Event name:
    <ul>
      <li>.</li>
      <li>.</li>
      <li>.</li>
      <li>.</li>
    </ul>
  </p>

  <h3>Allowed vehicles</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>比赛模式</h3>
  <p>
    活动名字：
    <ul>
      <li>.</li>
      <li>.</li>
      <li>.</li>
      <li>.</li>
    </ul>
  </p>

  <h3>可用车辆</h3>
<?php endif; ?>

  <p>
    <img class="allowed" src="../img/vehicles/vehicle-01-hill-climber.png" alt="hill-climber">
    <img class="allowed" src="../img/vehicles/vehicle-02-scooter.png" alt="scooter">
    <img class="allowed" src="../img/vehicles/vehicle-03-bus.png" alt="bus">
    <img class="allowed" src="../img/vehicles/vehicle-04-hill-climber-mk-2.png" alt="hill-climber-mk-2">
    <img class="allowed" src="../img/vehicles/vehicle-05-tractor.png" alt="tractor">
    <img class="allowed" src="../img/vehicles/vehicle-06-motocross.png" alt="motocross">
    <img class="allowed" src="../img/vehicles/vehicle-07-dune-buggy.png" alt="dune-buggy">
    <img class="allowed" src="../img/vehicles/vehicle-08-sports-car.png" alt="sports-car">
    <img class="allowed" src="../img/vehicles/vehicle-09-monster-truck.png" alt="monster-truck">
    <img class="allowed" src="../img/vehicles/vehicle-10-super-diesel.png" alt="super-diesel">
    <img class="allowed" src="../img/vehicles/vehicle-11-chopper.png" alt="chopper">
    <img class="allowed" src="../img/vehicles/vehicle-12-tank.png" alt="tank">
    <img class="allowed" src="../img/vehicles/vehicle-13-snow-mobile.png" alt="snow-mobile">
    <img class="allowed" src="../img/vehicles/vehicle-14-monowheel.png" alt="monowheel">
    <img class="allowed" src="../img/vehicles/vehicle-15-rally-car.png" alt="rally-car">
    <img class="allowed" src="../img/vehicles/vehicle-16-formula.png" alt="formula">
    <img class="allowed" src="../img/vehicles/vehicle-17-racing-truck.png" alt="racing-truck">
    <img class="allowed" src="../img/vehicles/vehicle-18-hot-rod.png" alt="hotrod">
    <img class="allowed" src="../img/vehicles/vehicle-19-superbike.png" alt="superbike">
    <img class="allowed" src="../img/vehicles/vehicle-20-supercar.png" alt="supercar">
    <img class="allowed" src="../img/vehicles/vehicle-21-moonlander.png" alt="moonlander">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>Scores</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>计分方法</h3>
<?php endif; ?>

  <p> <img src="../img/team/team--scoresheet.jpg" alt="team--scoresheet"> </p>
  <table id="cal_score">
  <?php if ($lang == 'en'): ?>
    <caption>Calculate your scores:</caption>
    <tr>
      <th>stage</th>
      <th>your result (in sec or meter)</th>
      <th>your score</th>
    </tr>
  <?php elseif ($lang == 'zh'): ?>
    <caption>计算你的分数:</caption>
    <tr>
      <th>图</th>
      <th>你的成绩（秒或者米）</th>
      <th>分数</th>
    </tr>
  <?php endif; ?>

    <tr>
      <td>1</td>
      <td><input name="result1" type="text" size=10 id='num0'></td>
      <td><input type="text" id="score0" readonly></td>
    </tr>
    <tr>
      <td>2</td>
      <td><input name="result2" type="text" size=10 id='num1'></td>
      <td><input type="text" id="score1" readonly></td>
    </tr>
    <tr>
      <td>3</td>
      <td><input name="result3" type="text" size=10 id='num2'></td>
      <td><input type="text" id="score2" readonly></td>
    </tr>
    <tr>
      <td>4</td>
      <td><input name="result4" type="text" size=10 id='num3'></td>
      <td><input type="text" id="score3" readonly></td>
    </tr>
    <tr>
      <td>total</td>
      <td></td>
      <td><input type="text" id="total" readonly></td>
    </tr>
    <tr>
      <td colspan="3">
        <button onclick="cal_score(4, [['m', 0.01, 350],
                                       ['m', 0.01, 300],
                                       ['s', 33, 100],
                                       ['m', 0.01, 500]])">
        <?php if ($lang == 'en'): ?>
          Calculate
        <?php elseif ($lang == 'zh'): ?>
          计算
        <?php endif; ?>
        </button>
      </td>
    </tr>
  </table>

<?php if ($lang == 'en'): ?>
  <h3>Videos</h3>
  <p>34130 points by vokope</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/a2JvxCubcS8?start=4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php elseif ($lang == 'zh'): ?>
  <h3>视频</h3>
  <p class="top_play">
    <video width="640" controls>
      <source src="../img/team/team-.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
<?php endif; ?>
