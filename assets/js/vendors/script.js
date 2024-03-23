const menu_items = document.querySelectorAll('.menu_item');

menu_items.forEach(item => item.addEventListener('click', () => {
    menu_items.forEach(item => item.classList.remove('active'));
    item.classList.add('active')
}))