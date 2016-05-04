<?php

namespace Mhor\MediaInfo\Attribute;

class Rate implements AttributeInterface
{
    /**
     * @var int
     */
    private $absoluteValue;

    /**
     * @var string
     */
    private $textValue;

    /**
     * @param $absoluteValue
     * @param $textValue
     */
    public function __construct($absoluteValue, $textValue)
    {
        $this->absoluteValue = $absoluteValue;
        $this->textValue = $textValue;
    }

    /**
     * @return int
     */
    public function getAbsoluteValue()
    {
        return $this->absoluteValue;
    }

    /**
     * @return string
     */
    public function getTextValue()
    {
        return $this->textValue;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->textValue;
    }
}
