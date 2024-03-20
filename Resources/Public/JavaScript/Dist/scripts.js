/*!
 * Winkelbach-Distribution v3.0.0 (https://www.winkelbach-web.de/sign/)
 * Copyright 2017-2022 Helmut Winkelbach
 * Licensed under the GPL-2.0-or-later license
 */
document.addEventListener("DOMContentLoaded", function() {

  let links = document.querySelectorAll('a');
  links.forEach(function(item){
    if (item.getAttribute('data-mailto-token') != null) {
      item.innerHTML = item.innerHTML.replace('@~@', '@');
    }
  });

});