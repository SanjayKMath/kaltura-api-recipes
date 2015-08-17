<h1>Upload Captions</h1>
<label>Caption File (SRT)</label>
<form id="UploadForm">
  <input type="file" name="fileData"></input>
  <input type="submit" value="Upload"></input>
</form>
<div id="UploadDone"></div>

<script>
  $('#UploadForm').submit(function() {
    var data = new FormData(document.getElementById('UploadForm'));
    $.ajax({
      url: '/attachCaptions.php',
      type: 'POST',
      data: data,
      mimeType: "multipart/form-data",
      contentType: false,
      cache: false,
      processData: false,
      success: function (data, textStatus, jqXHR) {
        $('#UploadDone').html(data);
      }
    });
    return false;
  })
</script>
