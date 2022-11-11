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
const currentDateDownside = document.getElementById('currentDate');

const cle = document.getElementById('08/01/2023');
cle.addEventListener('click', () => {
  currentDateDownside.innerHTML = cle.title;
})

