<?php

namespace App\Repositories\Impl;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
   public function store($request);
   public function update($request);
}
