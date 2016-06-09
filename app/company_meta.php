<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company_meta extends Model
{
    public $table = "company_meta";
    public $timestamps = true;


    protected $fillable = [
        'company_id', 'type', 'continuing_education', 'government_contracting', 'importing_exporting',
        'starting_business', 'strategic_planning', 'building_business_plan', 'hiring',
        'insurance', 'site_selection', 'marketing', 'social_media', 'technology', 'connectivity', 'cybersecurity',
        'financial_assistance', 'financial_planning', 'legal_aid', 'trademark', 'permitting', 'succession_planning',
        'other', 'other_info'
    ];

}
