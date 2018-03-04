<?php
namespace Developer2010\Data\Filter;

use JMS\Serializer\Annotation as JMS;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class Select extends AbstractFilter
{
    /**
     * @ORM\Column(type="array", name="`values`")
     *
     * @JMS\Type("array")
     */
    private $values;

    public function setValues(array $values) : void
    {
        $this->values = $values;
    }

    public function getValues() : array {
        return $this->values;
    }
}