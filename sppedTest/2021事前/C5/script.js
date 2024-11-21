const add = document.querySelector(".add");
add.addEventListener("click", () => {
    const tr = document.createElement("tr");
    tr.innerHTML = `<tr>
                <td>
                    <input type="text" name="name" >
                </td>
                <td>
                    <input type="number" name="point" value="" data-group="point" min="0" class="calc">
                </td>
                <td><button class="delete">削除</button></td>
            </tr>`;
    keisan()
    remo();
    add.closest("tr").before(tr);
})
const remo = () => {
    const dele = document.querySelectorAll(".delete");
    dele.forEach(del => {
        del.addEventListener("click", () => {
            del.closest("tr").remove();
            keisan()
        })
    })
}
let num = 0;
const keisan = () => {

    const calc = document.querySelectorAll(".calc");
    const ave = document.getElementById("average");
    calc.forEach(av => {
        num += Number(av.value);
        console.log(num);
        ave.value = num / calc.length;
    })
}
keisan();
remo();