<?php
namespace ScorpioT1000\OTR\Annotations\Policy\To;

use \ScorpioT1000\OTR\Annotations\Policy\Interfaces;
use \Doctrine\ORM\Mapping as ORM;

/** ITransformable policy.
 * Excludes the field from ITransformabe::toArray result. Opposite to Accept.
 * @Annotation */
class Skip
    extends \ScorpioT1000\OTR\Annotations\Annotation
    implements Interfaces\SkipTo
{        
    public function inside(array $policy) {
        throw new \ScorpioT1000\OTR\Exceptions\PolicyException("Policy\\To\\Skip cannot contain policies");
    }

    public $priority = 0.9;
}