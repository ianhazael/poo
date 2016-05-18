<?php

require_once 'db/conexion.php';
require_once 'classes/class.MapBuilder.php';

/**
 * Clase abstracta, debe tener al menos un método abstracto "view_by_id"
 */
abstract class common extends conexion {

    /**
     * Atributos que serán heredados posteriormente a quienes utilicen common
     */
    protected $tabla;
    protected $db;

    /**
     * Método abastracto, significa que tendrá que ser implementado en los hijos
     */
    public abstract function view_by_id();

    /**
     * 
     * Método normal que será heredado en cada uno de los hijos, utiliza la
     * propiedad tabla que deberá estar inicializado en cada una de las clases
     * hijas
     */
    public function get_tabla() {
        $query = 'select * from ' . $this->tabla;
        $consulta = $this->db->query($query);
        return $consulta->fetchAll();   //El fetchAll regresa array completo
    }

    public function individual_by_id() {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $query = 'select * from ' . $this->tabla . ' where id=' . $id;
        $consulta = $this->db->query($query);
        return $consulta->fetch();   //El fetchAll regresa array completo
    }

    public function pintarMapa($direccion) {
        // Create MapBuilder object.
        $map = new MapBuilder();

// Retrieve coordinates of address.
        try {
            $pos = $map->getLatLng("$direccion, Hermosillo", MapBuilder::URL_FETCH_METHOD_SOCKETS);
        } catch (MapBuilderException $ex) {
            die($ex->getMessage());
        }

// Set map's center position by latitude and longitude coordinates. 
        $map->setCenter($pos['lat'], $pos['lng']);

// Add a marker with specified color and symbol. 
        $map->addMarker($pos['lat'], $pos['lng'], array(
            'title' => 'Eiffel Tower',
            'defColor' => '#FA6D6D',
            'defSymbol' => 'E'
        ));

// Set the default map type.
        $map->setMapTypeId(MapBuilder::MAP_TYPE_ID_TERRAIN);

// Set width and height of the map.
        $map->setSize(650, 450);

// Set default zoom level.
        $map->setZoom(17);

// Define map type control parameters.
        $map->setMapTypeControl(true);
        $map->setMapTypeControlIds(array(
            MapBuilder::MAP_TYPE_ID_HYBRID,
            MapBuilder::MAP_TYPE_ID_ROADMAP,
            MapBuilder::MAP_TYPE_ID_SATELLITE,
            MapBuilder::MAP_TYPE_ID_TERRAIN
        ));
        $map->setMapTypeControlPosition(MapBuilder::CONTROL_POSITION_LEFT_TOP);
        $map->setMapTypeControlStyle(MapBuilder::MAP_TYPE_CONTROL_STYLE_DROPDOWN_MENU);

// Define overview control parameters.
        $map->setOverviewMapControl(true);
        $map->setOverviewMapControlOpened(true);

// Define pan control parameters.
        $map->setPanControl(true);
        $map->setPanControlPosition(MapBuilder::CONTROL_POSITION_LEFT_BOTTOM);

// Define rotate control parameters.
        $map->setRotateControl(true);
        $map->setRotateControlPosition(MapBuilder::CONTROL_POSITION_LEFT_BOTTOM);

// Define scale control parameters.
        $map->setScaleControl(true);
        $map->setScaleControlPosition(MapBuilder::CONTROL_POSITION_LEFT_BOTTOM);

// Define street view control parameters.
        $map->setStreetViewControl(true);
        $map->setStreetViewControlPosition(MapBuilder::CONTROL_POSITION_RIGHT_TOP);

// Define zoom control parameters.
        $map->setZoomControl(true);
        $map->setZoomControlPosition(MapBuilder::CONTROL_POSITION_RIGHT_TOP);
        $map->setZoomControlStyle(MapBuilder::ZOOM_CONTROL_STYLE_SMALL);

// Display the map.
        $map->show();
    }

}
