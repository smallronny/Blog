 
        
<div class="container">
        <?=form_open(base_url().'blog/insert_entry')?>
        <p>Titulo: <?=form_input('title')?></p>
        <p>Contenido: <?=form_textarea('content')?></p>
        <p>Tags:<?=form_input('tags')?> (comma separated)</p>
        <input accept="image/*" id="fotoAlumno" type="file">
		<button id="guardarImagen">Subir</button>
        <?=form_submit('submit', 'Insert')?> 

</div>
    
 