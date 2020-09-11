function cal_score(n_stages, score_cutoffs) {
  var result, score, total=0;
  for (i = 0; i < n_stages; i++) {
    result = parseFloat(document.getElementById('num'+i.toString()).value);
    if (!isNaN(result)) {
      if (score_cutoffs[i][0] == 'm') {
        if (result >= score_cutoffs[i][2]) score = 10000;
        else if (result <= score_cutoffs[i][1]) score = 0;
        else score = Math.round((result/score_cutoffs[i][2])**2*9000+1000);
      } else if (score_cutoffs[i][0] == 's') {
        if (result <= score_cutoffs[i][1]) score = 10000;
        else if (result >= score_cutoffs[i][2]) score = 1000;
        else score = Math.round(((score_cutoffs[i][2]-result)/(score_cutoffs[i][2]-score_cutoffs[i][1]))**2*9000+1000);
      } else score=0;
      total += score;
      document.getElementById('score'+i.toString()).value = score;
    }
  }
  document.getElementById('total').value = total;
}
