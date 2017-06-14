/*
 * File: app/view/Statistik.js
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

Ext.define('hurricane.view.Statistik', {
    extend: 'Ext.tab.Panel',
    alias: 'widget.statistik',

    requires: [
        'hurricane.view.StatistikViewModel',
        'hurricane.view.StatistikViewController',
        'Ext.tab.Tab',
        'Ext.form.field.Display',
        'Ext.chart.PolarChart',
        'Ext.chart.series.Pie',
        'Ext.chart.series.sprite.PieSlice',
        'Ext.chart.interactions.Rotate',
        'Ext.chart.CartesianChart',
        'Ext.chart.axis.Category',
        'Ext.chart.axis.Numeric',
        'Ext.chart.series.Bar'
    ],

    controller: 'statistik',
    viewModel: {
        type: 'statistik'
    },
    manageHeight: false,
    activeTab: 0,

    items: [
        {
            xtype: 'panel',
            title: 'Überblick',
            listeners: {
                beforeshow: 'onPanelBeforeShow',
                afterrender: 'onPanelAfterRender'
            },
            items: [
                {
                    xtype: 'container',
                    padding: '50 0 0 50',
                    items: [
                        {
                            xtype: 'displayfield',
                            id: 'txtPatientGesamt',
                            fieldLabel: 'Gesamt Behandlungen',
                            labelWidth: 150,
                            value: 'Display Field'
                        }
                    ]
                },
                {
                    xtype: 'polar',
                    minHeight: 100,
                    colors: [
                        '#115fa6',
                        '#94ae0a',
                        '#a61120',
                        '#ff8809',
                        '#ffd13e',
                        '#a61187',
                        '#24ad9a',
                        '#7c7474',
                        '#a66111'
                    ],
                    store: 'StatistikGeschlecht',
                    series: [
                        {
                            type: 'pie',
                            label: {
                                field: 'x',
                                display: 'rotate',
                                contrast: true,
                                font: '12px Arial'
                            },
                            xField: 'y',
                            yField: 'Anzahl'
                        }
                    ],
                    interactions: [
                        {
                            type: 'rotate'
                        }
                    ]
                }
            ]
        },
        {
            xtype: 'panel',
            layout: 'fit',
            title: 'Aufnahme',
            items: [
                {
                    xtype: 'cartesian',
                    height: 250,
                    margin: 75,
                    maxWidth: 900,
                    width: 400,
                    animation: {
                        easing: 'backOut',
                        duration: 500
                    },
                    insetPadding: 20,
                    store: 'StatistikAufnahme',
                    axes: [
                        {
                            type: 'category',
                            fields: [
                                'Beschreibung'
                            ],
                            title: 'Aufnahme Ort',
                            position: 'bottom'
                        },
                        {
                            type: 'numeric',
                            fields: [
                                'Anzahl'
                            ],
                            increment: 1,
                            position: 'left',
                            title: 'Anzahl'
                        }
                    ],
                    series: [
                        {
                            type: 'bar',
                            highlight: {
                                strokeStyle: 'black',
                                fillStyle: 'gold',
                                lineDash: [
                                    5,
                                    3
                                ]
                            },
                            label: {
                                field: 'Anzahl',
                                display: 'insideEnd'
                            },
                            style: {
                                minGapWidth: 20
                            },
                            xField: 'Beschreibung',
                            yField: [
                                'Anzahl'
                            ]
                        }
                    ]
                }
            ],
            listeners: {
                show: 'onPanelShow'
            }
        },
        {
            xtype: 'panel',
            manageHeight: false,
            title: 'Diagnoseschlüssel',
            items: [
                {
                    xtype: 'cartesian',
                    height: 400,
                    margin: 75,
                    maxWidth: 900,
                    manageHeight: false,
                    animation: {
                        easing: 'backOut',
                        duration: 500
                    },
                    insetPadding: 20,
                    store: 'StatistikDiagnose',
                    axes: [
                        {
                            type: 'category',
                            fields: [
                                'Beschreibung'
                            ],
                            label: {
                                rotate: {
                                    degrees: 270
                                }
                            },
                            title: 'Diagnoseschlüssel',
                            position: 'bottom'
                        },
                        {
                            type: 'numeric',
                            fields: [
                                'Anzahl'
                            ],
                            increment: 1,
                            position: 'left',
                            title: 'Anzahl'
                        }
                    ],
                    series: [
                        {
                            type: 'bar',
                            highlight: {
                                strokeStyle: 'black',
                                fillStyle: 'gold',
                                lineDash: [
                                    5,
                                    3
                                ]
                            },
                            label: {
                                field: 'Anzahl',
                                display: 'insideEnd'
                            },
                            style: {
                                minGapWidth: 20
                            },
                            xField: 'Beschreibung',
                            yField: [
                                'Anzahl'
                            ]
                        }
                    ]
                }
            ],
            listeners: {
                show: 'onPanelShow1'
            }
        },
        {
            xtype: 'panel',
            title: 'Abgang',
            items: [
                {
                    xtype: 'cartesian',
                    height: 400,
                    margin: 75,
                    maxWidth: 900,
                    manageHeight: false,
                    animation: {
                        easing: 'backOut',
                        duration: 500
                    },
                    insetPadding: 20,
                    store: 'StatistikAbgang',
                    axes: [
                        {
                            type: 'category',
                            fields: [
                                'Beschreibung'
                            ],
                            title: 'Abgang',
                            position: 'bottom'
                        },
                        {
                            type: 'numeric',
                            fields: [
                                'Anzahl'
                            ],
                            increment: 1,
                            majorTickSteps: 1,
                            position: 'left',
                            title: 'Anzahl'
                        }
                    ],
                    series: [
                        {
                            type: 'bar',
                            highlight: {
                                strokeStyle: 'black',
                                fillStyle: 'gold',
                                lineDash: [
                                    5,
                                    3
                                ]
                            },
                            label: {
                                field: 'Anzahl',
                                display: 'insideEnd'
                            },
                            style: {
                                minGapWidth: 20
                            },
                            xField: 'Beschreibung',
                            yField: [
                                'Anzahl'
                            ]
                        }
                    ]
                }
            ],
            listeners: {
                show: 'onPanelShow2'
            }
        }
    ]

});