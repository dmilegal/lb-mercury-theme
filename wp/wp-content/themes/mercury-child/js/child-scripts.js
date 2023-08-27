document.addEventListener('DOMContentLoaded', event=>{
    let bonus_more = document.querySelectorAll('.bonus-more');
    if (!bonus_more)
        return;
    bonus_more.forEach(bonus=>{
        bonus.addEventListener('click', ()=>{
            let bonus_content = bonus.closest('.space-organizations-7-archive-item').querySelector('.bonus-content');
            bonus_content.classList.toggle('hide');
            bonus.classList.toggle('rotate');
            bonus.closest('.space-organizations-7-archive-item-bg').classList.toggle('no-radius');
        });
    })    
});