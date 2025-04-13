<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public static function all():Collection;
    public static function create(array $args):Model|array;
    public static function find(int $id):Model|null;
    public static function delete(int $id):int;
    public static function update(int $id, array $args):int;
    public static function loadModel():Model;
}
