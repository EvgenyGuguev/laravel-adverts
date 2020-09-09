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
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereSort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereVariants($value)
 * @mixin \Eloquent
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
 * @property-read \Kalnoy\Nestedset\Collection|Category[] $children
 * @property-read int|null $children_count
 * @property-read Category|null $parent
 * @method static \Kalnoy\Nestedset\Collection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Category d()
 * @method static \Kalnoy\Nestedset\Collection|static[] get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @mixin \Eloquent
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
 * @property-read \Illuminate\Database\Eloquent\Collection|Region[] $children
 * @property-read int|null $children_count
 * @property-read Region|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|Region newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Region query()
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Region whereUpdatedAt($value)
 * @mixin \Eloquent
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
 * @property string|null $phone
 * @property bool $phone_verified
 * @property string|null $phone_verify_token
 * @property \Illuminate\Support\Carbon|null $phone_verify_token_expire
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $role
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneVerifyToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneVerifyTokenExpire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property bool $phone_auth
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneAuth($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

