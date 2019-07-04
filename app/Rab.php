<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rab extends Model
{
    protected $table="rab";
    protected $primaryKey="id";
    protected $fillable = ['KODE_POS', 'KATEGORI', 'KODE_SUB', 'URAIAN', 'JML_MATA_ANGG', 'JML_POS', 'JML_TOTAL'];
}