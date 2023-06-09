// Function to add an asset to the database and update the HTML table
function addAsset() {
  // Get form data
  const assetID = document.getElementById('assetID').value;
  const assetName = document.getElementById('assetName').value;
  const location = document.getElementById('location').value;
  const status = document.getElementById('status').value;

  // Send data to PHP script
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'add_asset.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      // Update HTML table
      const assetsTable = document.getElementById('assets-table-body');
      assetsTable.innerHTML = this.responseText;
    }
  };
  xhr.send(`assetID=${assetID}&assetName=${assetName}&location=${location}&status=${status}`);
}

// Function to update the HTML table with data from the database
function updateAssetsTable() {
  // Send request to PHP script to fetch assets data
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'get_assets.php', true);
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      // Update HTML table
      const assetsTable = document.getElementById('assets-table-body');
      assetsTable.innerHTML = this.responseText;
    }
  };
  xhr.send();
}

// Call updateAssetsTable function on page load
updateAssetsTable();




// Function to remove an asset from the database and update the HTML table
function removeAsset(assetID) {
  // Send data to PHP script
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'remove_asset.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      // Update HTML table
      const assetsTable = document.getElementById('assets-table-body');
      assetsTable.innerHTML = this.responseText;
    }
  };
  xhr.send(`assetID=${assetID}`);
}
