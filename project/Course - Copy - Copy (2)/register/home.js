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

        // Get the first day of the month (0 = Sunday, 1 = Monday, ..., 6 = Saturday)
        const firstDay = new Date(year, month, 1).getDay();
        // Get the number of days in the current month
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

            // Get the day of the week (0: Sunday, 1: Monday, ..., 6: Saturday)
            const dayOfWeek = new Date(year, month, day).getDay();

            // Highlight the current day
            if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
                dayLi.classList.add('today'); // Highlight current day
            }

            // Highlight Fridays (5) and Saturdays (6) in red
            if (dayOfWeek === 5) { // Friday
                dayLi.classList.add('friday');
            }
            if (dayOfWeek === 6) { // Saturday
                dayLi.classList.add('saturday');
            }

            daysElement.appendChild(dayLi);
        }
    }

    // Event listeners for month navigation
    prevButton.addEventListener('click', () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        renderCalendar(currentMonth, currentYear);
    });

    nextButton.addEventListener('click', () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        renderCalendar(currentMonth, currentYear);
    });

    // Render the calendar for the initial load
    renderCalendar(currentMonth, currentYear);
});
