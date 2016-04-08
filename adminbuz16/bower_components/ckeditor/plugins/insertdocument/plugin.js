CKEDITOR.plugins.add( 'insertdocument',
{
	init: function( editor )
	{
		editor.addCommand( 'insertdocumentDialog',new CKEDITOR.dialogCommand( 'insertdocumentDialog' ) );
		editor.ui.addButton( 'insertdocument',
		{
			label: 'Insérer un média',
			title: 'Insérer un média',
			command: 'insertdocumentDialog',
			icon: this.path + 'images/sareremplace.png'
		} );
		CKEDITOR.dialog.add( 'insertdocumentDialog', function ( editor )
		{
                    var variables;
                    $.ajax({
                        url: "vendor/index.php/mediasController/getAllMedias", 
                        dataType: 'JSON',
                        type: 'GET',
                        contentType: "application/json",
                        async:false,
                        success: function(data){
                            if(data.success){
                                variables=data.donnees;
                            }
                        },
                        error: function(data) { 
                            alert("Une erreur est survenue lors de la récupération des variables");
                            return false;
                        }
                    });
                    var mesDocuments=[];
                    var mesImages=[];
                    var i = 0;
                    var j = 0;
                    for(var e in variables){
                        
                        if(variables[e].type=="document"){
                            var extension = variables[e].urlRelatif.split('.');                            
                            mesDocuments[i]=[variables[e].nom,"<a class='document"+extension[extension.length-1]+"' target='_blank' href='"+variables[e].urlRelatif+"'>"+variables[e].nom+"</a>"];
                            i++;
                        }
                        else if(variables[e].type=="photos"){
                            mesImages[j]=[variables[e].nom,"<img src='"+variables[e].rep+"'>"];
                            j++;
                        }
                    }
                    console.log(mesDocuments);
			return {
				title : 'Insérer un média',
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
								type: 'select',
                                                                id: 'filtre',
                                                                width: 200,
                                                                label: 'Selectionner l\'élèment à insérer :',
                                                                items: mesDocuments
                                                                
							}
						]
					},
                                        {
						id : 'contenuImages',
						label : 'Images/Photos',
						elements :
						[
							{
								type: 'select',
                                                                id: 'filtre',
                                                                width: 200,
                                                                label: 'Selectionner l\'élèment à insérer :',
                                                                items: mesImages
                                                                
							}
						]
					}
				],
				onOk : function()
				{
					
					var dialog = this;
					var insertdocument = editor.document.createElement( 'span' );
                                        
                                        var CurrObj = CKEDITOR.dialog.getCurrent();
					insertdocument.setHtml( dialog.getValueOf( CurrObj.definition.dialog._.currentTabId, 'filtre' ) );
					editor.insertElement( insertdocument );
				}
			};
		} );
	}
} );