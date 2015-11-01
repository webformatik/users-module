<?php namespace Anomaly\UsersModule\Role\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\UsersModule\User\UserCollection;

/**
 * Interface RoleInterface
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\RoleInterface\Contract
 */
interface RoleInterface extends EntryInterface
{

    /**
     * Get the role's slug.
     *
     * @return string
     */
    public function getSlug();

    /**
     * Get the role's name.
     *
     * @return string
     */
    public function getName();

    /**
     * Get the role's permissions.
     *
     * @return array
     */
    public function getPermissions();

    /**
     * Set the permissions.
     *
     * @param array $permissions
     * @return $this
     */
    public function setPermissions(array $permissions);

    /**
     * Return if a role as access to a the permission.
     *
     * @param string $permission
     * @return bool
     */
    public function hasPermission($permission);

    /**
     * Get the related users.
     *
     * @return UserCollection
     */
    public function getUsers();

    /**
     * Return the users relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users();
}
