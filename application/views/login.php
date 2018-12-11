<div class="card mx-auto" style="width: 18rem;">
  <div class="card-body">
    <form action="/auth/authentication" method="POST">
    <div class="form-group">
        <label for="UserName">이름:</label>
        <input type="text" class="form-control" id="UserName" name="username" aria-describedby="nameHelp" placeholder="본명이 좋습니다.">
        <small id="nameHelp" class="form-text text-muted">이름은 저장되지 않습니다.</small>
    </div>
    <button type="submit" class="btn btn-primary col-auto">시작</button>
    </form>
  </div>
</div>

