<?php include("./myhead.inc"); ?>

<style>
  
  .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}

</style>

<script>
  $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});

</script>
<br><br>

<div class='container'>

<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detalles de la mascota</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                <img class="img-circle" src="<?php echo $page->mascotaImagen->url ?>" alt="User Pic">
                            </div>
                            <div class="col-xs-2 col-sm-2 hidden-md hidden-lg hidden-xs hidden-sm">
                                <img class="img-circle" src="" alt="User Pic">
                            </div>

                            <div class=" col-md-9 col-lg-9">
                                <strong><?php echo $page->title ?></strong><br>
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Propietario:</td>
                                        <td><?php echo $pages->get("$page->mascotaPropietario")->title ?></td>
                                    </tr>
                                    <tr>
                                        <td>Clinica Remitente:</td>
                                        <td><?php echo $pages->get("$page->mascotaClinicaRemitente")->title ?></td>
                                    </tr>
                                    <tr>
                                        <td>Chip:</td>
                                        <td><?php echo $page->mascotaChip ?></td>
                                    </tr>
                                    <tr>
                                        <td>E-mail:</td>
                                        <td><?php echo $page->animalesEmail ?></td>
                                    </tr>
                                    <tr>
                                        <td>Dirección:</td>
                                        <td><?php echo $page->mascotaDireccion ?></td>
                                    </tr>
                                    <tr>
                                        <td>Telefono:</td>
                                        <td><?php echo $page->animalesTelefono ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de nacimiento:</td>
                                        <td><?php echo strftime("%d %m %Y", date($page->mascotaNacimiento)); ?></td>
                                    </tr>                                                                                     
                                    <tr style="display: <?php if (is_null(($pages->get("$page->mascotaCastrado")->title))) {echo "none";} ?>">
                                        <td>Castrado:</td>
                                        <td><?php echo $pages->get("$page->mascotaCastrado")->title ?></td>
                                    </tr>
                                    <tr style="display: <?php if (is_null(($pages->get("$page->mascotaEspecie")->title))) {echo "none";} ?>">
                                        <td>Caracteristicas:</td>
                                        <td><?php echo $pages->get("$page->mascotaEspecie")->title." - ".$pages->get("$page->mascotaSexo")->title." - ".$pages->get("$page->mascotaCaracter")->title." - ".$pages->get("$page->mascotaCapa")->title ?></td>
                                    </tr>
                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        
                         <?php 
                        foreach ($page->children() as $hijo) { 
                        $year = substr($hijo->title, 0,4);
                        $mon = substr($hijo->title, 4,2);
                        $day = substr($hijo->title, 6,2);
                        $date = $day." ".$mon." ".$year; ?>
                        <button class="btn btn-sm btn-primary" type="button" data-toggle="tooltip" data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button> 
                         <a href="<?php echo $hijo->url ?>">
                            <?php echo $date ?>
                        </a>
                        <br>

                        <?php } ?>                        
                    </div>
                </div>
            </div>


</div>
<?php include("./myfoot.inc");  ?>