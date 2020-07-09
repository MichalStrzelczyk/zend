<?php
// string = array of byte in utf8 as default
// Multibytes array - with special characters like ŁÓ
$name = 'John Snow';

var_dump(
    '$name', // '$name
    $name[0],   // J
    $name[-1],  // notice Uninitialized string offset: 9999
    $name[-11],  // ''
    $name[9999],  // notice Uninitialized string offset: 9999
    $name{3},   // n
    //${name},  //John Snow + warning
    ${'name'},  //John Snow
    "$name",    //John Snow
    "${name}",  //John Snow
    "${'name'}",//John Snow
    "${ name }",//John Snow
    "{$name}",  //John Snow
    "{ $name }",// "{ John Snow }"
    "$name[0]", // J
    "$name{0}", // "John Snow{0}"
);


$user = new \stdClass();
$user->name = 'John';

var_dump(
  "$user->name", // 'John'
    "{$user->name}"     // 'John'
);

$user->weapons = ['sword', 'dagger', 'bow'];

var_dump(
    //"$user->weapons[0]", // "Array[0]" + Notice
    "{$user->weapons[0]}" // sword
);

$name = 'John Snow';
$name[20] = "!";
var_dump(
    $name, // "John Snow           !"
    \count($name), // 1  because (array) $name = [$name] + warning
    strlen($name) //21
);

echo "\u{1F418}";

$longText = <<<HEREDOC

    This i a long text
    with new line    
    
    My name is: $name
    Name from object: $user->name
    
HEREDOC;

print_r($longText);
/*
 * 🐘
    This i a long text
    with new line

    My name is: John Snow           !
    Name from object: John Snow
 */

//nowdoc
$anotherLongText = <<<'EXAMPLE'
    
    What is Lorem Ipsum?
    
    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
    standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
    a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
    
    $name
EXAMPLE;
print_r($anotherLongText);


// !@#$%^&*()  1,2,3     a,b,c     A,B,C    ą,ć,ź
var_dump(
    'a' > 'A', // true
    'ą' > 'a', // true
    'ą' > 'A', // true
    'ą' > 0, // false
    'a' > 0, // false
    'a' > 1 ,// false
    '' > 'a', //false
    '!' < '1', //true
    'ź' > '~śśśśś sdasd ad sas dsad sa' // true
);

// https://unicode-table.com/en/#basic-latin
echo "\u{00020}" .PHP_EOL;

$sentence = 'John Snow';
var_dump(
    \strpos($sentence, 'Snow'), // 5
    array_search('Snow', ['John', 'Snow']) //1
);


//Escaped characters

var_dump("\t This is first paragraph. \r\n This is \f second. \v\v end.");

/*

\n	linefeed (LF or 0x0A (10) in ASCII)
\r	carriage return (CR or 0x0D (13) in ASCII)
\t	horizontal tab (HT or 0x09 (9) in ASCII)
\v	vertical tab (VT or 0x0B (11) in ASCII) (since PHP 5.2.5)
\e	escape (ESC or 0x1B (27) in ASCII) (since PHP 5.4.4)
\f	form feed (FF or 0x0C (12) in ASCII) (since PHP 5.2.5)
\\	backslash
\$	dollar sign
\"	double-quote
\[0-7]{1,3}	the sequence of characters matching the regular expression is a character in octal notation, which silently overflows to fit in a byte (e.g. "\400" === "\000")
\x[0-9A-Fa-f]{1,2}	the sequence of characters matching the regular expression is a character in hexadecimal notation
\u{[0-9A-Fa-f]+}	the sequence of characters matching the regular expression is a Unicode codepoint, which will be output to the string as that codepoint's UTF-8 representation (added in PHP 7.0.0)

*/

