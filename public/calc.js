
(function () {
  'use strict';

  var button1 = document.getElementById('btn1');
  button1.addEventListener('click', function() {
    document.getElementById('left').value += button1.innerHTML;
});

  

})();
