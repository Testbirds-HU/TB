function readJSON(file) {
    var request = new XMLHttpRequest();
    request.open('GET', file, false);
    request.send(null);
    if (request.status == 200)
        return request.responseText;
};
var members = JSON.parse(readJSON('/res/js/team.json'));

$.Mustache.load('/res/html/src/member.htm').done(function () {
    $('#team-template').mustache('print-member', members, {
        method: 'html'
    });
});