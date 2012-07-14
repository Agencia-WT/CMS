require(["jquery"], function($) {
	


	// Faz o load do script de editor apenas se o textarea existir
	if( $('#ckeditor').length > 0 ) {
			require([ "../../ckeditor/ckeditor"],function($) {
				CKEDITOR.replace( 'ckeditor',
					{
						fullPage : true,
						toolbar: 
						[
							{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
							{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','Scayt' ] },
							{ name: 'insert', items : [ 'Image','Flash','Table','SpecialChar' ] },     
							{ name: 'styles', items : [ 'Styles','Format','FontSize' ] },
							{ name: 'basicstyles', items : [ 'Bold','Italic','Strike','-','RemoveFormat' ] },
							'/',
							{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
		'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
							{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
							{ name: 'tools', items : [ 'Maximize' ] }
						],
			      filebrowserBrowseUrl : '/browser/browse.php',
			      filebrowserUploadUrl : '/uploader/upload.php'						
					});
			})
		}



});
