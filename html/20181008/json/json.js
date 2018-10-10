        var tbl = { "text": ["Id", , "Name", "Email", "Password", "Created_at", "Updated_at"] }
        var div = document.createElement("div");
        div.id = "tbl";
        var Table = document.createElement("table");
        div.appendChild(Table);
        var tHead = document.createElement("thead");
        tHead.id = "tHead";
        tHead.classList.add("bg-info")
        Table.appendChild(tHead);
        var trHead = document.createElement("tr");
        trHead.id = "trHead";
        tHead.appendChild(trHead);
        for (x in tbl.text) {
            var thHead = document.createElement('th');
            var th_text = document.createTextNode
                (tbl.text[x]);
            thHead.appendChild(th_text);
            trHead.appendChild(thHead);
            thHead.className = "border border-dark";
        };
        var tBody = document.createElement("tbody");
        tBody.id = "tBody";
        Table.appendChild(tBody);
        for (i in a.users) {//lấy dữ liệu của mảng users trong data.user Nó chỉ trả về từng object con của users
            var trBody = document.createElement('tr')
            tBody.appendChild(trBody);
            for (n in a.users[i]) { //truy cập vào từng object của user
                var thBody = document.createElement('th');
                thBody.className = "border border-dark";
                trBody.appendChild(thBody);
                var th_text = document.createTextNode(a.users[i][n]);
                thBody.appendChild(th_text);
            }
        };
        document.body.appendChild(div);