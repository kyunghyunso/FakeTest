<div class="card text-center mx-auto" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$question?></h5>
    <form action="/testing/nextquestion" method="POST">
    <button type="input" class="btn btn-secondary btn-lg btn-block"><?=$answer1?></button>
    <button type="input" class="btn btn-secondary btn-lg btn-block"><?=$answer2?></button>
    <button type="input" class="btn btn-secondary btn-lg btn-block"><?=$answer3?></button>
    <button type="input" class="btn btn-secondary btn-lg btn-block"><?=$answer4?></button>
    </form>
  </div>
</div>