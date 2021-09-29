function closePhoneOpenMenu() {
    document.getElementById("phone-open-menu").style.display = "none";
}

function openPhoneOpenMenu() {
    document.getElementById("phone-open-menu").style.display = "block";
}

document.onload = firstEnter();

function firstEnter() {
    localStorage.setItem("enter", "true");
}