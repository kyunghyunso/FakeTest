<div class="card text-center mx-auto" style="width: 18rem;">  <!--카드가 아닌 전체화면으로?-->
  <div class="card-body">
    <h5 class="card-title"> 친구한테 공유해보세요</h5>
    <input type="text" class="form-control" id="UserName" name="username" placeholder="친구이름입력">
    <button id="makelink" title="공유링크만들기">
        <img src="/static/img/link_button.png">
    </button>
  </div>
  <div id="sharelink">
  </div>
</div>
<style>
    .card{
        margin-bottom:10px;
    }
</style>
<script>
document.querySelector('#makelink').addEventListener('click', function(event){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/ajax/make_share_link');
    xhr.onreadystatechange = function(){
        if(xhr.readyState === 4 && xhr.status === 200){
            document.querySelector('#sharelink').innerHTML = xhr.responseText;
        }
    }
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var data='';
    data += "fri="+ document.querySelector('#UserName').value;
    console.log(data);
    xhr.send(data); 
});
</script>