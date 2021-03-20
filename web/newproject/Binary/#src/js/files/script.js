const filterImage = document.querySelectorAll('.portfolio__column');
const filterBtn = document.querySelectorAll('.filter__item');

document.querySelector('.filter__list').addEventListener('click', event => {

   if (event.target.tagName !== 'LI') return false;
   let filterClass = event.target.dataset['filter'];
   
   filterImage.forEach(elem => {
      elem.classList.remove('hide');
      if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
         elem.classList.add('hide');
      }
   });
   filterBtn.forEach(btn => {
      btn.classList.remove('active');
      if (btn.classList.contains(filterClass)) {
         btn.classList.add('active');
      }
   })
});