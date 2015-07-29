<?php
  require "AddAdCuePointForm.php";
?>
<script>
  $('#AddAdCuePointForm').submit(function() {
    var data = new FormData(document.getElementById('AddAdCuePointForm'));
     $.ajax({
       url: '/addCuePoint.php',
       type: 'POST',
       data: data,
       contentType: false,
       cache: false,
       processData: false,
       success: function (data, textStatus, jqXHR) {
         $('.container').load('listCuePoint.php', JSON.parse(data));
       }
     });
    return false;
  })
</script>