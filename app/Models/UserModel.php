<?php

namespace App\Models;

use CodeIgniter\Model;
use Faker\Generator;
use Myth\Auth\Authorization\GroupModel;
// use Myth\Auth\Entities\User;

/**
 * @method User|null first()
 */
class UserModel extends Model
{
    public function getTeacher($id = null){
        if($id != null){
            return $this->select('users.id, users.email, users.username, teachers.id_users, teachers.nama_teachers, teachers.class, teachers.email')
            ->join('teachers', 'teachers.id_users = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->find($id);
        }
        return $this->select('users.id, users.email, users.username, teachers.id_users, teachers.nama_teachers, teachers.class')
            ->join('teachers', 'teachers.id_users = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->findAll();
    }

    public function getStudent($id = null){
        if($id != null){
            return $this->select('users.id, users.email, users.username, students.id_users, students.name, students.claass')
            ->join('students', 'students.id_users = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->find($id);
        }
        return $this->select('users.id, users.email, users.username, students.id_users, students.name, students.claass')
            ->join('students', 'students.id_users = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->findAll();
    }

    public function getParent($id = null){
        if($id != null){
            return $this->select('users.id, users.email, users.username, parents.id_users, parents.name')
            ->join('parents', 'parents.id_users = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->find($id);
        }
        return $this->select('users.id, users.email, users.username, parents.id_users, parents.name')
            ->join('parents', 'parents.id_users = users.id')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->findAll();
    }


    // protected $table          = 'users';
    // protected $primaryKey     = 'id';
    // protected $returnType     = 'array';
    // protected $useSoftDeletes = false;
    // protected $allowedFields  = [
    //     'email', 'username', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
    //     'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    // ];
    // protected $useTimestamps   = true;
    // protected $validationRules = [
    //     'email'         => 'required|valid_email|is_unique[users.email,id,{id}]',
    //     'username'      => 'required|alpha_numeric_punct|min_length[3]|max_length[30]|is_unique[users.username,id,{id}]',
    //     'password_hash' => 'required',
    // ];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
    // protected $afterInsert        = ['addToGroup'];

    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'email', 'username', 'password_hash', 'active'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    /**
     * The id of a group to assign.
     * Set internally by withGroup.
     *
     * @var int|null
     */
    protected $assignGroup;

    /**
     * Logs a password reset attempt for posterity sake.
     */
    public function logResetAttempt(string $email, ?string $token = null, ?string $ipAddress = null, ?string $userAgent = null)
    {
        $this->db->table('auth_reset_attempts')->insert([
            'email'      => $email,
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'token'      => $token,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Logs an activation attempt for posterity sake.
     */
    public function logActivationAttempt(?string $token = null, ?string $ipAddress = null, ?string $userAgent = null)
    {
        $this->db->table('auth_activation_attempts')->insert([
            'ip_address' => $ipAddress,
            'user_agent' => $userAgent,
            'token'      => $token,
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }

    /**
     * Sets the group to assign any users created.
     *
     * @return $this
     */
    public function withGroup(string $groupName)
    {
        $group = $this->db->table('auth_groups')->where('name', $groupName)->get()->getFirstRow();

        $this->assignGroup = $group->id;

        return $this;
    }
    public function updateUser($data, $id){
        return $this->update($id, $data);
    }
    /**
     * Clears the group to assign to newly created users.
     *
     * @return $this
     */
    public function clearGroup()
    {
        $this->assignGroup = null;

        return $this;
    }

    /**
     * If a default role is assigned in Config\Auth, will
     * add this user to that group. Will do nothing
     * if the group cannot be found.
     *
     * @param mixed $data
     *
     * @return mixed
     */
    protected function addToGroup($data)
    {
        if (is_numeric($this->assignGroup)) {
            $groupModel = model(GroupModel::class);
            $groupModel->addUserToGroup($data['id'], $this->assignGroup);
        }

        return $data;
    }

    /**
     * Faked data for Fabricator.
     */
    public function fake(Generator &$faker): User
    {
        return new User([
            'email'    => $faker->email,
            'username' => $faker->userName,
            'password' => bin2hex(random_bytes(16)),
        ]);
    }

    public function deleteUser($id){
        return $this->delete($id);
    }


    public function getStudents($id = null){
        if($id != null){
            return $this->find($id);
        }
        return $this->findAll();
    }

    public function updateStudents($id, $data){
        return $this->update($id, $data);
    }

    
}
