CKEDITOR.plugins.add( 'inserticons',
{
	init: function( editor )
	{
		editor.addCommand( 'inserticonsDialog',new CKEDITOR.dialogCommand( 'inserticonsDialog' ) );
		editor.ui.addButton( 'inserticons',
		{
			label: 'Insérer un média',
			title: 'Insérer un média',
			command: 'inserticonsDialog',
			icon: this.path + 'images/inserticons.png'
		} );
		CKEDITOR.dialog.add( 'inserticonsDialog', function ( editor )
		{
                    var mesIcones=new Array();
                    $.ajax({
                        url: "vendor/index.php/toolsController/getIcones", 
                        dataType: 'JSON',
                        type: 'GET',
                        contentType: "application/json",
                        async:false,
                        success: function(data){
                            if(data.success){
                                mesIcones=data.donnees;
                            }
                        },
                        error: function(data) { 
                            alert("Une erreur est survenue lors de la récupération des variables");
                            return false;
                        }
                    });
                    
                    
			return {
				title : 'Insérer un icone',
				minWidth : 500,
				minHeight : 150,
				contents :
				[
					{
						id : 'contenuDocuments',
						label : 'Documents',
						elements :
						[
							{
								type: 'img',
                                                                id: 'filtre',
                                                                width: 200,
                                                                label: 'Selectionner l\'icone à insérer :',
                                                                items: mesIcones
                                                                
							}
						]
					}
				],
				onOk : function()
				{
					
					var dialog = this;
					var inserticons = editor.document.createElement( 'span' );
                                        
                                        var CurrObj = CKEDITOR.dialog.getCurrent();
					inserticons.setHtml( dialog.getValueOf( CurrObj.definition.dialog._.currentTabId, 'filtre' ) );
					editor.insertElement( inserticons );
				}
			};
		} );
	}
} );