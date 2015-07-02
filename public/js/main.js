$(function(){
   $('#inputCep').mask('99999-999',{completed: function(){
       var $this = $(this);
       setTimeout(function(){
           var cep = $this.val();
           if(cep.replace(/\D/g,'').length == 8){
               $this.attr('disabled');
               $.getJSON('getAddress/'+cep)
                   .success(function(data){
                       console.log(data);
                   });
           }
       }, 100);
   }});
});