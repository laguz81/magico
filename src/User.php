<?php

namespace Styde;

/**
 * Description of User
 *
 * @author Usuario
 */
class User {

    protected $attributes = [];

    public function __construct(array $attributes = []) {
        $this->attributes = $attributes;
    }

    public function __get($name){
        return $this->attributes[$name];
    }
}
