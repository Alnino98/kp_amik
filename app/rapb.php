<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapb extends Model
{
    protected $table="rapb";
    protected $primaryKey="id";
    protected $fillable = ['URAIAN_RAPB', 'KATEGORI_RAPB', 'SEMESTER', 'JML_MHS', 'JML_SKS', 'BESARNYA', 'JML_100', 'JML_90'];
}