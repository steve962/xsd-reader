<?php

declare(strict_types=1);

namespace GoetasWebservices\XML\XSDReader\Schema;

use GoetasWebservices\XML\XSDReader\Schema\Type\Type;

abstract class Item implements SchemaItem
{
    use NamedItemTrait;
    use SchemaItemTrait;

    /**
     * @var Type|null
     */
    protected $type;

    public function __construct(Schema $schema, string $name)
    {
        $this->schema = $schema;
        $this->name = $name;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(Type $type): void
    {
        $this->type = $type;
    }

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
        $this->xsdAttributes = $xsdAttributes;
    }

}
