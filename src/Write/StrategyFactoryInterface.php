<?php
namespace Starbug\Importer\Write;

interface StrategyFactoryInterface {
  public function create($strategy, $params = []) : StrategyInterface;
}
