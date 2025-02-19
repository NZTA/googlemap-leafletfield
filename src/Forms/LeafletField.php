<?php

namespace NZTA\LeafletField\Forms;

use BenManu\LeafletField\LeafletField as NonMutantLeafletField;
use SilverStripe\Core\Environment;
use SilverStripe\View\Requirements;

class LeafletField extends NonMutantLeafletField
{
    protected function requireDependencies()
    {
        Requirements::javascript("https://unpkg.com/leaflet@1.3.4/dist/leaflet.js");
        Requirements::javascript('//cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js');
        Requirements::javascript('//maps.googleapis.com/maps/api/js?key=' . Environment::getEnv('GOOGLE_MAP_API_KEY'));
        Requirements::javascript('//unpkg.com/leaflet.gridlayer.googlemutant@latest/dist/Leaflet.GoogleMutant.js');
        Requirements::javascript('nzta/googlemap-leafletfield: client/javascript/LeafletField.js');

        Requirements::css("https://unpkg.com/leaflet@1.3.4/dist/leaflet.css");
        Requirements::css('//cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css');
        Requirements::css('benmanu/silverstripe-leafletfield: client/css/LeafletField.css');
    }
}
