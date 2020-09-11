<?php if ($lang == 'en'): ?>
  <h3>Game modes</h3>
  <p>
    <ul>
      <li>Time attack. Cups map (Capital cup -> Drive Through)</li>
      <li>Time attack. Cups map (Bumpy ride cup -> Rough Road)</li>
      <li>Time attack. Cups map (Hub cap cup -> Dust Valley)</li>
      <li>Time attack. Cups map (Desert cup -> Sunburnt)</li>
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
    <img class="allowed" src="../img/vehicles/vehicle-01-hill-climber.png" alt="hill-climber">
    <img class="allowed" src="../img/vehicles/vehicle-05-tractor.png" alt="tractor">
    <img class="allowed" src="../img/vehicles/vehicle-03-bus.png" alt="bus">
    <img class="allowed" src="../img/vehicles/vehicle-07-dune-buggy.png" alt="dune-buggy">
    <img class="allowed" src="../img/vehicles/vehicle-09-monster-truck.png" alt="monster-truck">
    <img class="allowed" src="../img/vehicles/vehicle-11-chopper.png" alt="chopper">
    <img class="allowed" src="../img/vehicles/vehicle-13-snow-mobile.png" alt="snow-mobile">
    <img class="allowed" src="../img/vehicles/vehicle-17-racing-truck.png" alt="racing-truck">
    <img class="allowed" src="../img/vehicles/vehicle-15-rally-car.png" alt="rally-car">
    <img class="allowed" src="../img/vehicles/vehicle-19-superbike.png" alt="superbike">
    <img class="allowed" src="../img/vehicles/vehicle-21-moonlander.png" alt="moonlander">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>Scores</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>计分方法</h3>
<?php endif; ?>

  <p> <img src="../img/team/team-20200731-scoresheet.jpg" alt="team-20200731-scoresheet"> </p>
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
        <button onclick="cal_score(4, [['s', 15, 37.5],
                                       ['s', 7.5, 18.8],
                                       ['s', 13.5, 33.8],
                                       ['s', 15.5, 38.8]])">
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
  <p class="top_play">图三, 3级 推进器, by 瑾轩. </p>
  <p>瑾轩：起点平台第一次弹簧和推力是同时启动的，弹完不用松手重新推。（我刚练的时候进误区了）再就是吃油的那个平台，要在落地前先把弹簧伸出来，别等落地之后再弹，不然会失速或者弹跳力不足。（看视频里油桶位置细节）落地前弹会弹很高但是会影响速度，落点好的情况吃油前弹是最理想状态。 <br>
    Jerry：在吃到油的一瞬间或者吃到前的一瞬间跳
    <video width="640" controls>
      <source src="../img/team/team-20200731-stage 3-瑾轩-三级推力.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">Stage 3, Level 2 thruster, by 比亚迪.
    <video width="640" controls>
      <source src="../img/team/team-20200731-stage 3-比亚迪-二级推力.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">Stage 3, Level 4 thruster.
    <video width="640" controls>
      <source src="../img/team/team-20200731-stage 3-四级推力满分.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">Morrobox - 36299 points.
    <video width="640" controls>
      <source src="../img/team/team-20200731-36299-Morrobox.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">Ligna - 35177 points.
    <video width="640" controls>
      <source src="../img/team/team-20200731-35177-Ligna.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>
<?php endif; ?>
