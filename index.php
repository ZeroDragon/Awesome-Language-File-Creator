	<?
		include 'header.php';
		include 'config.php';
		if($error=='true') return;
		$myFile = 'db/'.$bufferFile.".json";
		$fh = fopen($myFile, 'r');
		$theData = fread($fh, filesize($myFile));
		fclose($fh);
		$theData = json_decode($theData);
		$keys = array_keys((array)$theData);
	?>
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<div class="hero-unit">
					  <h1>Awesome Language File Creator</h1>
					  <p>
					  	By <a href="http://zerothedragon.com">ZeroDragon</a> | Already have some dictionaries? <a href="import.php">Import from Code Igniter</a>
					  </p>
					</div>
				</div>
			</div>

			<div class="row-fluid">
				<div class="span10">
					<div class="row-fluid">
						<div class="span4">
							Field: <input type="text" name="nuevo_campo" value="" class="typeahead" autofocus/>
						</div>
						<div class="span4">
							<?=$lang1Display?>: <textarea type="text" name="nuevo_es" value="" ></textarea>
						</div>
						<div class="span4">
							<?=$lang2Display?>: <textarea type="text" name="nuevo_en" value="" ></textarea>
						</div>
					</div>
				</div>
				<div class="span2">
					<button class="btn goguarda" id="salvaguarda"><i class="icon-ok"></i></button>
				</div>
			</div>
		<?foreach ($theData as $k => $campo) {?>
			<div class="row-fluid" id="<?=$k?>">
				<div class="span10">
					<div class="row-fluid" >
						<div class="span4">
							Field: <input type="text" name="<?=$k?>_campo" value="<?=$k?>" class="typeahead"/>
						</div>
						<div class="span4">
							<?=$lang1Display?>: <textarea type="text" name="<?=$k?>_<?=$lang1?>" ><?=urldecode($campo->$lang1)?></textarea>
						</div>
						<div class="span4">
							<?=$lang2Display?>: <textarea type="text" name="<?=$k?>_<?=$lang2?>" ><?=urldecode($campo->$lang2)?></textarea>
						</div>
					</div>
				</div>
				<div class="span2">
					<button class="btn goguarda"><i class="icon-ok"></i></button>
					<div class="btn goborra btn-danger" data-cual="<?=$k?>"><i class="icon-remove icon-white"></i></div>
				</div>
			</div>
			<?}?>
		</div>


		<script type="text/javascript">
			var keys = JSON.parse('<?=json_encode($keys)?>');
			$('.typeahead').typeahead({'source':keys});

			$('.goborra').click(function(){
				if(!confirm("confirma")) return;
				$('#'+$(this).data('cual')).remove();
				$('#salvaguarda').click();
			});
			$('.goguarda').click(function(){
				var obj = {};
				var campo = '';
				$('input, textarea').each(function(){
					if($(this).val()==='') return;
					var tipo = $(this).attr('name').split('_').pop();
					if(tipo=='campo'){
						campo = $(this).val();
						obj[campo] = {};
					}else{
						obj[campo][tipo] = encodeURIComponent($(this).val());
					}
				});
		    keys = Object.keys(obj);
				keys.sort();
				var nObj = {};
				for (var i = 0; i < keys.length; i++){
			    k = keys[i];
			    nObj[k] = obj[k];
				}
				$.post('motor.php',nObj,function(){
					location.reload();
				});
			});
		</script>
		<?include 'footer.php';?>