/*
Copyright (C) 2010 Jonnas Fonini <contato@fonini.net>

Este programa é um software livre; você pode redistribui-lo e/ou 
modifica-lo dentro dos termos da Licença Pública Geral GNU como 
publicada pela Fundação do Software Livre (FSF); na versão 2 da 
Licença, ou (na sua opnião) qualquer versão.

Este programa é distribuido na esperança que possa ser  util, 
mas SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUAÇÂO a qualquer
MERCADO ou APLICAÇÃO EM PARTICULAR. Veja a Licença Pública Geral GNU para maiores detalhes.

Você deve ter recebido uma cópia da Licença Pública Geral GNU
junto com este programa, se não, escreva para a Fundação do Software Livre(FSF) Inc., 
51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

CKEDITOR.dialog.add( 'ronildo', function( editor )
{
return {
		title : 'Inserir vídeo do Ronildo',
		minWidth : 390,
		minHeight : 230,
		
	}
});


CKEDITOR.plugins.add( 'ronildo',
{
	init : function( editor )
	{
		var command = editor.addCommand( 'ronildo', new CKEDITOR.dialogCommand( 'ronildo' ) );
		command.modes = { wysiwyg:1, source:1 };
		command.canUndo = false;

		editor.ui.addButton( 'Ronildo',
		{
			label : 'App do Ronildo',
			command : 'ronildo',
			icon : this.path + 'ronildo.png'
		});

		CKEDITOR.dialog.add( 'ronildo', 'ronildo' );
	}
});
