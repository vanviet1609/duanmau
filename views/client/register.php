<form action="<?= BASE_URL ?>?action=register" method="post" 
      class="p-4 border rounded shadow-sm" 
      style="max-width: 500px; margin: auto; margin-top: 40px;">
  <h3 class="text-center mb-4">Đăng ký</h3>

  <div class="mb-3">
    <label for="Name" class="form-label">Name</label>
    <input type="text" class="form-control" id="Name" name="name" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
  </div>

  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="Password" name="password" required>
  </div>
  <div class="d-flex justify-content-between mb-3">
    <span>Đã có tài khoản?</span>
    <a href="<?= BASE_URL ?>?action=login">Đăng nhập</a>
  </div>

  <button type="submit" class="btn btn-primary w-100">Đăng ký</button>
</form>
