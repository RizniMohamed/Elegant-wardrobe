
const showHomeDropdown = (tab) => {
    let dropdown = document.getElementById(tab);
    dropdown.classList.replace("hidden", "block")
}
const hideHomeDropdown = (tab) => {
    let dropdown = document.getElementById(tab);
    dropdown.classList.replace("block", "hidden")
}

let dropdownID = ['homeDropdown', 'womenDropdown', 'menDropdown','kidDropdown']
let tabID = ['home','women','men','kid']
let i = 0;

dropdownID.forEach( id => {
    let dropdown = document.getElementById(id)
    dropdown.addEventListener('mouseover', () => showHomeDropdown(id))
    dropdown.addEventListener('mouseout', () => hideHomeDropdown(id))

    let tab = document.getElementById(tabID[i++])
    tab.addEventListener('mouseover', () => showHomeDropdown(id))
    tab.addEventListener('mouseout', () => hideHomeDropdown(id))
})





