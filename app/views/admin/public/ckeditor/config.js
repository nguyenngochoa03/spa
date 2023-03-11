/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
  config.filebrowserBrowseUrl = 'http://localhost/spa/app/views/admin/public/ckeditor/ckfinder/ckfinder.html';
  config.filebrowserUploadUrl = 'http://localhost/spa/app/views/admin/public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
};
