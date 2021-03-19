<?php


namespace Package\Domain;


class StringType implements \JsonSerializable
{
    /** @var string */
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return  string
     */
    public function value(): string
    {
        return $this->value;
    }

    /**
     * @param string value
     * @return  static
     */
    public static function of(string $value): static
    {
        return new static($value);
    }

    public function jsonSerialize()
    {
        return $this->value;
    }
}
