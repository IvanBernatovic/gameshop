<?php

function renderNode($node, $rootParent = false) {
  if( $node->isLeaf() ) {
    $route = route('StoreCategoryShow', $node->slug);
    if($rootParent){
      return '<li><a class="root-parent" href="'. $route .'">' . $node->name . '</a></li>';
    } else {
      return '<li><a href="'. $route .'">' . $node->name . '</a></li>';
    }
    
  } else {
    if($rootParent){
      $html = '<li class="dropdown-submenu"><a class="root-parent" tabindex="-1" href="#" role="button">' . $node->name;

      $html .= '</a><ul class="dropdown-menu" role="menu">';
    } else {

      $html = '<li class="dropdown-submenu"><a tabindex="-1" href="#" role="button">' . $node->name;

      $html .= '</a><ul class="dropdown-menu" role="menu">';
    }
    
    foreach($node->children as $child)
      $html .= renderNode($child);

    $html .= '</ul>';

    $html .= '</li>';
  }

  return $html;
}