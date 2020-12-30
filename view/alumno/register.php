<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-body modal-login p-0">
            <div class="card">
              <div class="card-header">
                <h3>Register</h3>
                <div class="d-flex justify-content-end social_icon">
                  <span><i class="fab fa-facebook-square"></i></span>
                  <span><i class="fab fa-google-plus-square"></i></span>
                  <span><i class="fab fa-twitter-square"></i></span>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="card-body">
                  <form name="register" action="index.php?con=Alumno&act=registrarUsuario" method="POST">
                  <div class="form-group">
                      <label for="register-username" class="remember">Username *</label>
                      <input type="text" name="registerUsername" id="registerUsername" class="form-control" placeholder="username" >
                      <small class="text-info">
                        Must be 5-15 characters long.
                      </small>
                  </div>
                    <div class="form-group">
                  <label for="register-password" class="remember">Name</label>
                    <input type="password" name="registerName" id="registerName" class="form-control" placeholder="password">
                  </div>
                  <div class="form-group">
                      <label for="register-password" class="remember">Password *</label>
                    <input type="password" name="registerPassword" id="registerPassword" class="form-control" placeholder="password">
                    <small class="text-info">
                        Must be 5-14 characters long.
                      </small>
                  </div>
                  <div class="form-group">
                      <label for="register-password" class="remember">email *</label>
                    <input type="email" name="registerEmail" id="registerEmail" class="form-control" placeholder="example@gmail.com">
                  </div>       
                  <div class="form-group ">
                    <input type="button" value="Register" id="btnRegister" class="btn float-right login_btn">
                  </div>
                </form>
              </div>
            </div>      
      </div>
    </div>
  </div>
</div>

