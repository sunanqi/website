<?php if ($lang == 'en'): ?>
  <h3>Game modes</h3>
  <p>
  Event name:　Breathe in, Breathe out
    <ul>
      <li>Stage 1: Drive as far as you can. 10k: 1200m</li>
      <li>Stage 2: Multi Jump. 10k: 370m</li>
      <li>Stage 3: Time attack; destroy crates to get time bonus. 10k: 11s</li>
      <li>Stage 4: Deliver cans as fast as you can. 10k: 10s</li>
      <li>Stage 5: Coin stunt. 10k: 1500 pts</li>
    </ul>
  </p>

  <h3>Allowed vehicles</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>比赛模式</h3>
  <p>
  比赛名字：呼气吸气
    <ul>
      <li>图1：无补给形势，跑越远越好. 10k: 1200m</li>
      <li>图2：连续弹跳. 10k: 370m</li>
      <li>图3：竞速，破坏箱子获得时间奖励. 10k: 11s</li>
      <li>图4：运货. 10k: 10s</li>
      <li>图5：特技. 10k: 1500分</li>
    </ul>
  </p>

  <h3>可用车辆</h3>
<?php endif; ?>

  <p>
    <img class="allowed" src="../img/vehicles/vehicle-01-hill-climber.png" alt="hill-climber">
    <img class="allowed" src="../img/vehicles/vehicle-06-motocross.png" alt="motocross">
    <img class="allowed" src="../img/vehicles/vehicle-12-tank.png" alt="tank">
    <img class="allowed" src="../img/vehicles/vehicle-17-racing-truck.png" alt="racing-truck">
    <img class="allowed" src="../img/vehicles/vehicle-20-supercar.png" alt="supercar">
    <img class="allowed" src="../img/vehicles/vehicle-21-moonlander.png" alt="moonlander">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>Scores</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>计分方法</h3>
<?php endif; ?>

  <p> <img src="../img/team/team-20200828-scoresheet.jpg" alt="team--scoresheet"> </p>
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
      <td>5</td>
      <td><input name="result5" type="text" size=10 id='num4'></td>
      <td><input type="text" id="score4" readonly></td>
    </tr>
    <tr>
      <td>total</td>
      <td></td>
      <td><input type="text" id="total" readonly></td>
    </tr>
    <tr>
      <td colspan="3">
        <button onclick="cal_score(5, [['m', 0.01, 1200],
                                       ['m', 0.01, 370],
                                       ['s', 11, 30],
                                       ['s', 10, 30],
                                       ['m', 0.01, 1500]])">
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
  <p>Preview
    <video width="640" controls>
      <source src="../img/team/team-20200828-preview.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
<?php elseif ($lang == 'zh'): ?>
  <h3>视频</h3>
  <p class="top_play">
    <video width="640" controls>
      <source src="../img/team/team-20200828-preview.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
<?php endif; ?>
