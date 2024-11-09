let currentIndex = 0;

function slide(direction) {
    const cards = document.querySelectorAll('.news-card');
    const totalCards = cards.length;
    
    currentIndex += direction;
    
    if (currentIndex < 0) {
        currentIndex = totalCards - 1;
    } else if (currentIndex >= totalCards) {
        currentIndex = 0;
    }
    
    const offset = -currentIndex * 100; // Adjust this value based on your card width
    document.querySelector('.news-cards').style.transform = `translateX(${offset}%)`;
}
