
  <?php

      echo '

        <h3><a id="back"><span class="glyphicon glyphicon-backward"></span> Back</a></h3>

        <h1>Search</h1>  

        <form action="">

          <!-- https://github.com/silviomoreto/bootstrap-select -->
          <div class="input-group">
            <input type="text" placeholder = "Building" class="form-control" />
            <span class="input-group-addon btn glyphicon glyphicon-menu-down"></span>
            <span class="input-group-addon glyphicon glyphicon-home"></span>
          </div>

          <!-- https://github.com/Eonasdan/bootstrap-datetimepicker -->
          <div class="input-group">
            <input type="text" class="form-control" placeholder = "Date"/>
            <span class="input-group-addon btn glyphicon glyphicon-calendar"></span>
          </div>
          <script type="text/javascript">
            $(function () {
              $("#datetimepicker3").datetimepicker({
                pickTime: false
              });
            });
          </script>

          <div class="input-group date" id="datetimepicker3">
            <input type="text" class="form-control" placeholder = "Start Time"/>
            <span class="input-group-addon btn glyphicon glyphicon-time"></span>
          </div>
          <script type="text/javascript">
            $(function () {
              $("#datetimepicker3").datetimepicker({
                format: "LT"
              });
            });
          </script>

          <div class="input-group date" id="datetimepicker3">
            <input type="text" class="form-control" placeholder = "End Time"/>
            <span class="input-group-addon btn glyphicon glyphicon-time"></span>
          </div>
          <script type="text/javascript">
            $(function () {
              $("#datetimepicker3").datetimepicker({
                pickTime: false
              });
            });
          </script>

          <div class = "input-group">
            <input type="text" class="form-control" placeholder = "Attendance"/>
            <span class="input-group-addon glyphicon glyphicon-flag"></span>
          </div>

          <div class = "input-group">
            <span class="input-group-addon glyphicon glyphicon-tag"></span>
            <input type="text" class="form-control" placeholder = "+ Add search tag"/>
          </div>

        </form>

        <br/>

        <div class="row">
          <button type="button" class="header btn btn-primary btn-lg btn-block">
            refresh search <span class="glyphicon glyphicon-refresh"></span>
          </button>
        </div>

      '

?>

</body>
</html>