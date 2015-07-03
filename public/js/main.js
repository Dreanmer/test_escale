$(function () {
    $('#inputCep').mask('99999-999', {
        completed: function () {
            var $this = $(this),
                $form = $this.closest('form');
            $form.submit();
        }
    });
});