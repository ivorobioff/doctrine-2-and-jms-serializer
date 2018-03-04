<?php
namespace Developer2010\Data\Filter;

use JMS\Serializer\Annotation as JMS;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 *
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 */
class Input extends AbstractFilter
{
    /**
     * @ORM\Column(type="string")
     *
     * @JMS\Type("string")
     */
    private $placeholder;

    public function setPlaceholder(string $placeholder) : void
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @return string
     */
    public function getPlaceholder() : string
    {
        return $this->placeholder;
    }
}