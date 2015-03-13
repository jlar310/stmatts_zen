/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
 if (typeof CKEDITOR != "undefined") {
CKEDITOR.addStylesSet( 'drupal',
[
    /* Object Styles */
    {
        name : 'Image Left',
        element : 'img',
        attributes :
        {
            'class' : 'image-left',
            'style' : 'float: left;'
            
        }
    },

    {
        name : 'Image Center',
        element : 'img',
        attributes :
        {
            'class' : 'image-center'
        }
    },

    {
        name : 'Image Right',
        element : 'img',
        attributes :
        {
            'class' : 'image-right',
            'style' : 'float: right;'
        }
    }
]);
}
