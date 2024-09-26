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

    function renderCalendar(month, year) {
        monthElement.innerHTML = `${months[month]}<br><span style="font-size:18px">${year}</span>`;
        daysElement.innerHTML = '';
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        for (let i = 0; i < firstDay; i++) {
            const emptyLi = document.createElement('li');
            daysElement.appendChild(emptyLi);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dayLi = document.createElement('li');
            dayLi.textContent = day;
            const dayOfWeek = new Date(year, month, day).getDay();

            if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
                dayLi.classList.add('today');
            }

            if (dayOfWeek === 5) {
                dayLi.classList.add('friday');
            }
            if (dayOfWeek === 6) {
                dayLi.classList.add('saturday');
            }

            daysElement.appendChild(dayLi);
        }
    }

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

    renderCalendar(currentMonth, currentYear);
});
