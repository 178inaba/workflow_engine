{extends file='layouts/app.tpl'}
{block name=content}
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
          <div class="panel-heading">registration your company!</div>
          <div class="panel-body">
            <form action="/company_registration" method="post">
              {csrf_field()}
              <p>company id:<input type="text" name="company_id"></p>
              <p>company name:<input type="text" name="company_name"></p>
              <p>user id:<input type="text" name="user_id"></p>
              <p>user name:<input type="text" name="user_name"></p>
              <p>mail:<input type="text" name="mail"></p>
              <p><input type="submit" value="registration"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
{/block}
