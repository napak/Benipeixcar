<?php
 
$forms->addHookBefore('FormBuilderProcessor::render', null, 'accionAlCargarFormulario');
$forms->addHookAfter('FormBuilderProcessor::formSubmitSuccess', null, 'hookRenderFormAfter');
 
 
function accionAlCargarFormulario(HookEvent $event) {
$processor = $event->object;
$form = $processor->getInputfieldsForm();
 
 
switch ($form->name) {
 
case "registro":
// $field = $form->get('dni');
// $field->attr('ng-model', 'yourId');
// $form->attr('class', 'hover-effect');
 
$field = $form->get('rol');
$field->attr('value', '1344' );

// Creamos una cadena aleatoria de 8 caracteres
$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$string = '';
 for ($i = 0; $i < 8; $i++) {
      $string .= $characters[rand(0, strlen($characters) - 1)];
 };

$field2 = $form->get('rid');
$field2->attr('value', $string );

// $conexion = conectar_mysqli_intranet();
 
// $CopNumero = wire('session')->Numero;
 
// $sql= "SELECT * FROM `aux-carnets`";
 
// $motivos = datosConsultaBD( $conexion, $sql );
// foreach ($motivos as $motivo) {
// echo $motivo[1];
// }
 
break;
}
 
 
}



function hookRenderFormAfter(HookEvent $event) {
 
 
}

 
 
 
?>