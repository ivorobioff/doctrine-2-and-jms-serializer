<?php
namespace Developer2010\Data\Filter;

use Doctrine\ORM\Mapping as ORM;

use JMS\Serializer\Annotation as JMS;

/**
 * @author Igor Vorobiov<igor.vorobioff@gmail.com>
 *
 * @ORM\Entity
 * @ORM\Table("filters")
 *
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="name", type="string")
 * @ORM\DiscriminatorMap({
 *     Developer2010\Enum\Filter::INPUT = "Input",
 *     Developer2010\Enum\Filter::SELECT = "Select"
 * })
 *
 * @JMS\Discriminator(field="name", map={
 *     Developer2010\Enum\Filter::INPUT : "Developer2010\Data\Filter\Input",
 *     Developer2010\Enum\Filter::SELECT: "Developer2010\Data\Filter\Select"
 * })
 */
abstract class AbstractFilter
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @JMS\Type("integer")
     */
    private $id;

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getId() : int
    {
        return $this->id;
    }
}