const alert = document.querySelectorAll('.alert');

alert.forEach((alertElement) => {
    setTimeout(() => alertElement.style.display = "none", 3000)
})
