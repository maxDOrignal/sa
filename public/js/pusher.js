    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('f47078eb51415d5748f7', {
        cluster: 'ap2'
    });

    

    var channel = pusher.subscribe('test');
    channel.bind('App\\Event\\TasksAdded', function(data) {
        // alert(JSON.stringify(data));
        console.log(data);
    });

    // channel.bind('pusher:subscription_succeeded', function(members) {
    //     alert('successfully subscribed!');
    //  });
    