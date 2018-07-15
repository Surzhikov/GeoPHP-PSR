<?php

namespace GeoPHP\GeoPHP\Geometry;

use GeoPHP\GeoPHP\Geometry\Collection;

/**
 * MultiPolygon: A collection of Polygons
 */
class MultiPolygon extends Collection
{
  protected $geom_type = 'MultiPolygon';
}
