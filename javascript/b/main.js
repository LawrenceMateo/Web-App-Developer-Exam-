var xmlHttp = new XMLHttpRequest();
var forSort = [];


xmlHttp.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
        let res = JSON.parse(this.responseText);
        for (var i in res){
            for (j=0; j<res[i].length; j++){
                forSort.push({'id':res[i][j].id, 'lastName':res[i][j].lastName});
                document.getElementById('first_name').value = res[i][j].firstName;
                document.getElementById('last_name').value = res[i][j].lastName;
                document.getElementById('birthday').value = res[i][j].birthday;
                if (res[i][j].gender.female){
                    document.getElementById('female').checked = true;    
                }
                document.getElementById('known_language').innerHTML = `
                    <li>${res[i][j].knownLanguage[0]}</li>
                    <li>${res[i][j].knownLanguage[1]}</li>
                `;
            }
            
        }
    };

}
xmlHttp.open("GET", "employees.json", true);
xmlHttp.send();

