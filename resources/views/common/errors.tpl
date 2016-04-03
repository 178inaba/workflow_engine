{if count($errors) > 0}
  <div class="alert alert-danger">
    <strong>Whoops! Something went wrong!</strong>

    <br><br>

    <ul>
      {foreach from=$errors->all() item=error}
        <li>{$error}</li>
      {/foreach}
    </ul>
  </div>
{/if}
