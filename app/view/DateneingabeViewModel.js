/*
 * File: app/view/DateneingabeViewModel.js
 *
 * This file was generated by Sencha Architect version 3.5.0.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 6.0.x library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 6.0.x. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('hurricane.view.DateneingabeViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.dateneingabe',

    requires: [
        'Ext.data.Store',
        'Ext.data.proxy.Memory'
    ],

    stores: {
        patients: {
            model: 'hurricane.model.Patient',
            data: [
                {
                    patientID: 482,
                    Name: 'ea',
                    Vorname: 'adipisci',
                    Geburtsdatum: '4/4/2005'
                },
                {
                    patientID: 355,
                    Name: 'eum',
                    Vorname: 'nihil',
                    Geburtsdatum: '2/4/2009'
                },
                {
                    patientID: 966,
                    Name: 'et',
                    Vorname: 'libero',
                    Geburtsdatum: '5/17/2012'
                },
                {
                    patientID: 760,
                    Name: 'fuga',
                    Vorname: 'magnam',
                    Geburtsdatum: '4/20/2008'
                },
                {
                    patientID: 268,
                    Name: 'animi',
                    Vorname: 'aut',
                    Geburtsdatum: '8/16/2010'
                },
                {
                    patientID: 379,
                    Name: 'similique',
                    Vorname: 'voluptate',
                    Geburtsdatum: '7/16/2013'
                },
                {
                    patientID: 887,
                    Name: 'sint',
                    Vorname: 'consequatur',
                    Geburtsdatum: '4/18/2010'
                },
                {
                    patientID: 580,
                    Name: 'autem',
                    Vorname: 'unde',
                    Geburtsdatum: '3/12/2005'
                },
                {
                    patientID: 5,
                    Name: 'dolore',
                    Vorname: 'doloribus',
                    Geburtsdatum: '3/27/2011'
                },
                {
                    patientID: 511,
                    Name: 'laudantium',
                    Vorname: 'fugiat',
                    Geburtsdatum: '12/17/2002'
                },
                {
                    patientID: 952,
                    Name: 'expedita',
                    Vorname: 'animi',
                    Geburtsdatum: '8/26/2001'
                },
                {
                    patientID: 116,
                    Name: 'qui',
                    Vorname: 'omnis',
                    Geburtsdatum: '6/3/2008'
                },
                {
                    patientID: 223,
                    Name: 'praesentium',
                    Vorname: 'dolorem',
                    Geburtsdatum: '7/16/2004'
                },
                {
                    patientID: 24,
                    Name: 'qui',
                    Vorname: 'architecto',
                    Geburtsdatum: '2/9/2014'
                },
                {
                    patientID: 494,
                    Name: 'animi',
                    Vorname: 'nihil',
                    Geburtsdatum: '1/17/2004'
                },
                {
                    patientID: 154,
                    Name: 'officia',
                    Vorname: 'voluptatem',
                    Geburtsdatum: '4/11/2004'
                },
                {
                    patientID: 194,
                    Name: 'et',
                    Vorname: 'in',
                    Geburtsdatum: '1/11/2010'
                },
                {
                    patientID: 361,
                    Name: 'perferendis',
                    Vorname: 'adipisci',
                    Geburtsdatum: '5/26/2009'
                },
                {
                    patientID: 309,
                    Name: 'aut',
                    Vorname: 'deleniti',
                    Geburtsdatum: '7/5/2012'
                },
                {
                    patientID: 616,
                    Name: 'doloremque',
                    Vorname: 'quis',
                    Geburtsdatum: '6/27/2002'
                },
                {
                    patientID: 573,
                    Name: 'suscipit',
                    Vorname: 'asperiores',
                    Geburtsdatum: '3/16/2005'
                },
                {
                    patientID: 740,
                    Name: 'rerum',
                    Vorname: 'nihil',
                    Geburtsdatum: '11/5/2014'
                },
                {
                    patientID: 665,
                    Name: 'sed',
                    Vorname: 'quam',
                    Geburtsdatum: '12/24/2006'
                },
                {
                    patientID: 139,
                    Name: 'deserunt',
                    Vorname: 'ex',
                    Geburtsdatum: '4/5/2009'
                },
                {
                    patientID: 735,
                    Name: 'aut',
                    Vorname: 'odio',
                    Geburtsdatum: '6/28/2003'
                },
                {
                    patientID: 161,
                    Name: 'magnam',
                    Vorname: 'qui',
                    Geburtsdatum: '9/12/2005'
                },
                {
                    patientID: 54,
                    Name: 'animi',
                    Vorname: 'voluptates',
                    Geburtsdatum: '4/2/2013'
                },
                {
                    patientID: 915,
                    Name: 'itaque',
                    Vorname: 'eos',
                    Geburtsdatum: '7/28/2007'
                },
                {
                    patientID: 41,
                    Name: 'eveniet',
                    Vorname: 'nobis',
                    Geburtsdatum: '12/13/2006'
                },
                {
                    patientID: 633,
                    Name: 'provident',
                    Vorname: 'recusandae',
                    Geburtsdatum: '7/24/2001'
                }
            ],
            proxy: {
                type: 'memory'
            }
        }
    }

});