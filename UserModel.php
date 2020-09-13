<?php

namespace jamielong\phpmvc;

use jamielong\phpmvc\db\DbModel;

/**
 * Class UserModel
 * @package jamielong\phpmvc
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}