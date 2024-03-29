<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

?>

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <?php $form = ActiveForm::begin([
        'id' => 'login-form',
    ]); ?>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <h2 class="mb-4 mt-4">User Login</h2>
          </div>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label("Email") ?>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
              <?= $form->field($model, 'password')->passwordInput() ?>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="<?= Url::to(["signup"]) ?>"
                class="link-danger">Register</a></p>
          </div>
          <div class="text-lg-center mt-4 pt-2">
            <p class="small fw-bold mt-2 pt-1 mb-0"><a href="<?= Url::to(["/admin/default/index"]) ?>"
                class="link-danger">Admin Login</a></p>
          </div>
          <?php ActiveForm::end(); ?>
      </div>
    </div>