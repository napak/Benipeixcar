<?php include("./myhead.inc"); ?>


<div class='container'>
  <div class='row'>
    <div class='col-md-8'>
      <div class='post-single'>

        <h1 class='has-sub-header'><?php echo $page->title ?></h1>

          <hr></hr>                    

        <p>
        <?php echo $page->body ?>
        </p>
        <div class='under-post'>
         
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("./myfoot.inc");  ?>