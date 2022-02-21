<?php
function familynames($fnames){
    echo "$fnames <br>";
}

familynames("Washington");
familynames("Amos");
familynames("Benjamin");
familynames("Lindah");
familynames("Rebecca");
familynames("Grace");
echo "<br>";

function myschool() {
    echo "My school is emobilis and it is a very nice school";
}
myschool();
echo"<br>";
echo "<br>";


myschool();
echo "<br>";
echo "<br>";

function homename($firstname, $lastname, $age){
    echo "My first is $firstname and my second name is $lastname and am $age years old <br>";
}
homename("Washington","Heri", "28");
homename("Amos", "Mtawali", "25");
homename("Benjamin", "Taura", "22");
homename("Lindah", "Chifwe", "21");
homename("Rebecca", "Mwaka", "17");
homename("Grace", "Mulongo", "15");
echo "<br>";
function nicecars($nameofcar, $speed) {
    echo "I love a $nameofcar because it has a speed of $speed <br>";
}
nicecars("BMW", "200km/h");
nicecars("Land cruiser", "230km/k");