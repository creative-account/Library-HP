document.getElementById("text").innerHTML = showDay();

function showDay() {
  var now = new Date();
  now.setDate(now.getDate() + 14);
  var year = now.getFullYear();
  var month = now.getMonth() + 1
  var date = now.getDate()
  var date = year+"年"+month+"月"+date+"日"
  return date;
}
