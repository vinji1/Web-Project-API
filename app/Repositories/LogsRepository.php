<?php

namespace App\Repositories;

use App\Models\Logs;
use App\Repositories\BaseRepository;

/**
 * Class LogsRepository
 * @package App\Repositories
 * @version November 9, 2021, 10:45 am UTC
*/

class LogsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'log',
        'logdetails',
        'logtype'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Logs::class;
    }
}
