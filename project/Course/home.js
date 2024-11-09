document.addEventListener('DOMContentLoaded', () => {
    const months = [
        "January", "February", "March", "April", "May", "June", 
        "July", "August", "September", "October", "November", "December"
    ];
    const currentDate = new Date();
    let currentMonth = currentDate.getMonth();
    let currentYear = currentDate.getFullYear();

    const monthElement = document.querySelector('.month ul li:nth-child(3)');
    const daysElement = document.querySelector('.days');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    // Initialize the calendar with the current month and year
    function renderCalendar(month, year) {
        // Update the displayed month and year
        monthElement.innerHTML = `${months[month]}<br><span style="font-size:18px">${year}</span>`;
        
        // Clear previous days
        daysElement.innerHTML = '';

        // Get the first day and the number of days in the current month
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Add empty <li> elements for days before the first day of the current month
        for (let i = 0; i < firstDay; i++) {
            const emptyLi = document.createElement('li');
            daysElement.appendChild(emptyLi);
        }

        // Populate the calendar with the correct number of days
        for (let day = 1; day <= daysInMonth; day++) {
            const dayLi = document.createElement('li');
            dayLi.textContent = day;

            // Highlight the current day
            if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
                dayLi.classList.add('current-day');
            }

            daysElement.appendChild(dayLi);
        }
    }

    // Event listeners for month navigation
    prevButton.addEventListener('click', () => {
        currentMonth--;

        // If month goes below 0, move to the previous year
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }

        renderCalendar(currentMonth, currentYear);
    });

    nextButton.addEventListener('click', () => {
        currentMonth++;

        // If month goes above 11, move to the next year
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }

        renderCalendar(currentMonth, currentYear);
    });

    // Render the calendar for the initial load
    renderCalendar(currentMonth, currentYear);
});
document.addEventListener('DOMContentLoaded', () => {
    const newsCards = document.querySelector('.news-cards');
    const cards = document.querySelectorAll('.news-card');
    const totalCards = cards.length;
    let currentIndex = 0; // Start from the first card

    // Function to slide the cards
    window.slide = function(direction) {
        if (direction === 1) {
            // Move right
            currentIndex++;
            if (currentIndex >= totalCards) {
                currentIndex = 0; // Loop back to the first card
            }
        } else {
            // Move left
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = totalCards - 1; // Loop back to the last card
            }
        }

        // Calculate the translateX value to slide the cards
        const translateX = -currentIndex * (300 + 20); // 300 is card width, 20 is margin
        newsCards.style.transform = `translateX(${translateX}px)`;
    };
});
