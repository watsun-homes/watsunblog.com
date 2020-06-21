$(function(){
  
mw('.js-modal-open','.js-modal','.js-modal-close');
mw('.js-modal-open2','.js-modal2','.js-modal-close2');
mw('.js-modal-open3','.js-modal3','.js-modal-close3');
mw('.js-modal-open4','.js-modal4','.js-modal-close4');
mw('.js-modal-open5','.js-modal5','.js-modal-close5');
mw('.js-modal-open6','.js-modal6','.js-modal-close6');
mw('.js-modal-open7','.js-modal7','.js-modal-close7');
mw('.js-modal-open8','.js-modal8','.js-modal-close8');
mw('.js-modal-open9','.js-modal9','.js-modal-close9');
mw('.js-modal-open10','.js-modal10','.js-modal-close10');
mw('.js-modal-open11','.js-modal11','.js-modal-close11');
mw('.js-modal-open12','.js-modal12','.js-modal-close12');
    
});
  
function mw(open,content,close){           
    $(open).on('click',function(){  
        $(content).fadeIn();
        return false;
    });
    $(close).on('click',function(){
        $(content).fadeOut();
        return false;
    });
};





