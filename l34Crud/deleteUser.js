const myModal = document.getElementById("myModal");
const delUserId = document.getElementById("delUserId");
myModal.addEventListener("show.bs.modal", (e) => {
  const button = e.relatedTarget;
  const recipient = button.getAttribute("data-bs-id");
  delUserId.value = recipient;
});
