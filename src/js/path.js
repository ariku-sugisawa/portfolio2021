(function(){
    var root;
    var scripts = document.getElementsByTagName("script");
    var i = scripts.length;
    while (i--) {
        var match = scripts[i].src.match(/(^|.*\/)path\.js$/);
        if (match) {
            root = match[1];
            break;
        }
    }
    alert(root);
})();
