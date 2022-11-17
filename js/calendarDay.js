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

function reply_click(clicked_id) {
  let id = clicked_id.substr(0, 2) + '/' + clicked_id.substr(2, 2) + '/' + clicked_id.substr(4, 4);
  currentDateDownside.innerHTML = 'Les évènements pour le ' + id;
}

