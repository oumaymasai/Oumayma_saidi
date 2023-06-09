function handleAddinvButtonClick() {
    const invTable = document.getElementById("inventory");
    const invIdInput = prompt("Enter Product ID:");
    const invNameInput = prompt("Enter Product Name:");
    const stockInput = prompt("Enter Stock Level:");
    const recordInput = prompt("Enter Reorder Level:");
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${invIdInput}</td>
      <td>${invNameInput}</td>
      <td>${stockInput}</td>
      <td>${recordInput}</td>
    `;
    invTable.appendChild(row);
  }
  
  function handleRemoveinvButtonClick() {
    const index = prompt("Which row do you want to delete?");
    const invTable = document.getElementById("inventory");
    const invRows = invTable.getElementsByTagName("tr");
    if (index != null && !isNaN(index) && index >= 0 && index < invRows.length) {
      invTable.deleteRow(index);
    }
  }
  
  const addinvButton = document.querySelector("addButton");
  addinvButton.addEventListener("click", handleAddinvButtonClick);
  
  const removeButton = document.querySelector("removeButton");
  removeButton.addEventListener("click", handleRemoveinvButtonClick);
  