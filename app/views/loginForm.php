<style>
.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[name="username"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[name="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
   <div class="container">
<?php echo Form::open(array('url' => '/auth/login', 'class' => 'form-signin')); ?>
        <h2 class="form-signin-heading">Por favor, insira seus dados.</h2>
        <input name="username" type="text" class="form-control" placeholder="Email" required autofocus>
        <input name="password" type="password" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input name="persist" type="checkbox" value="remember-me"> Lembrar?
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->
