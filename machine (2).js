// Function to retrieve machine information from the database
function getMachineInfo() {
    // Get machine name from form
    const machineName = document.getElementById('machineName').value;
  
    // Send data to PHP script
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'get_data.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        // Update machine info div
        document.getElementById('machineinf').innerHTML = this.responseText;
      }
    };
    xhr.send(`machineName=${machineName}`);
  }
  