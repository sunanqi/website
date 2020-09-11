<?php if ($lang == 'en'): ?>
  <h3>Game modes</h3>
  <p>
  Event name: Cresting the Hill
    <ul>
      <li>stage 1：Climb as far/high as you can. Event map</li>
      <li>stage 2: Drive as far as you can. Adventure map Backwater Bog</li>
      <li>stage 3: Time attack。Event map(Mine). Very easy to hit the head, be aware.</li>
      <li>stage 4: Time attack (flip to reduce time. -1.5s/flip). Cups map: Downhill Cup->Down the tube</li>
    </ul>
  </p>

  <h3>Allowed vehicles</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>比赛模式</h3>
  <p>
    活动名字：Cresting the Hill (勇攀高峰)
    <ul>
      <li>图1：爬坡，越高越好。活动图</li>
      <li>图2：跑越远越好。冒险图“泥潭”(Backwater Bog)</li>
      <li>图3：竞速。活动图（矿洞），很容易撞头暴毙。</li>
      <li>图4：竞速（转圈可以减时间，每圈1.5s）。杯赛图 险峻滑坡->蜿蜒山路 (Downhill Cup->Down the tube)</li>
    </ul>
  </p>

  <h3>可用车辆</h3>
<?php endif; ?>

  <p>
    <img class="allowed" src="../img/vehicles/vehicle-01-hill-climber.png" alt="hill-climber">
    <img class="allowed" src="../img/vehicles/vehicle-11-chopper.png" alt="chopper">
    <img class="allowed" src="../img/vehicles/vehicle-13-snow-mobile.png" alt="snow-mobile">
    <img class="allowed" src="../img/vehicles/vehicle-14-monowheel.png" alt="monowheel">
    <img class="allowed" src="../img/vehicles/vehicle-19-superbike.png" alt="superbike">
  </p>

<?php if ($lang == 'en'): ?>
  <h3>Scores</h3>
<?php elseif ($lang == 'zh'): ?>
  <h3>计分方法</h3>
<?php endif; ?>

  <p> <img src="../img/team/team-20200821-scoresheet.jpg" alt="team--scoresheet"> </p>
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
        <button onclick="cal_score(4, [['m', 0.01, 400],
                                       ['m', 0.01, 1000],
                                       ['s', 17, 40],
                                       ['s', 7, 40]])">
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
  <p class="top_play">stage 1：371m
    <video width="640" controls>
      <source src="../img/team/team-20200821-stage-1-371m.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">stage 2：985m
    <video width="640" controls>
      <source src="../img/team/team-20200821-stage-2-985m.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p>36624 by vereshchak</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/env2ch76DSk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <p>33881 by morrobox</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/vCrS9-h1FMk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <p>30248 pts by io&oi</p>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/KiMzGflHt3w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<?php elseif ($lang == 'zh'): ?>
  <h3>视频</h3>
  <p class="top_play">图1：371m
    <video width="640" controls>
      <source src="../img/team/team-20200821-stage-1-371m.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">图2：985m
    <video width="640" controls>
      <source src="../img/team/team-20200821-stage-2-985m.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">图4：3秒！！！
    <video width="640" controls>
      <source src="../img/team/team-20200821-stage-4-3秒.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">图4：中配8秒
    <video width="640" controls>
      <source src="../img/team/team-20200821-stage-4-大约8秒.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">36624分 - Vereshchak
    <video width="640" controls>
      <source src="../img/team/team-20200821-36624-vereshchak.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">33881分 - Morrobox
    <video width="640" controls>
      <source src="../img/team/team-20200821-33881-morrobox.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

  <p class="top_play">30248分 - io&oi
    <video width="640" controls>
      <source src="../img/team/team-20200821-30248-io&oi.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
  </p>

<?php endif; ?>
