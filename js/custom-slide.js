jQuery(document).ready(function($){
	var meta_slide_frame;
	// inicia al presionar el boton para cargar slide
	$('#meta-slide-button').click(function(e){
		//previene que ocurra la accion por default
		e.preventDefault();
		//
		if(meta_slide_frame){
			wp.media.editor.open();
			return;
		}
		//
		meta_slide_frame = wp.media.frames.meta_slide_frame = wp.media({
			className: 'media-frame meta-slide-frame',
			frame: 'select',
			title: meta_image.title,
			button: {text: meta_image.button},
			library: {type: 'image'}
		});
		//
		meta_slide_frame.on('select', function(){
			//
			var media_attachment = meta_slide_frame.state().get('selection').first().toJSON();
			//
			$('#meta-slide').val(media_attachment.url);
		});
		//
		meta_slide_frame.open();
	});
});