
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Foreach loop example</title>
        <link rel="stylesheet" href="wp.css" type="text/css">

    </head>
    <body>
            <table class="bordered">
                    <!-- table header -->
                    <tr><th>Name</th><th>Value</th></tr>
                    @forelse ($get as $name => $value) 
                    @if($loop->index %2 == 0)
                        <tr style="background-color:#C0C0C0"><td>{{$name}}:</td><td>{{$value}}</td></tr>
                    @elseif($loop->index %2 != 0)
                        <tr><td>{{$name}}:</td><td>{{$value}}</td></tr>
                    @endif
                    @empty
                    <tr><td>No URL variable</td></tr>
                    @endforelse
            </table>
            

    </body>
</html>
