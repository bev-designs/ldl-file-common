<?php declare(strict_types=1);

namespace LDL\File\Collection;

use LDL\File\Constants\FileTypeConstants;
use LDL\File\Directory;
use LDL\File\Validator\FileTypeValidator;
use LDL\Framework\Base\Collection\Contracts\CollectionInterface;
use LDL\Type\Collection\AbstractTypedCollection;
use LDL\Type\Collection\Traits\Validator\AppendValueValidatorChainTrait;
use LDL\Validators\ClassComplianceValidator;

final class DirectoryCollection extends AbstractTypedCollection
{
    use AppendValueValidatorChainTrait;

    public function __construct(iterable $items = null)
    {
        parent::__construct($items);

        $this->getAppendValueValidatorChain()
            ->getChainItems()
            ->append(new ClassComplianceValidator(Directory::class,true))
            ->lock();
    }

    public function append($item, $key = null): CollectionInterface
    {
        if(is_string($item)){
            $item = new Directory($item);
        }

        return parent::append($item, $key);
    }
}
