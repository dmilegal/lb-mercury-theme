<?php
function getLdObjectId($jsonld)
{
  if (!is_object($jsonld)) return null;
  if (property_exists($jsonld, 'ID')) return $jsonld->ID;
  elseif (property_exists($jsonld, 'post') && is_object($jsonld->post)) return $jsonld->post->ID;

  return null;
}
