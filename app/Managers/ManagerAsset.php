<?php

namespace sp_framework\Managers;

class ManagerAsset
{
  /**
   * [$list_form the list of the form]
   * @var [array]
   */
  var $list_form = array();
  /**
   * [add_form add a form]
   * @param [array] $args [description contain information for add form]
   */
  function add_form( $args )
  {
      $this->list_form []=  $args;
  }
}
