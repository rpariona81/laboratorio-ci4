<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    
    protected $DBGroup = 'default';
    

    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */
    /*protected function initialize()
    {
        $this->allowedFields[] = 'middlename';
    }*/

    protected $table      = 't_users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'name', 
        'email', 
        'surname_pattern', 
        'surname_mattern', 
        'document_type',
        'document_number',
        'address',
        'city',
        'ubigeo_peru',
        'mobile',
        'gender',
        'birthdate',
        'avatar',
        'status',
        'role_id',
        'career_id',
        'username',
        'password'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'username'     => 'required|alpha_numeric_space|min_length[3]',
        'email'        => 'required|valid_email|is_unique[t_users.email]',
        'password'     => 'required|min_length[8]',
        'pass_confirm' => 'required_with[password]|matches[password]',  
    ];
    protected $validationMessages   = [
        'email' => [
            'is_unique' => 'El correo indicado ya existe, por favor, registre otro.',
        ],
        'username' => [
            'is_unique' => 'El nombre de usuario indicado ya existe, por favor, registre otro.',
            'min_length' => 'El nombre de usuario debe tener al menos 3 caracteres.'
        ],
        'password' => [
            'min_length' => 'La contraseña debe tener al menos 8 caracteres.',
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // this runs after field validation
	/*protected $beforeInsert = ['hashPassword'];
	protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
	{
		if (! isset($data['data']['password'])) return $data;

		$data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_BCRYPT);
		unset($data['data']['password']);
		unset($data['data']['password_confirm']);

		return $data;
	}*/

    public function getUserBy(string $column, string $value)
    {
        return $this->where($column, $value)->first();
    }

}