var Agent = function() {
   
    var selectagent = function(){
        $('body').on("change",".agent_type",function(){
            var val = $(this).val();
            window.location.replace(baseurl+"agent?agentype="+val);
        });
    }
    return {
        init: function() {
            selectagent();
        }
    }
}();