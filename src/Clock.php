<?php
namespace Cl\Clock;

use Psr\Clock\ClockInterface;

class Clock implements ClockInterface
{
    /**
     * Returns the current time as a DateTimeImmutable object.
     *
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable();
    }

    /**
     * Returns the current time in a specific time zone.
     *
     * @param string $timeZone
     * @return \DateTimeImmutable
     */
    public function nowInTimeZone(string $timeZone): \DateTimeImmutable
    {
        return new \DateTimeImmutable('now', new \DateTimeZone($timeZone));
    }
}
