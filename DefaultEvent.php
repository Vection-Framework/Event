<?php

/**
 * This file is part of the Vection project.
 * Visit project at https://www.vection.org
 *
 *  (c) Vection <project@vection.org>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace Vection\Component\Event;

/**
 * Class DefaultEvent
 *
 * @package Vection\Component\Event
 */
class DefaultEvent extends Event
{
    /**
     * The name of the event.
     *
     * @var string
     */
    protected $eventName;

    /**
     * DefaultEvent constructor.
     *
     * @param string $eventName
     */
    public function __construct(string $eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * Returns the name of this event.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->eventName;
    }
}