<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Entity\Adverts{
/**
 * App\Entity\Adverts\Attribute
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $name
 * @property string $type
 * @property int $required
 * @property array $variants
 * @property int $sort
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Attribute whereVariants($value)
 */
	class Attribute extends \Eloquent {}
}

namespace App\Entity\Adverts{
/**
 * App\Entity\Adverts\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entity\Adverts\Attribute[] $attributes
 * @property-read int|null $attributes_count
 * @property-read \Kalnoy\Nestedset\Collection|\App\Entity\Adverts\Category[] $children
 * @property-read int|null $children_count
 * @property-read \App\Entity\Adverts\Category|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Adverts\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Adverts\Category whereSlug($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Entity{
/**
 * App\Entity\Region
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Entity\Region[] $children
 * @property-read int|null $children_count
 * @property-read \App\Entity\Region|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Region whereUpdatedAt($value)
 */
	class Region extends \Eloquent {}
}

namespace App\Entity{
/**
 * App\Entity\User
 *
 * @property int $id
 * @property string $name
 * @property string|null $last_name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $role
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

