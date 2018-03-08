<html>

<head>
 <link type="text/css" href="../css/bootstrap.css" rel="stylesheet">
 <script src="jquery-3.2.1.min.js" type="text/javascript"></script>
   
</head>

<body>
    <div class="container">
        <div class="col-sm-6" style="height:130px;">
            <div class="form-group">
                <div class='input-group date' id='datetimepicker11'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                    </span>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            $(function() {
                $('#datetimepicker11').datetimepicker({
                    daysOfWeekDisabled: [0, 6]
                });
            });

        </script>
    </div>
</body>

</html>
