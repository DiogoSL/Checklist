function submit() {
  var userInput = document.getElementById('userinput');
  var list = document.getElementById('list');
  list.innerHTML += '<li>' + userInput.value + '</li>'
  userInput.focus()
  userInput.value=''
}


function clearA() {
  var list = document.getElementById('list');
  list.innerHTML = ''
}
