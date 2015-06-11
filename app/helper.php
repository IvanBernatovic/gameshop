<?php

function renderNode($node) {
  if( $node->isLeaf() ) {
    return '<li><a href="'. $node->slug.'">' . $node->name . '</a></li>';
  } else {
    $html = '<li class="dropdown-submenu"><a tabindex="-1" href="#" role="button">' . $node->name;

    $html .= '</a><ul class="dropdown-menu" role="menu">';

    foreach($node->children as $child)
      $html .= renderNode($child);

    $html .= '</ul>';

    $html .= '</li>';
  }

  return $html;
}