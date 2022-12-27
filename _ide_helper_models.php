<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $slug
 * @property string $category
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Production[] $prods
 * @property-read int|null $prods_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Production
 *
 * @property int $id
 * @property string $slug
 * @property string $line
 * @property int|null $brute_j
 * @property int|null $conforme_j
 * @property int|null $rebut_j
 * @property int|null $brute_m
 * @property int|null $conforme_m
 * @property int|null $rebut_m
 * @property int|null $taux_real
 * @property int|null $taux_rebut
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $cateogry_id
 * @property int $user_id
 * @property int|null $unit_id
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Unit|null $unit
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Production filter(array $filters)
 * @method static \Illuminate\Database\Eloquent\Builder|Production newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Production newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Production query()
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereBruteJ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereBruteM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereCateogryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereConformeJ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereConformeM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereRebutJ($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereRebutM($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereTauxReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereTauxRebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereUnitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Production whereUserId($value)
 */
	class Production extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Unit
 *
 * @property int $id
 * @property string $slug
 * @property string $code
 * @property string $loc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Production[] $prods
 * @property-read int|null $prods_count
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereLoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $username
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Production[] $prods
 * @property-read int|null $prods_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

