<?php


namespace PAXB\Tests\Mocks;


use PAXB\Xml\Binding\Annotations\XmlPhpCollection;

class ComplexEntity {

    /**
     * @XmlElementWrapper(name="primitives")
     * @XmlElement(name="primitive", type="PAXB\Tests\Mocks\PrimitiveEntity")
     * @XmlPhpCollection(value="true")
     */
    private $primitives;

    /**
     * @param mixed $primitives
     */
    public function setPrimitives($primitives)
    {
        $this->primitives = $primitives;
    }

    /**
     * @return mixed
     */
    public function getPrimitives()
    {
        return $this->primitives;
    }

}