const sortFilter = document.getElementById('sort-filter');
const products = Array.from(document.querySelectorAll('.products-container > div'));

sortFilter.addEventListener('change', () => {
    const sortValue = sortFilter.value;

    products.sort((a, b) => {
        const priceA = parseFloat(a.querySelector('.price').textContent.replace('$', ''));
        const priceB = parseFloat(b.querySelector('.price').textContent.replace('$', ''));

        if (sortValue === 'low-to-high') {
            return priceA - priceB;
        } else if (sortValue === 'high-to-low') {
            return priceB - priceA;
        }
    });

    const container = document.querySelector('.products-container');
    container.innerHTML = '';
    products.forEach(product => container.appendChild(product));
});
