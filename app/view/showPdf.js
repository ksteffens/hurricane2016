/**
 * Created by ksteffens on 16.06.17.
 */
Ext.define('hurricane.view.showPdf', {
    extend: 'Ext.panel.Panel',

    title: 'My PDF',
    width: 600,
    height: 400,
    items: {
        xtype: 'component',
        autoEl: {
            tag: 'iframe',
            style: 'height: 100%; width: 100%; border: none',
            src: 'resources/Protokolle/0001.pdf'
        }
    }
});