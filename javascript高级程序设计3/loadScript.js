/**
 * Created by hure on 2016/9/22.
 */
(function(){
    alert("³É¹¦")
    function loadScriptString(code){
        var script=document.createElement("script");
        script.type="text/javascript";
        try{
            script.appendChild(document.createTextNode(code));
        }catch(ex){
            script.text=code;
        }
        document.body.appendChild(script);
    }
    loadScriptString("function sayHi(){alert('hi');}");
})();
