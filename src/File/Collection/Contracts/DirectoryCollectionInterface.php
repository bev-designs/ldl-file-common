<?php declare(strict_types=1);

namespace LDL\File\Collection\Contracts;

use LDL\Framework\Base\Contracts\ArrayFactoryInterface;
use LDL\Framework\Base\Contracts\IterableFactoryInterface;
use LDL\Type\Collection\TypedCollectionInterface;

/**
 * Interface DirectoryCollectionInterface
 * @package LDL\File\Collection\Contracts
 *
 * There are no custom methods *yet*
 */

interface DirectoryCollectionInterface extends TypedCollectionInterface, IterableFactoryInterface, ArrayFactoryInterface
{

}