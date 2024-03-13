function switchKleur() {
    // Get references to the elements
    var bezorgen = document.getElementById('bezorgen1');
    var afhalen = document.getElementById('afhalen1');

    // Toggle the classes to swap colors
    bezorgen.classList.toggle('bezorgen');
    bezorgen.classList.toggle('afhalen');

    afhalen.classList.toggle('afhalen');
    afhalen.classList.toggle('bezorgen');

    // Toggle the visibility of the forms
    var bezorgenForm = document.querySelector('.postcode-invullen .postcode-input.bezorgen-form');
    var afhalenForm = document.querySelector('.postcode-invullen .postcode-input.afhalen-form');

    bezorgenForm.classList.toggle('hidden');
    afhalenForm.classList.toggle('hidden');
}