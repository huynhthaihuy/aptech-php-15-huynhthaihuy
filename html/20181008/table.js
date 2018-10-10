function myFunction(){
var table='<table id="js-table" class="table"></table>';
$('#js-div-table').append(table);
var thead='<thead id="js-thead" class="thead"></thead>';
$(thead).appendTo("#js-table");
var tr = '<tr id="js-tr" class="tr"></tr>';
$(tr).appendTo("#js-thead");
var th ='<th>FirstName</th> <th>LastName</th> <th>Age</th>';
$(th).appendTo("#js-tr");

var tbody = '<tbody id="js-tbody"></tbody>';
$("#js-thead").after(tbody);
var trbody = '<tr id="js-trbody" class="trbody"></tr>';
$(trbody).appendTo("#js-tbody");
var tdbody ='<td>Huỳnh</td> <td>Huy</td> <td>21</td>';
$("#js-trbody").append(tdbody);

var tbody = '<tbody id="js-tbody"></tbody>';
$("#js-thead").after(tbody);
var trbody = '<tr id="js-trbody" class="trbody"></tr>';
$(trbody).appendTo("#js-tbody");
var tdbody ='<td>Phan</td> <td>Long</td> <td>21</td>';
$("#js-trbody").append(tdbody);
}
