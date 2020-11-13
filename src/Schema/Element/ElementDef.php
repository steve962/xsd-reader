<?php

declare(strict_types=1);

namespace GoetasWebservices\XML\XSDReader\Schema\Element;

use GoetasWebservices\XML\XSDReader\Schema\Item;

class ElementDef extends Item implements ElementItem
{
    /**
     * @var array|null
     */
    protected $xsdAttributes = null;

    public function getXsdAttributes()
    {
        return $this->xsdAttributes;
    }

    public function setXsdAttributes(array $xsdAttributes): void
    {
        $this->setXsdAttributes = $xsdAttributes;
    }
}
