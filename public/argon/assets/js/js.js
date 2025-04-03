$(document).ready(function ()   {
    $('table').DataTable({
        ordering : true,
        paging: true,
        searching: true,
        responsiveness: true
    })


    axios.get("/api/auth/evaluation")
    .then(function(response){
        if(response.data.success){
            var body = $('TableBody');
            var evaluation = response.data.evaluation
            console.log(evaluation)
            body.empty();

            for(var i = o; i < evaluation.length; i++){
                body.append(`<tr><td>${evaluation[i].coffeshop.name}</td></tr>`)
                body.append(`<tr><td>${evaluation[i].owner.names}</td></tr>`)
                body.append(`<tr><td>${evaluation[i].evaluation.descr}</td></tr>`)
            }
        }
    })
    });
