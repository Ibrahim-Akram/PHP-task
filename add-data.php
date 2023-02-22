
<?php
include 'db.php';

?>
<script>
	$('#add-row').on('click', function() {
  // Make AJAX call to add new row
  $.ajax({
    url: '/add-row',
    type: 'POST',
    success: function(response) {
      // Append new row to table
      $('#data-table').append(response);
    },
    error: function(xhr, status, error) {
      console.log('Error: ' + error);
    }
  });
});
</script>

<!--Submit button click event for adding new data -->

<script type="text/javascript">
	$('#submit-data').on('click', function() {
  // Get values from form inputs
  var carModel = $('#car-model-input').val();
  var carSFX = $('#car-sfx-input').val();
  var carVariant = $('#car-variant-input').val();
  var color = $('#color-input').val();
</script>