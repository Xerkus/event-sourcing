<?php
/**
 * This file is part of the prooph/event-sourcing.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ProophTest\EventSourcing\Mock\JsonSerializable;

use ProophTest\EventSourcing\Mock\User as UserRoot;

class User extends UserRoot implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'version' => $this->version,
            'recordedEvents' => $this->recordedEvents,
        ];
    }
}