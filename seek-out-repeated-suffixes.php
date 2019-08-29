<?php

class Stats {
    private $user;

    /**
     * Stats constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function favorites()
    {

    }

    public function watchLaters()
    {

    }

    public function completions()
    {

    }

    public function experience()
    {

    }

}

class User {

    public function state() {
        return new Stats($this);
    }
}

(new User())->state()->completions();