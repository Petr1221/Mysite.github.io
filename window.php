<script> $(function hideDiv(){ $('#msg').delay(5000).fadeOut(); }) </script>
<form onSubmit="return validateFeedbackForm();" action="createUser.php" class="modal fade" id="exampleModal" name="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" method="post" novalidate>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Войти / Зарегистрироваться</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Адрес электронной почты</label>
                <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите адрес электронной почты" required>
                <small id="emailHelp" class="form-text text-muted">Мы никому не сообщим о вашем E-mail</small>
                <div class="error1 text-danger" id="error1" style="display:none;"></div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль" required>
                <div class="error2 text-danger" id="error2" style="display:none;"></div>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Принимаю условия соглашения</label>
                <div class="error3 text-danger" id="error3" style="display:none;"></div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" value="Отправить">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closeButton">Закрыть</button>
            </div>
          </div>
        </div>
      </form>