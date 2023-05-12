<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleModel extends Model
{
    
    //protected $DBGroup = 'group_name';
    

    /**
     * Called during initialization. Appends
     * our custom field to the module's model.
     */
    /*protected function initialize()
    {
        $this->allowedFields[] = 'middlename';
    }*/

    protected $table      = 't_roles';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'rolename', 
        'slug', 
        'description', 
        'level'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    

    // Validation
    protected $validationRules      = [
        'rolename'     => 'required|alpha_numeric_space|min_length[3]|is_unique[t_roles.rolename]'
    ];
    protected $validationMessages   = [
        'rolename' => [
            'is_unique' => 'Ya existe un rol con esta denominación.',
        ]
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // this runs after field validation

}