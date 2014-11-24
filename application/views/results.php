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
        
        <?php if($TBL_1 == TRUE): ?>
          <li><span class="octicon octicon-issue-closed"></span> Table regimenten created. </li>
        <?php elseif($TBL_1 == FALSE): ?>
          <li><span class="octicon octicon-issue-opened"></span> Table regimenten not created. </li>
        <?php endif; ?>
        
        
        <?php if($TBL_2 == TRUE): ?>
          <li><span class="octicon octicon-issue-closed"></span> Table gesneuvelde created. </li>
        <?php elseif($TBL_2 == FALSE): ?>
          <li><span class="octicon octicon-issue-openend"></span> Table gesneuvelde not created. </li>
        <?php endif; ?>
        
        <?php if($TBL_3 == TRUE): ?>
          <li><span class="octicon octicon-issue-closed"></span> Table burgerslachtoffers created. </li>
        <?php elseif($TBL_3 == FALSE): ?>
          <li><span class="octicon octicon-issue-openend"></span> Table burgerslachtoffers not cread</li>
        <?php endif; ?>
        
        <?php if($TBL_4 == TRUE): ?>
          <li><span class="octicon octicon-issue-closed"></span> Table begraafplaatsen created.</li>
        <?php elseif($TBL_4 == FALSE): ?>
          <li><span class="octicon octicon-issue-opened"></span> Table begraafplaatsen not created.</li>
        <?php endif; ?>
        
      <ul>
    </div>
    
  </div>
</div>
