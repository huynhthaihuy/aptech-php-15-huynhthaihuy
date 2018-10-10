    var table='<table id="js-table" class="table"></table>';
    $('#js-div-table').append(table);
    var thead='<thead id="js-thead" class="thead"></thead>';
    $(thead).appendTo("#js-table");
    var tr = '<tr id="js-tr" class="tr"></tr>';
    $(tr).appendTo("#js-thead");
    var th ='<th>id</th> <th>Name</th> <th>Email</th> <th> Password</th> <th>Created_at</th> <th>Updated_at</th>';
    $(th).appendTo("#js-tr");
    
    var tbody = '<tbody id="js-tbody"></tbody>';
    $("#js-thead").after(tbody);
    var trbody = '<tr id="js-trbody" class="trbody"></tr>';
    $(trbody).appendTo("#js-tbody");
    var tdbody ='<td> + users.id + </td> <td>+ users.name +</td> <td>+ users.email +</td> <td>+ users.password + </td> <td>+ create_at+</td> <td>+ updated_at +</td>';
    $("#js-trbody").append(tdbody);
    