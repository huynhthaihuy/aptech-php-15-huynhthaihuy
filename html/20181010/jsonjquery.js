    var table = '<table id="js-table" class="table"></table>';
    $('#js-div-table').append(table);
    var thead = '<thead id="js-thead" class="thead bg-success"></thead>';
    $(thead).appendTo('#js-table');
    var tr = '<tr id="js-tr-head"></tr>';
    $(tr).appendTo('#js-thead');
    var th = '<th>Id</th><th>Name</th><th>Email</th><th>Password</th><th>Created_at</th><th>Updated_at</th>';
    $(th).appendTo('#js-tr-head');
    var tbody = ' <tbody class="tbody bg-info"></tbody>';
    $('#js-thead').after(tbody);
    for (i = 0; i < a.users.length; i++) {
      var trBody = '<tr id="trBody-' + a.users[i].id + '"></tr>';
      $(trBody).appendTo('tbody');
      var thBody = ' <th>' + (i + 8) + '</th>';
      var tdBody = '<td>' + a.users[i].name + '</td><td>' + a.users[i].email + '</td><td>'+ a.users[i].password + '</td><td>'+ a.users[i].created_at + '</td><td>'+ a.users[i].updated_at + '</td> ';
      $('#trBody-' + a.users[i].id).append(thBody, tdBody);
    }