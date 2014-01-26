$(document).ready(function(){
   var u = 'usbi.co.id';
   $('a').each(function(){
                var _href = $(this).attr("href");

                var pat = /^http\:\/\/www\.usbi\.bubuwork\.com(.*)/;
                var o = pat.exec(_href);
                if (o!==null) {
                        $(this).attr("href","http://"+u+o[1]);
                }
        });
});