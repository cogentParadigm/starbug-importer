<?php
namespace Starbug\Importer\Transform;

interface TransformerInterface {
  public function transform($source, $dest, $ops = []): array;
  public function getLabel($transformer): string;
}
