// De 01 / mois / année à 31 / mois / année {
//   fullDate = jour / mois / année;
//   const thisDate = document.getElementById('fullDate');
//   thisDate.addEventListener('click', () => {
//     const dateTitle = document.getElementById('currentMonth');
//     dateTitle = fullDate;
//   })
// }

const previous = document.getElementById('previousMonth');
const next = document.getElementById('nextMonth');
const currentDateUpside = document.getElementById('currentMonth').title;
const currentMonth = document.getElementById('currentMonth');
const currentDateDownside = document.getElementById('currentDate').textContent;

function nextMonth() {

  next.addEventListener('click', () => {
    let month = Number(currentDateUpside.substr(3, 2));
    let year = Number(currentDateUpside.substr(6, 4));
    let month1;
    let year1;

    if (month++ == 13) {
      month1 = 1;
      year1 = year++;
    } else {
      month1 = month++;
      year1 = year;
    }

    let stringMonth;

    switch (month1) {
      case 1:
        stringMonth = 'janvier';
        break;

      case 2:
        stringMonth = 'février';
        break;

      case 3:
        stringMonth = 'mars';
        break;

      case 4:
        stringMonth = 'avril';
        break;

      case 5:
        stringMonth = 'mai';
        break;

      case 6:
        stringMonth = 'juin';
        break;

      case 7:
        stringMonth = 'juillet';
        break;

      case 8:
        stringMonth = 'août';
        break;

      case 9:
        stringMonth = 'septembre';
        break;

      case 10:
        stringMonth = 'octobre';
        break;

      case 11:
        stringMonth = 'novembre';
        break;

      case 12:
        stringMonth = 'décembre';
        break;

    }

    let newMonth = stringMonth + ' ' + year1;
    currentMonth.innerHTML = newMonth;
    currentMonth.title = '01/' + month1 + '/' + year1;
  });
}

nextMonth();
