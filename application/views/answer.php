<div class="card text-center mx-auto" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"></h5>
    <form action="/testing/question/<?=($order+1)?>" method="POST">
    <button type="input" id="btn1" class="btn btn-secondary btn-lg btn-block"></button>
    <button type="input" id="btn2" class="btn btn-secondary btn-lg btn-block"></button>
    <button type="input" id="btn3" class="btn btn-secondary btn-lg btn-block"></button>
    <button type="input" id="btn4" class="btn btn-secondary btn-lg btn-block"></button>
    </form>
  </div>
</div>
<script>
  window.onload = function () {
    var json = JSON.parse(sessionStorage.getItem('questions'))[<?=$order-1?>];
    $(".card-title").text(json.question);
    var btns = $(".card .btn");
    for(var i = 0; i<btns.length; i++) {
      console.log(btns[i]);
      btns[i].innerText = json["answer"+(i+1)];
    } 
  }
</script>