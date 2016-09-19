/**
 * Created by hure on 2016/9/14.
 */
function htmlEscape(text){
    return text.replace(/[<>"&]/g,function(match,pos,originalText){
        switch (match){
            case "<":
                    return "&lt;";
            case ">":
                     return "&gt;";
            case "&":
                     return "&amp;";
            case "\"":
                return "&quot;";
        }

    })
}
console.log(htmlEscape("<h1>hello redd</h1>>"))