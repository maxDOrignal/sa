<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ $title }}</title>

    @foreach ($styles as $item)
        <link rel="stylesheet" href="{{ asset('css/' . $item) }}">
    @endforeach

    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>

<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    
    <script>
        var pusher = new Pusher('f47078eb51415d5748f7', {
            cluster: 'ap2',
        });

        var channel = pusher.subscribe('test');
        channel.bind('test1', function(data) {
            let add = '<div class="task flexColumn" data-task-id="' + data.id + '"><div class="content">' + data.content + '</div><div class="buttons flexColumn">                    <a class="button" href="deleted/' + data.id + '">delete</a>                    <a class="button" href="done/' + data.id + '">done</a>                </div>        </div>        ';
        
            $('.tasks').prepend(add);
        });
</script>
    
</head>
