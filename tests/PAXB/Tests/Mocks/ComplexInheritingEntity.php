<?php
/**
 * Created by IntelliJ IDEA.
 * User: felix
 * Date: 1/22/19
 * Time: 12:26 PM
 */

namespace PAXB\Tests\Mocks;


class ComplexInheritingEntity extends ComplexEntity
{
    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}