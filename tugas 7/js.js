
const greetingText = ["Selamat Datang!", "Salam Sejahtera!", "Jangan lupa Sholat","Terima kasih telah berkunjung"];
let currentTextIndex = 0;
let charIndex = 0;
const spanElement = document.querySelector(".banner h1 span");

function typeText() {
    if (charIndex < greetingText[currentTextIndex].length) {
        spanElement.textContent += greetingText[currentTextIndex].charAt(charIndex);
        charIndex++;
        setTimeout(typeText, 100); 
    } else {
        setTimeout(deleteText, 1500); 
    }
}

function deleteText() {
    if (charIndex > 0) {
        spanElement.textContent = greetingText[currentTextIndex].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(deleteText, 50); 
    } else {
        currentTextIndex = (currentTextIndex + 1) % greetingText.length;
        setTimeout(typeText, 500);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    typeText();
});

document.addEventListener("DOMContentLoaded", function() {
    // Pilih semua tautan dengan tanda #
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: "smooth" 
                });
            }
        });
    });
});
