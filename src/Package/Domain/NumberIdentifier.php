<?php


namespace Package\Domain;


class NumberIdentifier implements \JsonSerializable
{
    /** @var int */
    private int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * @return  int
     */
    public function value(): int
    {
        return $this->value;
    }

    /**
     * @param int value
     * @return  static
     */
    public static function of(int $value): static
    {
        return new static($value);
    }

    public function jsonSerialize()
    {
        return $this->value;
    }
}
