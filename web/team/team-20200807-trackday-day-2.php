<?php if ($lang == 'en'): ?>
  <h3>Game modes</h3>
  <p>
    <ul>
      <li>Time attack. Cups map (Cup of City Water::Watery Tunnel)</li>
      <li>Time attack. Cups map (Death Mountain::Top of the World)</li>
      <li>Time attack. Cups map (Mine Shaft Cup::A Flat Miner)</li>
      <li>Time attack. Cups map (Magnetic Circuit::Take Off)</li>
    </ul>
  </p>
  <h3>Allowed vehicles</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>比赛模式</h3>
  <p>
    <ul>
      <li>竞速，杯赛图</li>
      <li>竞速，杯赛图</li>
      <li>竞速，杯赛图</li>
      <li>竞速，杯赛图</li>
    </ul>
  </p>
  <h3>可用车辆</h3>
<?php endif; ?>
  <p>
    <img class="allowed" src="../img/vehicles/vehicle-02-scooter.png" alt="scooter">
    <img class="allowed" src="../img/vehicles/vehicle-04-hill-climber-mk-2.png" alt="hill-climber-mk-2">
    <img class="allowed" src="../img/vehicles/vehicle-06-motocross.png" alt="motocross">
    <img class="allowed" src="../img/vehicles/vehicle-08-sports-car.png" alt="sports-car">
    <img class="allowed" src="../img/vehicles/vehicle-10-super-diesel.png" alt="super-diesel">
    <img class="allowed" src="../img/vehicles/vehicle-12-tank.png" alt="tank">
    <img class="allowed" src="../img/vehicles/vehicle-14-monowheel.png" alt="monowheel">
    <img class="allowed" src="../img/vehicles/vehicle-16-formula.png" alt="formula">
    <img class="allowed" src="../img/vehicles/vehicle-18-hot-rod.png" alt="hotrod">
    <img class="allowed" src="../img/vehicles/vehicle-20-supercar.png" alt="supercar">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>Scores</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>计分方法</h3>
<?php endif; ?>
  <p> <img src="../img/team/team-20200807-scoresheet.jpg" alt="team-20200807-scoresheet"> </p>
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
        <button onclick="cal_score(4, [['s', 12, 30],
                                         ['s', 13.5, 33.7],
                                         ['s', 16.5, 41.3],
                                         ['s', 13, 32.5]])">
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
  <p>...</p>

<?php elseif ($lang == 'zh'): ?>
  <h3>视频</h3>
  <p class="top_play">Stage 2, 15.196s
    <video width="640" controls>
      <source src="../img/team/team-20200807-stage 2-中华有为.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">Stage 2, 15.197s
    <video width="640" controls>
      <source src="../img/team/team-20200807-stage 2-老邱.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">Stage 3, 19.142s
    <video width="640" controls>
      <source src="../img/team/team-20200807-stage 3-老邱.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
team-20200807-stage 3-老邱.mp4
  <p class="top_play">Stage 4, Supercar
    <video width="640" controls>
      <source src="../img/team/team-20200807-stage 4-伍六七.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">30842 pts, by Ligna.
    <video width="640" controls>
      <source src="../img/team/team-20200807-30842-Ligna.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

<?php endif; ?>
