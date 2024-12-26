document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const formElements = this.elements;
    let valid = true;

    // Basic client-side validation
    for (let element of formElements) {
        if (element.type !== 'submit' && !element.value) {
            valid = false;
            alert(`${element.name} is required.`);
            element.focus();
            break;
        }
    }

    if (!valid) {
        event.preventDefault();
    }
});
