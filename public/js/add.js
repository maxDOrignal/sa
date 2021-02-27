
let limit_From = $(".task").first().attr('data-task-id');
let limit_to = $(".task").last().attr('data-task-id');
let old_limit_to;

let contentT = $('#taskType').val();
let _tokenT  = $('[name=_token]').val();


$("#submit").click(function(e){
    e.preventDefault();


    $.ajax({
        url: "/add",
        data : {
            content: contentT,
            _token : _tokenT,
        },
        type: 'POST',
        success: function(result){
            $('#taskType').val("");
            console.log('secceus');

        }});
});



$(window).scroll(function() {
    if($(window).scrollTop() + $(window).height() == $(document).height()) {
        $.ajax({
            url: "/showMore",
            data : {
                from: limit_From,
                to: limit_to,
                _token : _tokenT,
            },
            type: 'POST',
            success: function(data){
                
                console.log(data);
                old_limit_to = limit_to;
                limit_to -= 5;
    
                data.forEach(element => {
                    let add = '<div class="task flexColumn" data-task-id="' + element.id + '"><div class="content">' + element.content + '</div><div class="buttons flexColumn">                    <a class="button" href="deleted/' + element.id + '">delete</a>                    <a class="button" href="done/' + element.id + '">done</a>                </div>        </div>        ';
                    $('.tasks').append(add);
        
                });
            
    
            }});
    
    }
 });
 
