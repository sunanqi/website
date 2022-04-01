function cal_score(n_stages, score_cutoffs) {
  var result, score, total=0;
  for (i = 0; i < n_stages; i++) {
    result = parseFloat(document.getElementById('num'+i.toString()).value);
    if (!isNaN(result)) {
      if (score_cutoffs[3*i] == 1) {
        if (result >= score_cutoffs[3*i+2]) score = 10000;
        else if (result == 0) score = 0;
        else score = Math.round((result/score_cutoffs[3*i+2])**2*9000+1000);
      } else if (score_cutoffs[3*i] == 2) {
        if (result <= score_cutoffs[3*i+2]) score = 10000;
        else if (result >= score_cutoffs[3*i+1]) score = 1000;
        else score = Math.round(((score_cutoffs[3*i+1]-result)/(score_cutoffs[3*i+1]-score_cutoffs[3*i+2]))**2*9000+1000);
      } else score=0;
      total += score;
      document.getElementById('score'+i.toString()).value = score;
    }
  }
  document.getElementById('total').value = total;
}
