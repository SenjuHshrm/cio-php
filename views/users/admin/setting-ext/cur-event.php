<div class='content-container' ng-controller='curEvent'>
  <h3 class='content-header'>Current Event Settings</h3>
  <form ng-submit='sendCurEvnt()' style='padding:10px;'>
    <div class='row'>
      <div class='form-group col-xs-5 col-xs-offset-2'>
        <label for='title'>Title:</label>
        <input type='text' name='title' class='form-control' ng-model='curEvnt.title'>
      </div>
      <div class='form-group col-xs-3'>
        <label for='img'>Upload Image:</label>
        <input type='file' class='form-control' accept='image/*'>
      </div>
      <div class='form-group col-xs-8 col-xs-offset-2'>
        <label for='content'>Content:</label>
        <textarea id='content' class='form-control autoresize' rows='1'></textarea>
      </div>
      <div class='col-xs-12'>
        <button type='submit' class='col-xs-6 col-xs-offset-3 btn btn-success'>Add new Current Event</button>
      </div>
    </div>
  </form>
</div>
