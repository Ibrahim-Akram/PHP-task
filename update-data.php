
<?php
include 'db.php';
?>

<script>
	$.ajax({
    url: '/update-data',
    type: 'POST',
    data: {
      id: id,
      column: column,
      value: value
    },
    success: function(response) {
      console.log(response);
    },
    error: function(xhr, status, error) {
      console.log('Error: ' + error);
    }
  });
});
</script>