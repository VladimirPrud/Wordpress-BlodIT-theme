

const searchLink = document.querySelector('.search-link');
const searchBlock = document.querySelector('.header-search');
const searchClose = document.querySelector('.header-search__close');
searchLink.addEventListener('click', () => {
    searchBlock.style.display = 'block';
});

searchClose.addEventListener('click', () => {
    searchBlock.style.display = 'none';
});




jQuery(function($) {
     $("#form_recall").on('submit', function(e) {
        e.preventDefault();
    
        let self = $(this); 
        let yourName = self.find('input[name="your_name"]').val(); 
        let yourTel = self.find('input[name="your_tel"]').val(); 
        let msg = self.find('textarea[name="msg"]').val();
        
        $.ajax({
          url: self.attr('data-url'), 
          data: {
            action: 'form_recall',
            form: {
              your_name: yourName,
              your_tel: yourTel,
              msg: msg,
            }
          },
          type: 'POST',
          success: function(json) { 
            self.append(`<p>${json.data.message}</p>`);
            setTimeout(function() {
              self.find('p').detach();
            }, 3000);
          },
          fail: function() { 
            self.append('<p>Произошла неизвестная ошибка</p>');
    
            setTimeout(function() {
              self.find('p').detach();
            }, 3000);
            }
        });
    });
});
        
        
       