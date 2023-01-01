const alert = document.querySelectorAll('.alert');

alert.forEach((alertElement) => {
    setTimeout(() => alertElement.style.display = "none", 3000)
})

const panels = document.querySelectorAll('.panel');
const panel_buttons = document.querySelectorAll('.btn-opt');
const admin_bod = document.getElementById('admin_body');
panel_buttons.forEach((btn) => {
    btn.addEventListener('click', () => {
        let previous_select = document.querySelectorAll('.selected');
        previous_select.forEach((select) => {
            select.classList.remove('selected')
        })

        btn.classList.add('selected');

    })
})

document.addEventListener('click', () => {
    for (var i = 0; i < panels.length; i++) {
        if (panel_buttons[i].classList.contains('selected')) {
            panels[i].classList.add('selected-panel');
        } else {
            panels[i].classList.remove('selected-panel');
        }
    }
})

const exit_options = document.querySelectorAll('.close');
const show_btn = document.getElementById('show-btn');
const add_panel = document.getElementById('add-panel');

show_btn.addEventListener('click', () => {
    add_panel.style.display = 'inline-flex';
})
exit_options.forEach((option) => {
    option.addEventListener('click', () => {
        add_panel.style.display = 'none';
    })
})
const exit_option = document.querySelectorAll('.close-unit');
const show_u_btn = document.getElementById('add-unit-btn');
const add_u_panel = document.getElementById('add-unit-panel');

show_u_btn.addEventListener('click', () => {
    add_u_panel.style.display = 'inline-flex';
})
exit_option.forEach((option) => {
    option.addEventListener('click', () => {
        add_u_panel.style.display = 'none';
    })
})