<form ng-submit='updPic()'>
  <div class='form-group col-xs-10'>
    <input type='file' ng-model='form.image' class='form-control' accept='image/*' onchange='angular.element(this).scope().uploadedFile(this)'>
  </div>
  <div class='form-group co-xs-2'>
    <button class='btn btn-info'>upload</button>
  </div>
</form>
