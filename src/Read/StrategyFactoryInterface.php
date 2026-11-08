<?php
namespace Starbug\Importer\Read;

interface StrategyFactoryInterface {
  public function create($strategy, $params = []) : StrategyInterface;
}
