<div class='content-container' ng-controller='addNewsCtrl'>
  <h3 class='content-header'>News flash</h3>
  <form ng-submit='sendNews()' style='padding:10px'>
    <div class='row'>
      <div class='form-group col-xs-8 col-xs-offset-2'>
        <label for='News'>Enter news here (Max 100 characters)</label>
        <input type='text' name='News' class='form-control' ng-model='news.News'>
      </div>
      <div class='col-xs-12'>
        <button type='submit' class='col-xs-6 col-xs-offset-3 btn btn-success'>Add news</button>
      </div>
    </div>
  </form>
</div>
