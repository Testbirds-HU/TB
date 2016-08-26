$.getScript("/res/js/dist/mustache.min.js", function () {

    function readJSON(file) {
        var request = new XMLHttpRequest();
        request.open('GET', file, false);
        request.send(null);
        if (request.status == 200)
            return request.responseText;
    }

    $.Mustache.load('/res/html/src/member.htm').done(function () {
        console.log("Mustache loading");
        var members = JSON.parse(readJSON('/res/js/team.json'));
        $('#team-template').mustache('print-member', members, {
            method: 'html'
        });
        $(".alternating .row:nth-child(even) .col-md-3").addClass("col-md-push-9");
        $(".alternating .row:nth-child(even) .col-md-9").addClass("col-md-pull-3");
        console.log("Alternating");
    });
    
});