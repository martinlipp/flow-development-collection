<?php
namespace Neos\Flow\Tests\Functional\Aop\Fixtures;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;

/**
 * An aspect for testing trait introduction
 *
 * @Flow\Introduce("class(Neos\Flow\Tests\Functional\Aop\Fixtures\TargetClass01)", traitName="Neos\Flow\Tests\Functional\Aop\Fixtures\Introduced01Trait")
 * @Flow\Aspect
 */
class TraitIntroductionTestingAspect
{
}
