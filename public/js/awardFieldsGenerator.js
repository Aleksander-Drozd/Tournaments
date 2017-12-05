var counter = 0;

function createRow() {
    var row = document.createElement('div');
    row.className = 'row';
    row.id = 'row' + ++counter;
    return row;
}

function createLabel() {
    var label = document.createElement('label');
    label.className = 'col-md-4 control-label';
    return label;
}

function createPlaceInput(count, place) {
    var div = document.createElement('div');
    div.className = 'col-md-2';
    var input = document.createElement('input');
    input.setAttribute('type', 'number');
    input.setAttribute('min', '1');
    input.setAttribute('value', place);
    input.className = 'form-control';
    input.setAttribute('placeholder', 'Place');
    input.setAttribute('name', 'awards[' + count + '][place]');
    div.appendChild(input);
    return div;
}

function createPrizeInput(count, prize) {
    var div = document.createElement('div');
    div.className = 'col-md-3';
    var input = document.createElement('input');
    input.className = 'form-control';
    input.setAttribute('value', prize);
    input.setAttribute('placeholder', 'Prize');
    input.setAttribute('name', 'awards[' + count + '][prize]');
    div.appendChild(input);
    return div;
}

function createMinusButton(count) {
    var div = document.createElement('div');
    div.className = 'col-md-1';
    var button = document.createElement('button');
    button.className = 'btn btn-num-control btn-minus';
    button.setAttribute('type', 'button');
    button.textContent = '-';
    button.id = 'minusButton' + count;
    button.addEventListener('click', function () {
        removeAwardRow(this.id.slice(11));
    }, false);
    div.appendChild(button);
    return div;
}

function addAwardRow(place='', prize='') {
    var row = createRow();
    row.appendChild(createLabel());
    row.appendChild(createPlaceInput(counter, place));
    row.appendChild(createPrizeInput(counter, prize));
    row.appendChild(createMinusButton(counter));
    var parent = document.getElementById('awards');
    parent.insertBefore(row, parent.children[parent.children.length - 1])
}

function removeAwardRow(id) {
    var rowToRemove = document.getElementById('row' + id);
    var parent = document.getElementById('awards');
    if (document.getElementById('awards').children.length === 2 ||
        Array.prototype.indexOf.call(parent.childNodes, rowToRemove) === 0) {
        return;
    }
    parent.removeChild(rowToRemove);
}
