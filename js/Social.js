<script>

      $(document).ready(function(){
      $("#name").on('change', function(){
          $(".data").hide();
          $("#" + $(this).val()).fadeIn(1000);
      }).change;
      });

</script>

