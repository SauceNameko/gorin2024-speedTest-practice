const add = document.querySelector(".add");
const addItem = () => {
    const tr = document.createElement("tr");
    tr.innerHTML = ` <tr>
                <td>
                    <input type="text" name="name" value="" >
                </td>
                <td>
                    <input type="number" name="point" value="" data-group="point" min="0" class="calc">
                </td>
                <td><button class="delete">削除</button></td>
            </tr>`;

    add.closest("tr").before(tr);
    dele();
    calc();
}
const dele = () => {
    const del = document.querySelectorAll(".delete");
    console.log(del.length == 1);
    del.forEach(de => {
        de.addEventListener("click", () => {
            const del = document.querySelectorAll(".delete");
            if (del.length <= 1) return;
            de.closest("tr").remove();
            calc();
            dele();
        });
    })
}
const calc = () => {
    let num = 0;
    const ave = document.getElementById("average");
    const values = document.querySelectorAll(".calc");
    values.forEach(val => {
        num += Number(val.value);
    })
    ave.value = num / values.length;
}
add.addEventListener("click", addItem);
dele();
calc();