function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.addEventListener("DOMContentLoaded", function () {
  var header = document.getElementById("winkelMandHeader");
  var sticky = header.offsetTop;

  window.onscroll = function () {
    if (window.scrollY > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  };
});

// Smooth scroll function
function smoothScroll(target, duration) {
  var targetElement = document.querySelector(target);
  var targetPosition = targetElement.offsetTop;
  var startPosition = window.pageYOffset;
  var distance = targetPosition - startPosition;
  var startTime = null;

  function animation(currentTime) {
    if (startTime === null) startTime = currentTime;
    var timeElapsed = currentTime - startTime;
    var run = ease(timeElapsed, startPosition, distance, duration);
    window.scrollTo(0, run);
    if (timeElapsed < duration) requestAnimationFrame(animation);
  }

  function ease(t, b, c, d) {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
  }

  requestAnimationFrame(animation);
}

// Smooth scroll to target on button click
document.querySelectorAll(".selectie-knop").forEach((button) => {
  button.addEventListener("click", function () {
    var target = this.getAttribute("data-target");
    smoothScroll(target, 1000); // Adjust duration as needed
  });
});

// function searchText() {
//   var query = document.getElementById("zoekInvoer").value.trim();

//   if (query === "") {
//     return false;
//   }

//   var elementsToSearch = document.querySelectorAll(
//     ".menu-knop"
//   );

//   // Create a new style element for highlighting
//   var highlightStyle = document.createElement('style');
//   highlightStyle.type = 'text/css';
//   highlightStyle.innerHTML = '.highlight { background-color: yellow; }';
//   document.head.appendChild(highlightStyle);

//   elementsToSearch.forEach(function (element) {
//     var textContent = element.innerText;
//     var regex = new RegExp(query, "gi");
//     var matches = textContent.match(regex);

//     if (matches !== null) {
//       matches.forEach(function (match) {
//         var highlightedMatch = '<span id="highlight">' + match + "</span>";
//         textContent = textContent.replace(
//           new RegExp(match, "gi"),
//           highlightedMatch
//         );
//       });
//       element.innerHTML = textContent;
//     }
//   });

//   // Remove the highlight style after search is complete
//   setTimeout(function() {
//     document.head.removeChild(highlightStyle);
//   }, 3000); // Adjust the timeout value as needed

//   return false;
// }

// Voeg een event listener toe aan het zoekformulier
document
  .getElementById("zoek-form")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Voorkom standaardgedrag van het formulier

    // Haal de zoekterm op uit het formulier
    var keyword = document.getElementById("zoekInvoer").value;

    // Maak een AJAX-verzoek aan om de zoekresultaten op te halen
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/zoeken.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Toon de zoekresultaten in de zoekresultaten div
        document.getElementById("search-results").innerHTML = xhr.responseText;
      }
    };
    xhr.send("keyword=" + encodeURIComponent(keyword));
  });
