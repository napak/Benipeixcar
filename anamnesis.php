<?php include("./myhead.inc"); ?>



<div class="container">
<?php
$year = substr($page->title, 0,4);
$mon = substr($page->title, 4,2);
$day = substr($page->title, 6,2);
$date = $day." ".$mon." ".$year; 
?>
  <h2 class="header-lined">Anamnesis de <?php echo $page->parent->title ." el dia ". $date ?>  </h2>


  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <div class="row bottom-margin">
        <div class="col-md-3">
          <div class="blog-teaser animated-when-visible animated flipInX" data-animation-type="flipInX">
            <img alt="" src="/site/assets/img/foto00.jpg">
            <h3>
              <span class="meta-item">
                <i class="icon-time"></i>
                Analíticas 17 Nov, 2013
              </span>
            </h3>
 
            <p>Resultados de la pruebas analíticas.</p>
            <ul class="list-checkmarked text-bigger">
            <?php foreach ($page->anamnesisAnaliticas as $analitica) {
              $formato = substr("$analitica->name", -3);
              if ($formato == "jpg" || $formato == "png" || $formato == "bmp" || $formato == "gif" || $formato == "peg") {
                      echo "<li>{$analitica->description} - <a href='$analitica->url'><i class='icon-camera-retro icon-large'></i></a></li>"; }
              else
               
                if ($formato == "pdf") {echo "<li>{$analitica->description} - <a href='$analitica->url'><i class='icon-file icon-large'></i></a></li>";}
             
              else
                
                if ($formato == "doc" || $formato == "ocx"){echo "<li>{$analitica->description} - <a href='$analitica->url'><i class='icon-file-text-alt icon-large'></i></a></li>";}
              
              else
             
              {echo "<li>{$analitica->description} - <a href='$analitica->url'><i class='icon-film icon-large'></i></a></li>";} ;
           
            } ?>
            </ul>

          </div>
        </div>
        <div class="col-md-3">
          <div class="blog-teaser animated-when-visible delay-animation-one animated flipInX" data-animation-type="flipInX">
            <img alt="" src="/site/assets/img/rx.jpg">
            <h3>
                            <span class="meta-item">
                <i class="icon-time"></i>
                Rx 17 Nov, 2013
              </span>
            </h3>

            <p>Resultados de la pruebas de rayos.</p>
            <ul class="list-checkmarked text-bigger">
            <?php foreach ($page->anamnesisRx as $rx) {
              $formato = substr("$rx->name", -3);
              if ($formato == "jpg" || $formato == "png" || $formato == "bmp" || $formato == "gif" || $formato == "peg") {
                      echo "<li>{$rx->description} - <a href='$rx->url'><i class='icon-camera-retro icon-large'></i></a></li>"; }
              else
               
                if ($formato == "pdf") {echo "<li>{$rx->description} - <a href='$rx->url'><i class='icon-file icon-large'></i></a></li>";}
             
              else
                
                if ($formato == "doc" || $formato == "ocx"){echo "<li>{$rx->description} - <a href='$rx->url'><i class='icon-file-text-alt icon-large'></i></a></li>";}
              
              else
             
              {echo "<li>{$rx->description} - <a href='$rx->url'><i class='icon-film icon-large'></i></a></li>";} ;
            } ?>
            </ul>

          </div>
        </div>
        <div class="col-md-3">
          <div class="blog-teaser animated-when-visible delay-animation-two animated flipInX" data-animation-type="flipInX">
            <img alt="" src="/site/assets/img/electro.jpg">
            <h3>
                        <span class="meta-item">

                Electro 17 Nov, 2013
              </span>
            </h3>
 
            <p>Resultados de las pruebas de electro.</p>
            <ul class="list-checkmarked text-bigger">
            <?php foreach ($page->anamnesisElectro as $electro) {
             $formato = substr("$electro->name", -3);
              if ($formato == "jpg" || $formato == "png" || $formato == "bmp" || $formato == "gif" || $formato == "peg") {
                      echo "<li>{$electro->description} - <a href='$electro->url'><i class='icon-camera-retro icon-large'></i></a></li>"; }
              else
               
                if ($formato == "pdf") {echo "<li>{$electro->description} - <a href='$electro->url'><i class='icon-file icon-large'></i></a></li>";}
             
              else
                
                if ($formato == "doc" || $formato == "ocx"){echo "<li>{$electro->description} - <a href='$electro->url'><i class='icon-file-text-alt icon-large'></i></a></li>";}
              
              else
             
              {echo "<li>{$electro->description} - <a href='$electro->url'><i class='icon-film icon-large'></i></a></li>";} ;
            } ?>
            </ul>
   
          </div>
        </div>

        <div class="col-md-3">
          <div class="blog-teaser animated-when-visible delay-animation-one animated flipInX" data-animation-type="flipInX">
            <img alt="" src="/site/assets/img/d2.jpg">
            <h3>
                            <span class="meta-item">
                <i class="icon-time"></i>
                Ecografia 17 Nov, 2013
              </span>
            </h3>

            <p>Resultados de la pruebas de ecografia.</p>
            <ul class="list-checkmarked text-bigger">
            <?php foreach ($page->anamnesisEco as $eco) {
              $formato = substr("$eco->name", -3);
              if ($formato == "jpg" || $formato == "png" || $formato == "bmp" || $formato == "gif" || $formato == "peg") {
                      echo "<li>{$eco->description} - <a href='$eco->url'><i class='icon-camera-retro icon-large'></i></a></li>"; }
              else
               
                if ($formato == "pdf") {echo "<li>{$eco->description} - <a href='$eco->url'><i class='icon-file icon-large'></i></a></li>";}
             
              else
                
                if ($formato == "doc" || $formato == "ocx"){echo "<li>{$eco->description} - <a href='$eco->url'><i class='icon-file-text-alt icon-large'></i></a></li>";}
              
              else
             
              {echo "<li>{$eco->description} - <a href='$eco->url'><i class='icon-film icon-large'></i></a></li>";} ;
            } ?>
            </ul>

          </div>
        </div>

      </div>
    </div>

  </div>

<div class="slogan text-center">
      <h2 class="header-highlighted">Observaciones</h2>
      <p><?php echo $page->anamnesisObservaciones ?>.</p>
      <div class="slogan-buttons">
     
      </div>
    </div>

    <div class="slogan text-center">
      <h2 class="header-highlighted">Todas las citas</h2>
      <p>Registro de todas las citas del paciente por orden cronologico.</p>

      
      <?php 
                        foreach ($page->parent->children() as $hijo) { 
                        $year = substr($hijo->title, 0,4);
                        $mon = substr($hijo->title, 4,2);
                        $day = substr($hijo->title, 6,2);
                        $date = $day." ".$mon." ".$year; ?>
                        <div class="col-md-3">
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="tooltip" data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button> 
                         <a href="<?php echo $hijo->url ?>">
                            <?php echo $date ?>
                        </a>
                        </div>

                        <?php } ?>  
      </div>
    

  




</div>

<?php include("./myfoot.inc");  ?>