</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
</script>


<script src="js/summernote-lite.js"></script>


 <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
 <script>

        // tinymce.init({ 
       // selector:'textarea',
       // height: 500,
       // theme:  'modern'

   // });

    $(document).ready( function () {
    $('#myTable').DataTable();


    // summernote
    $(document).ready(function() {
	  $('#summernote').summernote();
	});
  } );
    


  // tinymce.init({ selector:'textarea' });

</script>
</html>