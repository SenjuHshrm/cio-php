<div class='content-container' ng-controller='pollCtrl'>
  <h3 class='content-header'>Polls</h3>
  <form ng-submit='setPoll()'>
    <div class='row'>
      <div class='form-group col-xs-8 col-xs-offset-2'>
        <label for='qstn'>Question:</label>
        <input type='text' name='qstn' class='form-control' ng-model='pollQuest.question'>
      </div>
      
    </div>
  </form>
</div>
