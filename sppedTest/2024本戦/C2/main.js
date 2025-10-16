let count = 0;
const items = document.querySelectorAll(".item")
const prev = document.querySelectorAll(".prev");
const next = document.querySelectorAll(".next");
prev.forEach(pre => {
    pre.addEventListener("click", () => {
        count -= 1;
        items.forEach((item, index) => {
            if (index == count) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        })
    })
})
next.forEach(ne => {
    ne.addEventListener("click", () => {
        console.log(423);

        count += 1;
        items.forEach((item, index) => {
            if (index == count) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        })
    })
})
const comp = document.querySelector(".complete");
comp.addEventListener("click", () => {
    document.body.textContent = "complete"
})