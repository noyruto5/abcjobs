<h3>View slots</h3><br/>
<div class="form-inline">
Barangay:
<select name="brgy" class="form-control" id="select-brgy" name="select_brgy">
	<option></option>
	<option value="Bato">Bato</option>
    <option value="Fabrica">Fabrica</option>
    <option value="Old Sagay">Old Sagay</option>
    <option value="Paraiso">Paraiso</option>
    <option value="Poblacion 1">Poblacion 1</option>
    <option value="Poblacion 2">Poblacion 2</option>
    <option value="Rizal">Rizal</option>
    <option value="Vito">Vito</option>
    <option value="Andres Bonifacio">Andres Bonifacio</option>
    <option value="Baviera">Baviera</option>
    <option value="Bulanon">Bulanon</option>
    <option value="Campo Himogaan">Campo Himogaan</option>
    <option value="Colonia Divina">Colonia Divina</option>
    <option value="General Luna">General Luna</option>
   	<option value="Himogaan Baybay">Himogaan Baybay</option>
    <option value="Lopez Jaena">Lopez Jaena</option>
    <option value="Malubon">Malubon</option>
    <option value="Maquiling">Maquiling</option>
    <option value="Molocaboc">Molocaboc</option>
    <option value="Plaridel">Plaridel</option>
    <option value="Puey">Puey</option>
    <option value="Rafaela Barrera">Rafaela Barrera</option>
    <option value="Sewahon 1">Sewahon 1</option>
    <option value="Taba-ao">Taba-ao</option>
    <option value="Tadlong">Tadlong</option>
</select>
</div><br/>
Available Slots: <span class="badge" id="slot-number">0</span>
<br/><br/>
<a href="<?php echo site_url('students/create'); ?>" class="btn btn-primary" id="btn-apply">Apply</a>

	<script>
		$(document).ready(function(){
			$("#select-brgy").change(function(){
				var brgy = $(this).val();

				$.ajax({
					type: 'POST',
					url: '<?php echo site_url('students/brgy_slots'); ?>',
					data: {
						brgy: brgy
					}	
				}).done(function(result){
					$("#slot-number").html(result);
				});
			});
		});
	</script>