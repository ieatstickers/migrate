<?php

namespace Electra\Migrate\Event\MigrateAll;

use Electra\Core\Event\AbstractResponse;

class MigrateAllResponse extends AbstractResponse
{
  /** @var bool */
  public $success;

  /** @var int */
  public $executedMigrationsCount;

  /** @return MigrateAllResponse */
  public static function create(): MigrateAllResponse
  {
    return new self();
  }
}