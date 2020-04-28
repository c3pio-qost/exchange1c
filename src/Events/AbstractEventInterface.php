<?php

/**
 * This file is part of jurager/exchange1c package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Jurager\Exchange1C\Events;

/**
 * Class AbstractEventInterface.
 */
abstract class AbstractEventInterface implements \Jurager\Exchange1C\Interfaces\EventInterface
{
    public const NAME = self::class;

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}