<?php 

class Country
{
    public $id = null;
    public $code = null;
    public $code_alpha2 = null;
    public $name = null;
    public $continent_id = null;
    public $region = null;
    public $surface_area = null;
    public $population = null;
    public $gnp = null;
    public $head_of_state = null;
    public $capital_city_id = null;

    public function getSurfaceFormatted () {
        return number_format($this->surface_area, 0, '.', ' ') . "km<sup>2</sup>";
    }

}