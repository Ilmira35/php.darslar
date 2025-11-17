
  <script>
    (function(){
      const btn = document.getElementById('toggle');
      const menu = document.getElementById('mainmenu');
      // On small screens hide/show menu
      function updateForWidth(){
        if(window.innerWidth <= 640){
          btn.style.display = 'inline-flex';
          menu.style.display = btn.getAttribute('aria-expanded') === 'true' ? 'block' : 'none';
        } else {
          btn.style.display = 'none';
          menu.style.display = 'block';
        }
      }
      btn.addEventListener('click', ()=>{
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        btn.setAttribute('aria-expanded', String(!expanded));
        menu.style.display = !expanded ? 'block' : 'none';
      });
      // Keyboard: allow arrow navigation between menu items
      menu.addEventListener('keydown', (e)=>{
        const items = Array.from(menu.querySelectorAll('[role="menuitem"]'));
        const idx = items.indexOf(document.activeElement);
        if(e.key === 'ArrowRight' || e.key === 'ArrowDown'){
          e.preventDefault(); const next = items[(idx+1)%items.length]; next.focus();
        } else if(e.key === 'ArrowLeft' || e.key === 'ArrowUp'){
          e.preventDefault(); const prev = items[(idx-1+items.length)%items.length]; prev.focus();
        }
      });
      // Initial
      updateForWidth();
      window.addEventListener('resize', updateForWidth);
    })();
  </script>
</body>
</html>