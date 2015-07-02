$(function(){
   $('#inputCep').mask('99999-999',{completed: function(){
       var $this = $(this),
           cep = $this.val(),
           $city = $('#inputCity');

           $this.attr('disabled', true);

           $.getJSON('getAddress/'+cep)
               .success(function(data){
                   if(data.Cidade) {
                       $city.val(data.Cidade);
                       $city.removeAttr('disabled');
                       $this.removeAttr('disabled');
                       $this.closest('form').submit();
                   }else
                       $city.removeAttr('disabled');
                   $this.removeAttr('disabled');
               })
               .error(function(){
                   $city.removeAttr('disabled');
                   $this.removeAttr('disabled');
               });
   }});
});