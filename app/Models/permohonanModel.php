<?php namespace App\Models;

use CodeIgniter\Model;

class permohonanModel extends Model
{
    protected $table      = 'permohonan';
    protected $primaryKey = 'id_p';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nik','name','email','address','birthday','password','phone1','phone2','id_eStatus','level','photo'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


   
}