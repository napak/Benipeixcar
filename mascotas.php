<?php include("./myhead.inc"); ?>
<?php echo $page->children->title ?>
<link href="/site/templates/assets/angular/clear.js">
<div class="container">
	<div class="row">
		<h2>Lista de mascotas</h2>
        <div class="col-lg-11">
            <input type="search" class="form-control" ng-model="search.nombre" id="busquedanombre" placeholder="Buscar por el nombre del animal, nombre del propietario..." >
        </div>
        <div class="col-lg-1">
        <button class="btn btn-default navbar-btn" >Calendario</button>
        </div>

        <div id="resultado" ng-controller='BuscadorAngular'>
              <div ng-repeat="f in listaBusqueda | filter:search.nombre">
                <a href= "{{f.url}}">             
                <div class="searchable-container">
                    <div class="items col-xs-12 col-sm-6 col-md-6 col-lg-6 clearfix">
               <div class="info-block block-info clearfix">
                    <div class="square-box pull-left"><img src="{{f.image}}" width="100px">
                    </div>
                    <h5>Propietario: {{f.propietario}}</h5>
                    <h4>Nombre: {{f.nombre}}</h4>
                    <h4>Última cita:</h4><a href="{{f.urlFecha}}">{{f.Fecha}}</a>
                </div>
            </div>
                </div>
                </a>
            </div>
        </div>


	</div>
</div>

<style type="text/css">.glyphicon-lg
{
    font-size:4em
}
.info-block
{
    border-right:5px solid #E6E6E6;margin-bottom:25px
}
.info-block .square-box
{
    width:100px;min-height:110px;margin-right:22px;text-align:center!important;background-color:#676767;padding:20px 0
}
.info-block.block-info
{
    border-color:#20819e
}
.info-block.block-info .square-box
{
    background-color:transparent;color:#FFF
}</style>


<?php include("./myfoot.inc");  ?>