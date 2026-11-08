<?php
namespace Starbug\Importer;

use function DI\autowire;
use function DI\get;

return [
  "importer.transformers" => [],
  "Starbug\Importer\Write\StrategyFactoryInterface" => autowire(Write\StrategyFactory::class),
  Transform\Factory::class => autowire()
    ->constructorParameter("transformers", get("importer.transformers"))
];
