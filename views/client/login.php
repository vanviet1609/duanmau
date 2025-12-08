<form action="<?= BASE_URL ?>?action=login" method="post" class="p-4 border rounded shadow-sm" style="max-width: 400px; margin: auto; margin-top: 50px;">
  <h3 class="text-center mb-4">Đăng nhập</h3>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
  </div>

  <div class="d-flex justify-content-between mb-3">
    <span>Chưa có tài khoản?</span>
    <a href="<?= BASE_URL ?>?action=register">Đăng ký</a>
  </div>

  <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
</form>
