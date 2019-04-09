<?php declare(strict_types=1);

namespace Swag\CustomEntity\Custom;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CreatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\UpdatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class CustomEntityDefinition extends EntityDefinition
{
    public static function getEntityName(): string
    {
        return 'custom_entity';
    }

    protected static function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new PrimaryKey(), new Required()),
            new StringField('technical_name', 'technicalName'),
            new CreatedAtField(),
            new UpdatedAtField(),
        ]);
    }

    public static function getCollectionClass(): string
    {
        return CustomEntityCollection::class;
    }

    public static function getEntityClass(): string
    {
        return CustomEntity::class;
    }
}