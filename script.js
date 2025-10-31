  // util: inputs
  document.querySelectorAll('.input').forEach(el=>{
    el.style.width='100%';
    el.style.padding='12px 12px';
    el.style.border='1px solid #d9e3f6';
    el.style.borderRadius='12px';
    el.style.outline='none';
    el.addEventListener('focus',()=>{el.style.boxShadow='0 0 0 4px var(--ring)'});
    el.addEventListener('blur',()=>{el.style.boxShadow='none'});
  });

  // mobile menu
  const btn = document.getElementById('openMenu');
  const menu = document.getElementById('mobileMenu');
  btn.addEventListener('click', ()=>{
    const shown = menu.style.display === 'block';
    menu.style.display = shown ? 'none' : 'block';
    btn.innerHTML = shown ? '<i class="fa-solid fa-bars"></i>' : '<i class="fa-solid fa-xmark"></i>';
    btn.setAttribute('aria-expanded', String(!shown));
  });

  // smooth close on link click (mobile)
  menu.querySelectorAll('a').forEach(a=>{
    a.addEventListener('click', ()=>{ menu.style.display='none'; btn.innerHTML='<i class="fa-solid fa-bars"></i>'; });
  });

  // simple form handler (demo)


  // year
  document.getElementById('year').textContent = new Date().getFullYear();