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

namespace Vection\Component\Event\Tests\Fixtures;

use Vection\Component\Event\Annotation\Subscribe;

/**
 * Class AnnotatedTestEventHandler
 *
 * @package Vection\Component\Event\Tests\Fixtures
 *
 * @Subscribe(event="vection.annotationTested", method="onTested")
 */
class AnnotatedTestEventHandler
{
    /**
     * @param AnnotatedTestEvent $event
     */
    public function onTested(AnnotatedTestEvent $event): void
    {
        \define('TEST_ANNOTATED_EVENT_NAME', $event->getSecret());
    }
}