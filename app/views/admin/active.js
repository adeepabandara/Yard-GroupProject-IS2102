
const activePage = window.location.pathname;
caches.delete(activePage);
const navLinks = document.querySelectorAll('active').forEach(link => {
  if(link.href.includes(`${activePage}`)){
    link.classList.add('active');
    console.log(link);
  }
})

