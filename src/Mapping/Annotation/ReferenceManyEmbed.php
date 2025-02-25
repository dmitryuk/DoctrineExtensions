<?php

/*
 * This file is part of the Doctrine Behavioral Extensions package.
 * (c) Gediminas Morkevicius <gediminas.morkevicius@gmail.com> http://www.gediminasm.org
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gedmo\Mapping\Annotation;

use Attribute;

/**
 * @NamedArgumentConstructor
 * @Annotation
 *
 * @final since gedmo/doctrine-extensions 3.x
 */
#[Attribute(Attribute::TARGET_PROPERTY)]
class ReferenceManyEmbed extends Reference
{
}
