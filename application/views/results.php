<div class="container">
  <div class="row">
  
    <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
      <h3> Resultaten </h4>
      
      <ul class="list unstyled">
        <?php if($CreateDB == TRUE): ?>
          <li><span class="octicon octicon-issue-closed"></span> Database created.</li>
        <?php elseif($CreatDB == FALSE): ?>
          <li><span class="octicon octicon-issue-opened"></span> Database not created.</li>
        <?php endif; ?>
      <ul>
    </div>
    
  </div>
</div>
