const boxs = document.querySelectorAll(".box")
const btn = document.querySelector("button");
btn.addEventListener("click", () => {
    boxs.forEach(box => {
        const r = Math.floor(Math.random() * 255);
        const g = Math.floor(Math.random() * 255);
        const b = Math.floor(Math.random() * 255);
        const aaa = r.toString(16).padStart(2, "0");
        const bbb = g.toString(16).padStart(2, "0");
        const ccc = b.toString(16).padStart(2, "0");
        if (r > 150 && r > 150 && r > 150) {
            box.style.color = "white";
        } else {
            box.style.color = "black";
        }
        box.textContent = `#${aaa}${bbb}${ccc}`
        box.style.backgroundColor = `rgb(${r},${g},${b})`;
    })
})