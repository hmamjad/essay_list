  <!-- Bootstrap JS -->
  <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
  <!--plugins-->
  <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/plugins/simplebar/js/simplebar.min.js"></script>
  <script src="{{ asset('assets') }}/plugins/metismenu/js/metisMenu.min.js"></script>
  <script src="{{ asset('assets') }}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
  <script src="{{ asset('assets') }}/plugins/chartjs/js/Chart.min.js"></script>
  <script src="{{ asset('assets') }}/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="{{ asset('assets') }}/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="{{ asset('assets') }}/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="{{ asset('assets') }}/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
  <script src="{{ asset('assets') }}/plugins/jquery-knob/excanvas.js"></script>
  <script src="{{ asset('assets') }}/plugins/jquery-knob/jquery.knob.js"></script>
  <script>
      $(function() {
          $(".knob").knob();
      });
  </script>
  <script src="{{ asset('assets') }}/js/index.js"></script>
  <!--app JS-->
  <script src="{{ asset('assets') }}/js/app.js"></script>



  <script>
    $(document).ready(function() {
        $("#submitBtn").on("click", function() {
            var description = $("#description").val();

            var remark = $("#remark").val();



            if (description != "") {
                var newRow = $("<tr>");
                newRow.append(
                    "<td> <input type='text' style='border:none' id='name'   name ='description[]' value='" +
                    description + "'>   </td>"); //value='" + description + "'
                newRow.append(
                    "<td> <input type='text' style='border:none' id='name'  name ='remark[]' value='" +
                    remark + "'>   </td>");

                $("#dataTable tbody").append(newRow);

                $("#description").val("");
                $("#remark").val("");
            }

        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


{{-- Summer note text editor --}}

<script>
$(document).ready(function() {
    $('#summernote1').summernote();
  });
</script>

<script>
$(document).ready(function() {
    $('#summernote2').summernote();
  });
</script>

<script>
$(document).ready(function() {
    $('#summernote3').summernote();
  });
</script>




</body>

</html>