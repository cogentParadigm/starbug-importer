<?php
namespace Starbug\Importer\Write;

use Exception;
use Starbug\Importer\Read\StrategyInterface as ReadStrategyInterface;

interface StrategyInterface {
  public function run(ReadStrategyInterface $readStrategy, $options = []);
  public function handleError($level, $message, $file = null, $line = null);
  public function handleException(Exception $exception);
}
