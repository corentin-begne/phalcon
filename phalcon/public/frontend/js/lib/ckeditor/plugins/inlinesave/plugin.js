CKEDITOR.plugins.add( 'inlinesave',
{
    init: function( editor )
    {
        editor.addCommand( 'inlinesave',
            {
                exec : function( editor )
                {
                    var data = editor.getData();
                    var dataID = editor.container.getId();
                    
                    AdminHelper.getInstance().updateLink({
                        id:$(".editorContent").attr("id"),
                        content:data
                    });
                }
            });
        editor.ui.addButton( 'Inlinesave',
        {
            label: 'Save',
            command: 'inlinesave',
            icon: this.path + 'images/inlinesave.png'
        } );
    }
} );