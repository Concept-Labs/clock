<?php
namespace Cl\Clock;

use Psr\Clock\ClockInterface;

class Clock implements ClockInterface
{
    private ?string $timezone = null;
    /**
     * Returns the current time as a DateTimeImmutable object.
     *
     * @return \DateTimeImmutable
     */
    public function now(): \DateTimeImmutable
    {
        return new \DateTimeImmutable("now", $this->timezone);
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

    /**
     * Returns Clock with timezone
     *
     * @param string $timeZone
     * @return ClockInterface
     */
    public function withTimeZone(string $timeZone): ClockInterface
    {
        $clone = clone $this;
        $clone->timezone = $timeZone;

        return $clone;
    }

}
