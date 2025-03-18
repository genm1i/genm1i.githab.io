document.addEventListener('DOMContentLoaded', () => {
    const currentPage = window.location.search.split('=')[1] || 'home';
    document.querySelectorAll('.menu a').forEach(link => {
        if (link.getAttribute('href').includes(currentPage)) {
            link.classList.add('active');
        }
    });
});