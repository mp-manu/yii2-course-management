function learned(lesson){
   var id = $(lesson).data('id');
   $.ajax({
      url: '/lesson/set-learned',
      type: 'POST',
      data: {'id':id}
   })
       .done(function(data) {
           window.location.href = '/lesson';
       })
       .fail(function () {
          alert('Произошла ошибка при отправке данных!');
       })
   return false;
}