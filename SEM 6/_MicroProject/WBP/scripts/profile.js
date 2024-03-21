const userPassword = document.getElementById('password')
const hiddenPassword = document.getElementById('hidden')
const passwordToggler = document.getElementById('passwordButton')

const password = userPassword.textContent
const hide = '**************************'

let flag = false

passwordToggler.addEventListener('click', () => {
    flag = !flag
    if (flag) {
        userPassword.style.display = "block"
        hiddenPassword.style.display = 'none'
    } else {
        userPassword.style.display = "none"
        hiddenPassword.style.display = 'block'
    }
})