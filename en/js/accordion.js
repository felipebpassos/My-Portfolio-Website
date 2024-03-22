const question = document.querySelectorAll(".trabalho");
question.forEach(q => {
    q.addEventListener("click", () => {
        q.classList.toggle("ativo");
    })
})