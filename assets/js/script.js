const addBtn = document.querySelector("#add-btn");
const newTaskInput = document.querySelector("#wrapper input");
const taskContainer = document.querySelector(".tasks");
const error = document.getElementById("error");
const countValue = document.querySelector(".count-value");

let taskCount = 0;

const displayCount = (taskCount) => {
    countValue.innerText = taskCount;
};

const addTask = () => {
    const taskName = newTaskInput.value.trim();
    error.style.display = "none";

    if (!taskName) {
        setTimeout(() => {
            error.style.display = "block";
        }, 200);
        return;
    }

    const task = `
        <div class="task">
            <input type="checkbox" class="task-check">
            <span class="taskname">${taskName}</span>
            <button class="edit"><i class='bx bx-edit-alt'></i></button>
            <button class="delete"><i class='bx bxs-trash'></i></button>
        </div>
    `;
    taskContainer.insertAdjacentHTML("beforeend", task);

    // Incrémenter le compteur de tâches et mettre à jour l'affichage du compteur
    taskCount += 1;
    displayCount(taskCount);

    const deleteButtons = document.querySelectorAll(".delete");
    deleteButtons.forEach((button) => {
        button.onclick = () => {
            button.parentElement.remove();
            taskCount -= 1;
            displayCount(taskCount);
        };
    });

    const editButtons = document.querySelectorAll(".edit");
    editButtons.forEach((editBtn) => {
        editBtn.onclick = (e) => {
            const targetElement = e.target.closest('.edit');
            const taskNameElement = targetElement.previousElementSibling;
            newTaskInput.value = taskNameElement.innerText;
            targetElement.parentElement.remove();
            taskCount -= 1;
            displayCount(taskCount);
        };
    });

    const tasksCheck = document.querySelectorAll(".task-check");
    tasksCheck.forEach((checkbox) => {
        checkbox.onchange = () => {
            checkbox.nextElementSibling.classList.toggle("completed");
            if (checkbox.checked) {
                taskCount -= 1;
            } else {
                taskCount += 1;
            }
            displayCount(taskCount);
        };
    });

    // Remettre à zéro l'entrée après l'ajout de la tâche
    newTaskInput.value = "";
};

addBtn.addEventListener("click", addTask);

window.onload = () =>{
        taskCount =0;
        displayCount(taskCount);
        newTaskInput.value ="";
}
