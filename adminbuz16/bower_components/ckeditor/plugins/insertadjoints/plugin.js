CKEDITOR.plugins.add( 'insertadjoints',
{
	init: function( editor )
	{
		editor.addCommand( 'insertadjointsDialog',new CKEDITOR.dialogCommand( 'insertadjointsDialog' ) );
		editor.ui.addButton( 'insertadjoints',
		{
			label: 'Insérer un adjoint',
			title: 'Insérer un adjoint',
			command: 'insertadjointsDialog',
			icon: this.path + 'images/insertadjoints.png'
		} );
		CKEDITOR.dialog.add( 'insertadjointsDialog', function ( editor )
		{
                    var variables;
                    $.ajax({
                        url: "vendor/index.php/trombinoscopeController/getPersonnes", 
                        dataType: 'JSON',
                        type: 'GET',
                        contentType: "application/json",
                        async:false,
                        success: function(data){
                            if(data.success){
                                variables=data.donnees;
                                baseurl=data.base;
                            }
                        },
                        error: function(data) { 
                            alert("Une erreur est survenue lors de la récupération des personnes");
                            return false;
                        }
                    });
                    var mesAdjoints=[];
                    var j = 0;
                    for(var e in variables){
			var imgAdjoint=(variables[e].email && variables[e].email!='') ? "<img src='./themes/default/img/icone-message.png'><a href='mailto:"+variables[e].email+"'>Contacter par email</a>" : "";
                        mesAdjoints[j]=[variables[e].nom,"<div class='col-xs-24 col-sm-12 col-md-8 blocAdjoint'>"+((variables[e].fonction!=='' && variables[e].fonction!==null) ? "<div class='titreAdjoint'>"+variables[e].fonction+"</div>":"")+"<div class='imgAdjoint'><img class='img img-responsive' src='"+baseurl+"public/upload/adjoints/"+variables[e].img+"'></div><div class='triangleAdjoint'></div><div class='nomAdjoint'>"+variables[e].nom+"</div>"+((variables[e].detailfonction!=='' && variables[e].detailfonction!==null) ? "<div class='detailFonctionAdjoint'>"+variables[e].detailfonction+"</div>" : "")+((variables[e].email!=='' && variables[e].email!==null) ? "<hr /><div class='emailAdjoint'>"+variables[e].email+"</div>" : "")+"</div>"];
                        j++;
                    }
			return {
				title : 'Ajouter un Adjoint',
				minWidth : 500,
				minHeight : 150,
				contents :
				[
					{
						id : 'contenuAdjoint',
						label : 'Adjoints',
						elements :
						[
							{
								type: 'select',
                                id: 'filtre',
                                width: 400,
                                label: 'Selectionner l\'adjoint à Ajouter :',
                                items: mesAdjoints
							}
						]
					}
				],
				onOk : function()
				{
					
					var dialog = this;
					var insertadjoints = editor.document.createElement( 'span' );
                                        
                    var CurrObj = CKEDITOR.dialog.getCurrent();
					insertadjoints.setHtml( dialog.getValueOf( CurrObj.definition.dialog._.currentTabId, 'filtre' ) );
					editor.insertElement( insertadjoints );
				}
			};
		} );
	}
} );