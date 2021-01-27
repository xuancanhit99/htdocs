<html>
<head>
    <script type="text/javascript" language="Javascript" SRC="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" language="Javascript">
    function update_and_replace()
        {
            $.ajax({
                url: 'ajax_update_table.php',
                dataType: 'json',
                success: function (data) {successFunction(data)},
                error: function () { error(); },
                complete: function () { complete(); }
            });
        }

        function successFunction(data) {
            if ('success' in data) {
                $("#content").load("index.php");
            } 
        }

    </script>
</head>
<body>
<div id='content'>
Now is: <?php echo date("Y-m-d, H:i:s");?>
<br/><br/><br/><br/>
<a href="javascript:void(0);" onClick="update_and_replace();">Aktualizuj</a>
</div>
</body>
</html>