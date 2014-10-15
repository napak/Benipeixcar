<?php
 
      $buscar = "";

      $pagesBuscar = $pages->get("/plataforma/mascotas/")->children;


      	
		$events = $pages->find("id=".$pagesBuscar);
		$events_array = array();

		foreach ($events as $event) {
		    
		    $nombre = $event->title;
		    $clinica = $pages->get("$event->mascotaClinicaRemitente")->title;
		    $url = $event->url;
		    $urlImagen = $event->mascotaImagen->url;
		    $propietario = $pages->get("$event->mascotaPropietario")->title;
		    $year = substr($event->child("sort=-sort")->title, 0,4);
            $mon = substr($event->child("sort=-sort")->title, 4,2);
            $day = substr($event->child("sort=-sort")->title, 6,2);
            $date = $day." ".$mon." ".$year;
            $lastCita = $event->child("sort=-sort")->url;

		    $events_array[] = array(
		        'nombre' => $nombre,
		        'clinica' => $clinica,
		        'url' => $url,
		        'image' => $urlImagen,
		        'propietario' => $propietario,
		        'Fecha' => $date,
		        'urlFecha' =>  $lastCita
		    );
		}
		$events_json = json_encode($events_array, true);
		$out = $events_json;

		echo $out;
?>