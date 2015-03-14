/**
 * Created by leo on 3/11/15.
 */
$(document).ready(function(){

    var currentInstance = function(){
 var obj = {};
        obj.ListFromDatabase = function(url,callbackSucess,callbackFailure){

            $.ajax({
                method: "GET",
                url: url,
                dataType: "json"
            }).done(callbackSucess).fail(callbackFailure);


        }

        return  obj;
    }
});


