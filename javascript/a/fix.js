var str = 'TheQuickBrownFoxJumpsOverTheLazyDog';

fixer = (val) => {

    let stringVal = val;
    let char = '';
    let fix = '';

    /*
        Checks each etter of the string and places each letter to fix variable
        If the letter is in uppercase replaces it with lowercase letter
    */
    for (i=0; i<stringVal.length; i++){
        char = stringVal.charAt(i);
        if (char == char.toUpperCase()){
            fix = fix + ' ';
            fix = fix + char.toLowerCase();            
        } else {
            fix = fix + char;
        }
    }

    // Trims white spaces and turn the first letter to uppercase
    fix = fix.trim();
    fix = fix.charAt(0).toUpperCase() + fix.slice(1);

    return fix;
}

document.getElementById('para').innerHTML = fixer(str);




