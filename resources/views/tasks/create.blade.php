<html>
    <body>
       
        
        <form action="{{ route('tasks.store') }}" method="post">
            {{ csrf_field() }}
            Name: <input type="text" name="name"><br>
            {{ $errors->first('name') }}<br>
            <input type="submit">
        </form>
    </body>
</html> 