<?php
namespace Starbug\Importer\Read;

abstract class FileStrategy extends Strategy {
  protected $path;
  public function __construct($path) {
    $this->path = $path;
  }
}
