<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 3/17/17
 * Time: 2:44 PM
 */

namespace Pusher\Model;


interface MessageInterface
{
    const PRIORITY_NORMAL = 0;
    const PRIORITY_HIGH = 1;

    public function __construct(string $text, string $title, int $priority = self::PRIORITY_HIGH, int $ttl = 3600);

    public function setText(string $text);

    public function getText():string;

    public function getTitle():string;

    public function setTitle(string $title);

    public function setPriority(int $priority);

    public function getPriority():int;

    public function setTTL(int $ttl);

    public function getTTL():int;
}