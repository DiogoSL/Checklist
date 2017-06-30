function submit() {
  var userInput = document.getElementById('userinput');
  var list = document.getElementById('list');
  list.innerHTML += '<li>' + userInput.value + '</li>';
  userInput.focus();
  userInput.value=''
}




function clearA() {
  var list = document.getElementById('list');
  list.innerHTML = ''
}

function addItems(items) {
  var list = document.getElementById('list');
  var arrayLength = items.length
  for (i = 0; i < arrayLength; i++) {
      list.innerHTML += '<li>' + items[i] + '</li>';
  }

  // work here
  console.log(items);
}
