<?php

namespace App\Traits;

trait HasSubscriptions
{
  public function subscriptions()
  {
    return $this->hasMany('App\Models\Subscription');
  }
}
