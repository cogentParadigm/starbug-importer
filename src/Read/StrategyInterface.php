<?php
namespace Starbug\Importer\Read;

use Iterator;

interface StrategyInterface {
  public function setFields($fields = []);
  public function getRows($options = []) : Iterator;
  public function getLocation($record);
}
