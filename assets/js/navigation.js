document.addEventListener('DOMContentLoaded',function(){
  const button=document.querySelector('.mobile-toggle');
  const panel=document.getElementById('mobile-menu');
  if(!button||!panel){return;}

  const home=document.body.dataset.homeUrl||'/';
  const phone=document.body.dataset.phone||'+79162999859';
  const phoneDisplay=document.body.dataset.phoneDisplay||phone;
  const wa=document.body.dataset.whatsapp||'https://wa.me/79162999859';
  const tg=document.body.dataset.telegram||'https://t.me/+79162999859';

  const esc=(value)=>String(value).replace(/&/g,'&amp;').replace(/"/g,'&quot;').replace(/</g,'&lt;').replace(/>/g,'&gt;');
  const page=(path)=>esc(home.replace(/\/$/,'/')+path.replace(/^\//,''));

  const closeMenu=()=>{
    button.setAttribute('aria-expanded','false');
    button.setAttribute('aria-label','Открыть меню');
    panel.hidden=true;
    document.body.classList.remove('mobile-menu-open');
  };

  const openMenu=()=>{
    button.setAttribute('aria-expanded','true');
    button.setAttribute('aria-label','Закрыть меню');
    panel.hidden=false;
    document.body.classList.add('mobile-menu-open');

    panel.innerHTML='<nav class="mobile-nav" aria-label="Мобильное меню">'+
      '<div class="mobile-nav-title"><span>АвтоСпа</span><small>Услуги и запись</small></div>'+
      '<a href="'+page('')+'">Главная</a>'+
      '<a href="'+page('sample-page/')+'">Автомойка</a>'+
      '<a href="'+page('мойка-двигателя-автомобиля/')+'">Мойка двигателя</a>'+
      '<a class="mobile-tire-link" href="'+page('шиномонтаж/')+'">Шиномонтаж <em>Запись</em></a>'+
      '<a href="'+page('автомойка-цены/')+'">Цены на автомойку</a>'+
      '<a href="'+page('шиномонтаж-цены/')+'">Цены на шиномонтаж</a>'+
      '<a href="'+page('контакты/')+'">Контакты</a>'+
      '<a class="mobile-nav-external" href="https://xn----7sbbgabsz5cgqkebg.su/" target="_blank" rel="noopener noreferrer">🔧 Автосервис Автотех ↗</a>'+
      '<a class="mobile-social mobile-whatsapp" href="'+esc(wa)+'" target="_blank" rel="noopener noreferrer">◉ WhatsApp</a>'+
      '<a class="mobile-social mobile-telegram" href="'+esc(tg)+'" target="_blank" rel="noopener noreferrer">➤ Telegram</a>'+
      '<a class="mobile-call" href="tel:'+esc(phone)+'"><span>☎ Позвонить</span><strong>'+esc(phoneDisplay)+'</strong></a>'+
    '</nav>';

    panel.querySelectorAll('.mobile-nav a').forEach(a=>a.addEventListener('click',closeMenu));
  };

  button.addEventListener('click',function(){
    button.getAttribute('aria-expanded')==='true'?closeMenu():openMenu();
  });
  document.addEventListener('keydown',function(e){
    if(e.key==='Escape'&&button.getAttribute('aria-expanded')==='true'){closeMenu();button.focus();}
  });
  document.addEventListener('click',function(e){
    if(button.getAttribute('aria-expanded')==='true'&&!panel.contains(e.target)&&!button.contains(e.target)){closeMenu();}
  });
  window.addEventListener('resize',function(){
    if(window.innerWidth>1000&&button.getAttribute('aria-expanded')==='true'){closeMenu();}
  },{passive:true});
});