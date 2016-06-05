/*
 * File: app/view/EditPatientViewController1.js
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

Ext.define('hurricane.view.EditPatientViewController1', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.addpatient',

    onSave: function(button, e, eOpts) {
        var form = this.getReferences().form,
            values = form.getForm().getValues(),
            store = Ext.getStore('Patient'),
            record = form.getRecord();
        record.set(values);

        // Valid
        if (form.isValid()) {

            //store.update(record);
            store.sync({
                success:function() {
                    store.load();
                }

            });



        }
        Ext.getCmp('editPanel').close();


    },

    onCancel: function(button, e, eOpts) {
        var form = this.getReferences().form;
        Ext.getCmp('editPanel').close();
    }

});