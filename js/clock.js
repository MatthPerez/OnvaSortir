function showTime() {
  let date = new Date();
  let hours = date.getHours() < 10 ? '0' + date.getHours() : date.getHours();
  let minutes = date.getMinutes() < 10 ? '0' + date.getMinutes() : date.getMinutes();
  let seconds = date.getSeconds() < 10 ? '0' + date.getSeconds() : date.getSeconds();
  let time = hours + ':' + minutes + ':' + seconds;
  document.getElementById('clock').innerHTML = time;
}

function refresh() {
  let t = 1000; //millisecondes
  setInterval(showTime, t);
}

refresh();