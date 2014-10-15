<?php include("./myhead.inc"); ?>
<div class="container">
<div class="row">
	<h2 class="header-lined has-sub-header text-center">Links de interés</h2>
	<?php foreach ($page->children as $url) {?>
	<div class="col-md-3">
	<div class="post-loop-author-info" style="margin-top:25px">
        <div class="author-avatar">
          <a href="<?php echo $url->title ?>"><img alt="" src="<?php echo $url->link_imagen->first->url ?>"></a>
        </div>
        <div class="author-meta">
          <h4 class="author-name"><a href="<?php echo $url->title ?>"><?php echo $url->title ?></a></h4>
        </div>
      </div></div>
      <?php } ?>
      </div>

</div>
<?php include("./myfoot.inc");  ?>