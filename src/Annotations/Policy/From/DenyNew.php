<?php
namespace Indaxia\OTR\Annotations\Policy\From;

use \Indaxia\OTR\Annotations\Policy\Interfaces;
use \Doctrine\ORM\Mapping as ORM;

/** ITransformable policy.
 * Don't create a new sub-Entity or scalar when it needed, skip instead in ITransformabe::fromArray.
 * It's applicable to Collection too.
 * It's applicable to scalar fields: it denies to set the new value if the value is empty.
 * Note: it won't work with non-nullable numbers. Numbers cannot be "empty". @see DenyUpdate
 * It's not inherited from parent's policy (!). Specify inside() to change behaviour.
 * @Annotation */
class DenyNew
    extends \Indaxia\OTR\Annotations\Annotation
    implements Interfaces\DenyNewFrom {

    public $priority = 0.6;
    public $propagating = false;
}