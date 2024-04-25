const addBtn = document.querySelector("#add-btn");
const newTaskInput =document.querySelector("#wrapper input");
const taskContainer = document.querySelector("#tasks");
const error=document.getElementById("error");
const countValue = document.querySelector("#const-value");

let taskCount = 0;

const displayCount = (taskCount) => {
    countValue.innerText = taskCount;
};

const adddTask = () =>{
    const taskName = newTaskInput.value.trim();
    error.style.display ="none";

    if(!taskName){
        setTimeout(() => {
            error.style.direction = "block";
        },200);
        return;
    }

    const task = `
    <div class="task">
        <input type="checkbox" class="task-check">
        <span class="taskname">${taskName}</span>
        <button class="edit">✏️</button>
        <button class="delete">🗑️</button>
    </div>
`;
taskContainer.insertAdjacentHTML("beforeend", task);
};

addBtn.addEventListener("click",adddTask);
