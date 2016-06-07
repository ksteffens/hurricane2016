<?php
/**
 * Created by PhpStorm.
 * User: ksteffens
 * Date: 18.05.16
 * Time: 18:33
 */

function get_extdirect_api()
{

    $API = array(
        'QueryDatabase' => array(
            'methods' => array(
                'readPatient' => array(
                    'len' => 1
                ),
                'createPatient' => array(
                    'len' => 1
                ),
                'deletePatient' => array(
                    'len' => 1
                ),
                'updatePatient' => array(
                    'len' => 1
                )
            )
        ),
        'GenderQuery' => array(
            'methods' => array(
                'getGender' => array(
                    'len' => 1
                )
            )
        ),
        'DiagnoseQuery' => array(
            'methods' => array(
                'getDiagnose' => array(
                    'len' => 1
                )
            )
        ),
        'AufnahmeQuery' => array(
            'methods' => array(
                'getAufnahme' => array(
                    'len' => 1
                )
            )
        ),
        'AbgangQuery' => array(
            'methods' => array(
                'getAbgang' => array(
                    'len' => 1
                )
            )
        ),
        'ProtokollQuery' => array(
            'methods' => array(
                'readProtokoll' => array(
                    'len' => 1
                ),
                'createProtokoll' => array(
                    'len' => 1
                ),
                'deleteProtokoll' => array(
                    'len' => 1
                ),
                'updateProtokoll' => array(
                    'len' => 1
                )
            )
        )
    );

    return $API;
}