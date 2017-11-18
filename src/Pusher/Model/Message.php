<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 3/17/17
 * Time: 2:40 PM
 */

namespace Pusher\Model;


class Message implements MessageInterface
{
    protected $text;
    protected $title;
    protected $priority;
    protected $ttl;

    /**
     * Message constructor.
     *
     * @param string $text Message
     * @param int $priority Message priority
     * @param int $ttl Message TTL
     */
    public function __construct(string $text, string $title, int $priority = MessageInterface::PRIORITY_HIGH, int $ttl = 3600)
    {
        $this->text = $text;
        $this->title = $title;
        $this->priority = $priority;
        $this->ttl = $ttl;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public function getText():string
    {
        return $this->text;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setPriority(int $priority)
    {
        $this->priority = $priority;
    }

    public function getPriority():int
    {
        return (int) $this->priority;
    }

    public function setTTL(int $ttl)
    {
        $this->ttl = $ttl;
    }

    public function getTTL():int
    {
        return $this->ttl;
    }
}