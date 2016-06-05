<?php
/**
 * Created by PhpStorm.
 * User: ksteffens
 * Date: 18.05.16
 * Time: 18:33
 */

function get_extdirect_api()
{

    $API = [
        'QueryDatabase' => [
            'methods' => [
                'readPatient' => [
                    'len' => 1
                ],
                'createPatient' => [
                    'len' => 1
                ],
                'deletePatient' => [
                    'len' => 1
                ],
                'updatePatient' => [
                    'len' => 1
                ]
            ]
        ],
        'GenderQuery' => [
            'methods' => [
                'getGender' => [
                    'len' => 1
                ]
            ]
        ],
        'DiagnoseQuery' => [
            'methods' => [
                'getDiagnose' => [
                    'len' => 1
                ]
            ]
        ],
        'AufnahmeQuery' => [
            'methods' => [
                'getAufnahme' => [
                    'len' => 1
                ]
            ]
        ],
        'AbgangQuery' => [
            'methods' => [
                'getAbgang' => [
                    'len' => 1
                ]
            ]
        ],
        'ProtokollQuery' => [
            'methods' => [
                'readProtokoll' => [
                    'len' => 1
                ],
                'createProtokoll' => [
                    'len' => 1
                ],
                'deleteProtokoll' => [
                    'len' => 1
                ],
                'updateProtokoll' => [
                    'len' => 1
                ]
            ]
        ]
    ];

    return $API;
}