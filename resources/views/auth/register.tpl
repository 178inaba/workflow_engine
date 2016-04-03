{extends file='layouts/app.tpl'}
{block name=content}
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Register</div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="/register">
              {csrf_field()}

              <div class="form-group{if $errors->has('name')} has-error{/if}">
                <label class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="name" value="{old('name')}">

                  {if $errors->has('name')}
                    <span class="help-block">
                      <strong>{$errors->first('name')}</strong>
                    </span>
                  {/if}
                </div>
              </div>

              <div class="form-group{if $errors->has('mail')} has-error{/if}">
                <label class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="mail" value="{old('mail')}">

                  {if $errors->has('mail')}
                    <span class="help-block">
                      <strong>{$errors->first('mail')}</strong>
                    </span>
                  {/if}
                </div>
              </div>

              <div class="form-group{if $errors->has('password')} has-error{/if}">
                <label class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                  <input type="password" class="form-control" name="password">

                  {if $errors->has('password')}
                    <span class="help-block">
                      <strong>{$errors->first('password')}</strong>
                    </span>
                  {/if}
                </div>
              </div>

              <div class="form-group{if $errors->has('password_confirmation')} has-error{/if}">
                <label class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                  <input type="password" class="form-control" name="password_confirmation">

                  {if $errors->has('password_confirmation')}
                    <span class="help-block">
                      <strong>{$errors->first('password_confirmation')}</strong>
                    </span>
                  {/if}
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Register
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{/block}