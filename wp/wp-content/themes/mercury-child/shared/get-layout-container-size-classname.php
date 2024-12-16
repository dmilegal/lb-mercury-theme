<?
function getLayoutContainerSizeClassName()
{
  $size = get_field('container_size');

  switch ($size) {
    case 'sm':
      return 'lb-layout-container-size--sm';

    default:
      return '';
  }
}
