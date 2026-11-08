<?php
namespace Starbug\Importer\Read\Traits;

use Starbug\Importer\Transform\TransformerInterface;

trait Transformers {
  protected $transformers = [];
  public function addTransformer(TransformerInterface $transformer, $params = []) {
    $this->transformers[] = compact("transformer", "params");
  }
  protected function applyTransformers($source, $dest) {
    foreach ($this->transformers as $transform) {
      $dest = $transform["transformer"]
        ->transform($source, $dest, $transform["params"]);
    }
    return $dest;
  }
}
