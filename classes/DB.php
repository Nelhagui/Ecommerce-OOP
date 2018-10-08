<?php

abstract class DB
{
    public abstract function dbConnect();
    public abstract function dbEmailSearch($email);
    public abstract function saveUser($user);
}

