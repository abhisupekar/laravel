<html>
    <head>
    </head>
    <body>
        <form action="/backup" method="post">
        	{{ csrf_field() }}
            <input type="submit" name="backup" id="backup" value="Backup DB">
        </form>
    </body>
</html>