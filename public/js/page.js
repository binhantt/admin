var selectedData = null;
    
function handleClick(jsonData) {
    const item = JSON.parse(jsonData);
    selectedData = item;
    showselectModal();
}

function showselectModal() {
    my_modal_3.showModal();

    if (selectedData) {
        $('#modal-card-image').text(selectedData.img);
        $('#modal-category').text(selectedData.name);
        console.log(selectedData);
    }
}